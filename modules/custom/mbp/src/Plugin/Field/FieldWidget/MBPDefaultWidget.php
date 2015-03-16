<?php

/**
 * @file
 * Contains \Drupal\mbp\Plugin\Field\FieldWidget\MBPDefaultWidget.
 */

namespace Drupal\mbp\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;


/**
 * Plugin implementation of the 'mbp' widget.
 *
 * @FieldWidget(
 *   id = "mbp_default",
 *   label = @Translation("Menu Block Placement"),
 *   field_types = {
 *     "mbp"
 *   },
 * )
 */
class MBPDefaultWidget extends WidgetBase {
  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    if ($element['#delta'] != 0) {
      $element['menus'] = array(
        '#type' => 'checkboxes',
        '#title' => t('Menus'),
        '#options' => menu_list_system_menus(),
      );
      $element['options'] = array(
        '#type' => 'fieldset',
      );
      $element['options']['regions'] = array(
        '#type' => 'checkbox',
        '#title' => t('Include Region Select List'),
      );
      $element['options']['individual'] = array(
        '#type' => 'checkbox',
        '#title' => t('Include Individual Pages Checkbox'),
      );
      return $element;
    }

    return FALSE;
  }
}
