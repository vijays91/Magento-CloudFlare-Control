<?php
class Learn_Cloudflare_Model_Dropdown_Autominify
{
	/*
	*
	*
	*/
	public function toOptionArray() {
		return array(
			array('value' => '', 'label' =>'-- Select --'),
			array('value' => '0', 'label' =>'Off'),
			array('value' => '1', 'label' =>'HTML only'),
			array('value' => '2', 'label' =>'CSS only'),
			array('value' => '3', 'label' =>'JavaScript only'),
			array('value' => '4', 'label' =>'HTML and CSS'),
			array('value' => '5', 'label' =>'CSS and JavaScript '),
			array('value' => '6', 'label' =>'HTML and JavaScript'),
			array('value' => '7', 'label' =>'HTML, CSS and JavaScript')
		);
	}
}