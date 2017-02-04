<?php
class Learn_Cloudflare_Model_Dropdown_Alwaysonline
{
	/*
	*
	*
	*/
	public function toOptionArray()
	{
		return array(
			array('value' => '', 'label' =>'-- Select --'),
			array('value' => 'on', 'label' =>'On'),
			array('value' => 'off', 'label' => 'Off')
		);
	}
}