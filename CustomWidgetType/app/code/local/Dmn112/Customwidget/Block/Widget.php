<?php
class Dmn112_Customwidget_Block_Widget extends Mage_Core_Block_Abstract implements Mage_Widget_Block_Interface
{
    protected function _toHtml() {
				
		$html = '';
		$link_options = self::getData('link_options');
		
		if (empty($link_options)) {
		  return $html;
		}
		  
		$arr_options = explode(',', $link_options);
		  
		if (is_array($arr_options) && count($arr_options)) {
		  foreach ($arr_options as $option) {
			Switch ($option) {
			  case '1':
				$html .= '<div><a href="javascript: window.print();">Print</a></div>';
			  break;
			  case '2':
				$html .= '<div><a href="mailto:yourcompanyemail@domain.com&subject=Inquiry">Contact Us</a></div>';
			  break;
			}
		  }
		}
		
		$custom_text = self::getData('custom_text');
		if (!empty($custom_text)) {
		    $html .= '<div>';
				$html .= '<p>'.$custom_text.'</p>';
			$html .= '</div>';
		}	
		 
		return $html;
  }
	
	
}