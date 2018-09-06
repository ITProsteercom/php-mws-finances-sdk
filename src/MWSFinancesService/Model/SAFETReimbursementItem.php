<?php namespace MwsFinances\Model;
/*******************************************************************************
 * Copyright 2009-2018 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 *
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  MWS Finances Service
 * @version  2015-05-01
 * Library Version: 2018-03-22
 * Generated: Thu Mar 15 07:12:28 GMT 2018
 */

use MwsFinances\MWSFinancesService_Model;

/**
 * @see MWSFinancesService_Model
 */




/**
 * MWSFinancesService_Model_SAFETReimbursementItem
 *
 * Properties:
 * <ul>
 *
 * <li>itemChargeList: array</li>
 * <li>productDescription: string</li>
 * <li>quantity: string</li>
 *
 * </ul>
 * @property array _fields
 */
class MWSFinancesService_Model_SAFETReimbursementItem extends MWSFinancesService_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'itemChargeList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_ChargeComponent'), 'ListMemberName' => 'ChargeComponent'),
            'productDescription' => array('FieldValue' => null, 'FieldType' => 'string'),
            'quantity' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the itemChargeList property.
     *
     * @return List<ChargeComponent> itemChargeList.
     */
    public function getitemChargeList()
    {
        if ($this->_fields['itemChargeList']['FieldValue'] == null) {
            $this->_fields['itemChargeList']['FieldValue'] = array();
        }
        return $this->_fields['itemChargeList']['FieldValue'];
    }

    /**
     * Set the value of the itemChargeList property.
     *
     * @param array itemChargeList
     * @return MWSFinancesService_Model_SAFETReimbursementItem|this
     */
    public function setitemChargeList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['itemChargeList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear itemChargeList.
     */
    public function unsetitemChargeList()
    {
        $this->_fields['itemChargeList']['FieldValue'] = array();
    }

    /**
     * Check to see if itemChargeList is set.
     *
     * @return true if itemChargeList is set.
     */
    public function isSetitemChargeList()
    {
        return !empty($this->_fields['itemChargeList']['FieldValue']);
    }

    /**
     * Add values for itemChargeList, return this.
     *
     * @return MWSFinancesService_Model_SAFETReimbursementItem|This
     */
    public function withitemChargeList()
    {
        foreach (func_get_args() as $itemChargeList) {
            $this->_fields['itemChargeList']['FieldValue'][] = $itemChargeList;
        }
        return $this;
    }

    /**
     * Get the value of the productDescription property.
     *
     * @return String productDescription.
     */
    public function getproductDescription()
    {
        return $this->_fields['productDescription']['FieldValue'];
    }

    /**
     * Check to see if productDescription is set.
     *
     * @return true if productDescription is set.
     */
    public function isSetproductDescription()
    {
        return !is_null($this->_fields['productDescription']['FieldValue']);
    }

    /**
     * Set the value of productDescription, return this.
     *
     * @param productDescription
     *             The new value to set.
     *
     * @return MWSFinancesService_Model_SAFETReimbursementItem|This
     */
    public function withproductDescription($value)
    {
        $this->setproductDescription($value);
        return $this;
    }

    /**
     * Set the value of the productDescription property.
     *
     * @param string productDescription
     * @return MWSFinancesService_Model_SAFETReimbursementItem|this
     */
    public function setproductDescription($value)
    {
        $this->_fields['productDescription']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the quantity property.
     *
     * @return String quantity.
     */
    public function getquantity()
    {
        return $this->_fields['quantity']['FieldValue'];
    }

    /**
     * Check to see if quantity is set.
     *
     * @return true if quantity is set.
     */
    public function isSetquantity()
    {
        return !is_null($this->_fields['quantity']['FieldValue']);
    }

    /**
     * Set the value of quantity, return this.
     *
     * @param quantity
     *             The new value to set.
     *
     * @return MWSFinancesService_Model_SAFETReimbursementItem|This
     */
    public function withquantity($value)
    {
        $this->setquantity($value);
        return $this;
    }

    /**
     * Set the value of the quantity property.
     *
     * @param string quantity
     * @return MWSFinancesService_Model_SAFETReimbursementItem|this
     */
    public function setquantity($value)
    {
        $this->_fields['quantity']['FieldValue'] = $value;
        return $this;
    }

}
