<?php

/**
 * @file
 * Contains \Drupal\mbp\Plugin\Field\FieldType\MBPItem.
 */

namespace Drupal\mbp\Plugin\Field\FieldType;

use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\TypedData\DataDefinition;

/**
 * Plugin implementation of the 'mbp' field type.
 *
 * @FieldType(
 *   id = "mbp",
 *   label = @Translation("Menu Block Placement"),
 *   description = @Translation("My Field"),
 *   default_widget = "mbp_default",
 *   default_formatter = "mbp_formatter"
 * )
 */
class MBPItem extends FieldItemBase {

  /**
   * {@inheritdoc}
   */
  public static function schema(FieldStorageDefinitionInterface $field) {
    $schema = array();
    $schema['columns'] = array(
      'mlid' => array(
        'type' => 'varchar',
        'length' => 255,
        'not null' => FALSE,
        'default' => '',
      ),
    );

    return $schema;
  }

  /**
   * {@inheritdoc}
   */
  public function isEmpty() {
    $value = $this->get('source_code')->getValue();
    return $value === NULL || $value === '';
  }

  /**
   * {@inheritdoc}
   */
  static $propertyDefinitions;

  /**
   * {@inheritdoc}
   */
  public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition) {
    $properties['source_description'] = DataDefinition::create('string')
      ->setLabel(t('Snippet description'));

    $properties['source_code'] = DataDefinition::create('string')
      ->setLabel(t('Snippet code'));

    $properties['source_lang'] = DataDefinition::create('string')
      ->setLabel(t('Last comment timestamp'))
      ->setDescription(t('Snippet code language'));

    return $properties;
  }

  /**
   * {@inheritdoc}
   */
  public function isRequired() {
    return !empty($this->definition ['required']);
  }
}
