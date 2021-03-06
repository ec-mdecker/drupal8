<?php

/**
 * @file
 * Contains \Drupal\devel\Controller\DevelController.
 */

namespace Drupal\devel\Controller;

use Drupal\Component\Serialization\Json;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database\Database;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Field;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\Session\UserSession;
use Drupal\Core\Url;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

/**
 * Returns responses for devel module routes.
 */
class DevelController extends ControllerBase {

  /**
   * Clears all caches, then redirects to the previous page.
   */
  public function cacheClear() {
    drupal_flush_all_caches();
    drupal_set_message('Cache cleared.');
    return $this->redirect('<front>');
  }

  public function menuItem() {
    $item = menu_get_item(current_path());
    return kdevel_print_object($item);
  }

  public function themeRegistry() {
    $hooks = theme_get_registry();
    ksort($hooks);
    return array('#markup' => kprint_r($hooks, TRUE));
  }

  /**
   * Builds the elements info overview page.
   *
   * @return array
   *   Array of page elements to render.
   */
  public function elementsPage() {
    $element_info_manager = \Drupal::service('element_info');

    $elements_info = array();
    foreach ($element_info_manager->getDefinitions() as $element_type => $definition) {
      $elements_info[$element_type] = $definition + $element_info_manager->getInfo($element_type);
    }

    ksort($elements_info);

    return array('#markup' => kdevel_print_object($elements_info));
  }

  public function fieldInfoPage() {
    $field_info = Field::fieldInfo();
    $info = $field_info->getFields();
    $output = kprint_r($info, TRUE, t('Fields'));

    $info = $field_info->getInstances();
    $output .= kprint_r($info, TRUE, t('Instances'));

    $info = entity_get_bundles();
    $output .= kprint_r($info, TRUE, t('Bundles'));

    $info = \Drupal::service('plugin.manager.field.field_type')->getConfigurableDefinitions();
    $output .= kprint_r($info, TRUE, t('Field types'));

    $info = \Drupal::service('plugin.manager.field.formatter')->getDefinitions();
    $output .= kprint_r($info, TRUE, t('Formatter types'));

    //$info = field_info_storage_types();
    //$output .= kprint_r($info, TRUE, t('Storage types'));

    $info = \Drupal::service('plugin.manager.field.widget')->getDefinitions();
    $output .= kprint_r($info, TRUE, t('Widget types'));
    return $output;
  }

  /**
   * Builds the entity types overview page.
   *
   * @return array
   *   Array of page elements to render.
   */
  public function entityInfoPage() {
    $types = $this->entityManager()->getEntityTypeLabels();
    ksort($types);
    $result = array();
    foreach (array_keys($types) as $type) {
      $definition = $this->entityManager()->getDefinition($type);
      $reflected_definition = new \ReflectionClass($definition);
      $props = array();
      foreach ($reflected_definition->getProperties() as $property) {
        $property->setAccessible(TRUE);
        $value = $property->getValue($definition);
        $props[$property->name] = $value;
      }
      $result[$type] = $props;
    }

    return array('#markup' => kprint_r($result, TRUE));
  }

  /**
   * Builds the state variable overview page.
   *
   * @return array
   *   Array of page elements to render.
   */
  public function stateSystemPage() {

    $header = array(
      'name' => array('data' => t('Name')),
      'value' => array('data' => t('Value')),
      'edit' => array('data' => t('Operations')),
    );

    $rows = array();
    // State class doesn't have getAll method so we get all states from the
    // KeyValueStorage and put them in the table.
    foreach ($this->keyValue('state')->getAll() as $state_name => $state) {
      $operations['edit'] = array(
        'title' => $this->t('Edit'),
        'url' => Url::fromRoute('devel.system_state_edit', array('state_name' => $state_name)),
      );
      $rows[$state_name] = array(
        'name' => $state_name,
        'value' => kprint_r($state, TRUE),
        'edit' => array(
          'data' => array(
            '#type' => 'operations',
            '#links' => $operations,
          )
        ),
      );
    }

    $output['states'] = array(
      '#type' => 'table',
      '#header' => $header,
      '#rows' => $rows,
      '#empty' => $this->t('No state variables.'),
    );

    return $output;
  }

  /**
   * Builds the session overview page.
   *
   * @return array
   *   Array of page elements to render.
   */
  public function session() {
    $output['description'] = array(
      '#markup' => '<p>' . $this->t('Here are the contents of your $_SESSION variable.') . '</p>',
    );
    $output['session'] = array(
      '#type' => 'table',
      '#header' => array($this->t('Session name'), $this->t('Session ID')),
      '#rows' => array(array(session_name(), session_id())),
      '#empty' => $this->t('No session available.'),
    );
    $output['data'] = array(
      '#markup' => kprint_r($_SESSION, TRUE),
    );

    return $output;
  }

