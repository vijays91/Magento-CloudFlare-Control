<?php
class Learn_Cloudflare_Model_Dropdown_Security
{
	/*
	*
	*
	*/
	public function toOptionArray() {
		return array(
			array('value' => '', 'label' =>'-- Select --'),
			array('value' => 'off', 'label' =>'Off (Enterprise plan)'),
			array('value' => 'essentially_off', 'label' =>'Essentially Off'),
			array('value' => 'low', 'label' => 'Low'),
			array('value' => 'medium', 'label' =>'Medium'),
			array('value' => 'high', 'label' =>'High'),
			array('value' => 'under_attack', 'label' =>'Attack')
		);
	}
}