<?php
class Learn_Cloudflare_Block_Adminhtml_System_Config_Form_Button extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        $url = $this->getUrl('cloudflare/adminhtml_index/flush'); 
        $this->setElement($element);
        $html = $this->getLayout()->createBlock('adminhtml/widget_button')
                    ->setType('button')
                    ->setClass('scalable')
                    ->setLabel('Flush Now !')
                    ->setOnClick("setLocation('$url')")
                    ->toHtml();

        return $html;
    }
}