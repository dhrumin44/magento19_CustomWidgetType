<?php
class Dmn112_Customwidget_Model_Options {
/**
  * Provide available options as a value/label array
  *
  * @return array
  */
  public function toOptionArray() {
    return array(
      array('value' => '1', 'label' => 'Print Button'),
      array('value' => '2', 'label' => 'Inquiry Email Button'),
    );
  }
}