  /**
   * Prints the loaded structure of the current entity.
   *
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   *    A RouteMatch object.
   *
   * @return array
   *    Array of page elements to render.
   */
  public function entityLoad(RouteMatchInterface $route_match) {
    $output = array();

    $parameter_name = $route_match->getRouteObject()->getOption('_devel_entity_type_id');
    $entity = $route_match->getParameter($parameter_name);

    if ($entity && $entity instanceof EntityInterface) {
      $output = array('#markup' => kdevel_print_object($entity));
    }

    return $output;
  }

  /**
   * Prints the render structure of the current entity.
   *
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   *    A RouteMatch object.
   *
   * @return array
   *    Array of page elements to render.
   */
  public function entityRender(RouteMatchInterface $route_match) {
    $output = array();

    $parameter_name = $route_match->getRouteObject()->getOption('_devel_entity_type_id');
    $entity = $route_match->getParameter($parameter_name);

    if ($entity && $entity instanceof EntityInterface) {
      $entity_type_id = $entity->getEntityTypeId();
      $view_hook = $entity_type_id . '_view';

      $build = array();
      // If module implements own {entity_type}_view
      if (function_exists($view_hook)) {
        $build = $view_hook($entity);
      }
      // If entity has view_builder handler
      elseif ($this->entityManager()->hasHandler($entity_type_id, 'view_builder')) {
        $build = $this->entityManager()->getViewBuilder($entity_type_id)->view($entity);
      }

      $output = array('#markup' => kdevel_print_object($build));
    }

    return $output;
  }

  /**
   * Switches to a different user.
   *
   * We don't call session_save_session() because we really want to change users.
   * Usually unsafe!
   *
   * @param string $name
   *   The username to switch to, or NULL to log out.
   *
   * @return \Symfony\Component\HttpFoundation\RedirectResponse
   */
  public function switchUser($name = NULL) {
    // global $user;

    // $module_handler = $this->moduleHandler();
    // $session_manager = \Drupal::service('session_manager');

    if ($uid = $this->currentUser()->id()) {
      // @todo Is this needed?
      // user_logout();
    }
    if (isset($name) && $account = user_load_by_name($name)) {
      // See https://www.drupal.org/node/218104
      $accountSwitcher = Drupal::service('account_switcher');
      $accountSwitcher->switchTo(new UserSession(array('uid' => $account->getId())));

      // Send her on her way.
      $destination = drupal_get_destination();
      $url = $this->getUrlGenerator()
        ->generateFromPath($destination['destination'], array('absolute' => TRUE));
      return new RedirectResponse($url);
    }
  }

  /**
   * Returns the core version.
   */
  public static function getCoreVersion($version) {
    $version_parts = explode('.', $version);
    // Map from 4.7.10 -> 4.7
    if ($version_parts[0] < 5) {
      return $version_parts[0] . '.' . $version_parts[1];
    }
    // Map from 5.5 -> 5 or 6.0-beta2 -> 6
    else {
      return $version_parts[0];
    }
  }

  /**
   * Explain query callback called by the AJAX link in the query log.
   */
  function queryLogExplain($request_id = NULL, $qid = NULL) {
    if (!is_numeric($request_id)) {
      throw new AccessDeniedHttpException();
    }

    $path = "temporary://devel_querylog/$request_id.txt";
    $path = file_stream_wrapper_uri_normalize($path);

    $header = $rows = array();

    if (file_exists($path)) {
      $queries = Json::decode(file_get_contents($path));

      if ($queries !== FALSE && isset($queries[$qid])) {
        $query = $queries[$qid];
        $result = db_query('EXPLAIN ' . $query['query'], (array)$query['args'])->fetchAllAssoc('table');

        $i = 1;
        foreach ($result as $row) {
          $row = (array)$row;
          if ($i == 1) {
            $header = array_keys($row);
          }
          $rows[] = array_values($row);
          $i++;
        }
      }
    }

    $build['explain'] = array(
      '#type' => 'table',
      '#header' => $header,
      '#rows' => $rows,
      '#empty' => $this->t('No explain log found.'),
    );

    $GLOBALS['devel_shutdown'] = FALSE;

    return new Response(drupal_render($build));
  }

  /**
   * Show query arguments, called by the AJAX link in the query log.
   */
  function queryLogArguments($request_id = NULL, $qid = NULL) {
    if (!is_numeric($request_id)) {
      throw new AccessDeniedHttpException();
    }

    $path = "temporary://devel_querylog/$request_id.txt";
    $path = file_stream_wrapper_uri_normalize($path);

    $output = $this->t('No arguments log found.');

    if (file_exists($path)) {
      $queries = Json::decode(file_get_contents($path));

      if ($queries !== FALSE && isset($queries[$qid])) {
        $query = $queries[$qid];
        $conn = Database::getConnection();

        $quoted = array();
        foreach ((array)$query['args'] as $key => $val) {
          $quoted[$key] = is_null($val) ? 'NULL' : $conn->quote($val);
        }
        $output = strtr($query['query'], $quoted);
      }
    }

    $GLOBALS['devel_shutdown'] = FALSE;

    return new Response($output);
  }

}
