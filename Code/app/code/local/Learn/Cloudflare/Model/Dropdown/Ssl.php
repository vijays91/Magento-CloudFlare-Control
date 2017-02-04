<?php
class Learn_Cloudflare_Model_Dropdown_Ssl
{
	/*
	*
	*
	*/
	public function toOptionArray() {
		return array(
			array('value' => '', 'label' =>'-- Select --'),
			array('value' => 'off', 'label' =>'Off'),
			array('value' => 'flexible', 'label' =>'Flexible'),
			array('value' => 'full', 'label' => 'Full'),
			array('value' => 'strict', 'label' =>'Full (strict)'),
		);
	}
}