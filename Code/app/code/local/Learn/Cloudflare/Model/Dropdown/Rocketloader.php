<?php
class Learn_Cloudflare_Model_Dropdown_Rocketloader
{
	/*
	*
	*
	*/
	public function toOptionArray() {
		return array(
			array('value' => '', 'label' =>'-- Select --'),
			array('value' => 'off', 'label' =>'Off'),  
			array('value' => 'on', 'label' =>'Automatic'),
			array('value' => 'manual', 'label' => 'Manual'),
		);
	}
}