<?php
class Learn_Cloudflare_Model_Dropdown_Cachinglevel
{
	/*
	*
	*
	*/
	public function toOptionArray() {
		return array(
			array('value' => '', 'label' =>'-- Select --'),
			array('value' => 'basic', 'label' =>'Basic ( No Query String )'),
			array('value' => 'simplified', 'label' => 'Simple ( Ignore Query String )'),
			array('value' => 'aggressive', 'label' =>'Aggressive ( Standard )')
		);
	}
}