<?php

class Brabs_NewsletterAPI_Model_Api extends Mage_Api_Model_Resource_Abstract
{

    public function __construct()
    {
        $this->_attributesMap = array();
    }

    public function items($filters = null) {
        try {
            $subscribersList = Mage::getModel('newsletter/subscriber')->getCollection();

            $apiHelper = Mage::helper('api');
            $filters = $apiHelper->parseFilters($filters);
            try {
                foreach ($filters as $field => $value) {
                    $subscribersList->addFieldToFilter($field, $value);
                }

                return $subscribersList->load();

            } catch (Mage_Core_Exception $e) {
                $this->_fault('data_invalid', $e->getMessage());
            }

        } catch (Exception $e) {
            $this->_fault('data_invalid', $e->getMessage());
        }
    }

}