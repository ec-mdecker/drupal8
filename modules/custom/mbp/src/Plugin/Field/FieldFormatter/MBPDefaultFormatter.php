<?php

/**
 * @file
 * Contains \Drupal\mbp\Plugin\field\formatter\MBPDefaultFormatter.
 */

namespace Drupal\mbp\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Component\Utility\String;

/**
 * Plugin implementation of the 'mbp' formatter.
 *
 * @FieldFormatter(
 *   id = "mbp_formatter",
 *   label = @Translation("Menu Block Placement"),
 *   field_types = {
 *     "mbp",
 *   },
 * )
 */
class MBPDefaultFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items) {
    $elements = array();

    foreach ($items as $delta => $item) {

    }

    return $elements;
  }

}
