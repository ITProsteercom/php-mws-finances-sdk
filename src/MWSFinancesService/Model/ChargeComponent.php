<?php
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
 * MWSFinancesService_Model_ChargeComponent
 *
 * Properties:
 * <ul>
 *
 * <li>ChargeType: string</li>
 * <li>ChargeAmount: MWSFinancesService_Model_Currency</li>
 *
 * </ul>
 * @property array _fields
 */
class MWSFinancesService_Model_ChargeComponent extends MWSFinancesService_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'ChargeType' => array('FieldValue' => null, 'FieldType' => 'string'),
            'ChargeAmount' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the ChargeType property.
     *
     * @return String ChargeType.
     */
    public function getChargeType()
    {
        return $this->_fields['ChargeType']['FieldValue'];
    }

    /**
     * Check to see if ChargeType is set.
     *
     * @return true if ChargeType is set.
     */
    public function isSetChargeType()
    {
        return !is_null($this->_fields['ChargeType']['FieldValue']);
    }

    /**
     * Set the value of ChargeType, return this.
     *
     * @param chargeType
     *             The new value to set.
     *
     * @return MWSFinancesService_Model_ChargeComponent|This
     */
    public function withChargeType($value)
    {
        $this->setChargeType($value);
        return $this;
    }

    /**
     * Set the value of the ChargeType property.
     *
     * @param string chargeType
     * @return MWSFinancesService_Model_ChargeComponent|this
     */
    public function setChargeType($value)
    {
        $this->_fields['ChargeType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the ChargeAmount property.
     *
     * @return Currency ChargeAmount.
     */
    public function getChargeAmount()
    {
        return $this->_fields['ChargeAmount']['FieldValue'];
    }

    /**
     * Check to see if ChargeAmount is set.
     *
     * @return true if ChargeAmount is set.
     */
    public function isSetChargeAmount()
    {
        return !is_null($this->_fields['ChargeAmount']['FieldValue']);
    }

    /**
     * Set the value of ChargeAmount, return this.
     *
     * @param chargeAmount
     *             The new value to set.
     *
     * @return MWSFinancesService_Model_ChargeComponent|This
     */
    public function withChargeAmount($value)
    {
        $this->setChargeAmount($value);
        return $this;
    }

    /**
     * Set the value of the ChargeAmount property.
     *
     * @param MWSFinancesService_Model_Currency chargeAmount
     * @return MWSFinancesService_Model_ChargeComponent|this
     */
    public function setChargeAmount($value)
    {
        $this->_fields['ChargeAmount']['FieldValue'] = $value;
        return $this;
    }

}