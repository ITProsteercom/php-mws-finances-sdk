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
 * MWSFinancesService_Model_DebtRecoveryEvent
 *
 * Properties:
 * <ul>
 *
 * <li>DebtRecoveryType: string</li>
 * <li>RecoveryAmount: MWSFinancesService_Model_Currency</li>
 * <li>OverPaymentCredit: MWSFinancesService_Model_Currency</li>
 * <li>DebtRecoveryItemList: array</li>
 * <li>ChargeInstrumentList: array</li>
 *
 * </ul>
 * @property array _fields
 */
class MWSFinancesService_Model_DebtRecoveryEvent extends MWSFinancesService_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'DebtRecoveryType' => array('FieldValue' => null, 'FieldType' => 'string'),
            'RecoveryAmount' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
            'OverPaymentCredit' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
            'DebtRecoveryItemList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_DebtRecoveryItem'), 'ListMemberName' => 'DebtRecoveryItem'),
            'ChargeInstrumentList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_ChargeInstrument'), 'ListMemberName' => 'ChargeInstrument'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the DebtRecoveryType property.
     *
     * @return String DebtRecoveryType.
     */
    public function getDebtRecoveryType()
    {
        return $this->_fields['DebtRecoveryType']['FieldValue'];
    }

    /**
     * Check to see if DebtRecoveryType is set.
     *
     * @return true if DebtRecoveryType is set.
     */
    public function isSetDebtRecoveryType()
    {
        return !is_null($this->_fields['DebtRecoveryType']['FieldValue']);
    }

    /**
     * Set the value of DebtRecoveryType, return this.
     *
     * @param debtRecoveryType
     *             The new value to set.
     *
     * @return MWSFinancesService_Model_DebtRecoveryEvent|This
     */
    public function withDebtRecoveryType($value)
    {
        $this->setDebtRecoveryType($value);
        return $this;
    }

    /**
     * Set the value of the DebtRecoveryType property.
     *
     * @param string debtRecoveryType
     * @return MWSFinancesService_Model_DebtRecoveryEvent|this
     */
    public function setDebtRecoveryType($value)
    {
        $this->_fields['DebtRecoveryType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the RecoveryAmount property.
     *
     * @return Currency RecoveryAmount.
     */
    public function getRecoveryAmount()
    {
        return $this->_fields['RecoveryAmount']['FieldValue'];
    }

    /**
     * Check to see if RecoveryAmount is set.
     *
     * @return true if RecoveryAmount is set.
     */
    public function isSetRecoveryAmount()
    {
        return !is_null($this->_fields['RecoveryAmount']['FieldValue']);
    }

    /**
     * Set the value of RecoveryAmount, return this.
     *
     * @param recoveryAmount
     *             The new value to set.
     *
     * @return MWSFinancesService_Model_DebtRecoveryEvent|This
     */
    public function withRecoveryAmount($value)
    {
        $this->setRecoveryAmount($value);
        return $this;
    }

    /**
     * Set the value of the RecoveryAmount property.
     *
     * @param MWSFinancesService_Model_Currency recoveryAmount
     * @return MWSFinancesService_Model_DebtRecoveryEvent|this
     */
    public function setRecoveryAmount($value)
    {
        $this->_fields['RecoveryAmount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the OverPaymentCredit property.
     *
     * @return Currency OverPaymentCredit.
     */
    public function getOverPaymentCredit()
    {
        return $this->_fields['OverPaymentCredit']['FieldValue'];
    }

    /**
     * Check to see if OverPaymentCredit is set.
     *
     * @return true if OverPaymentCredit is set.
     */
    public function isSetOverPaymentCredit()
    {
        return !is_null($this->_fields['OverPaymentCredit']['FieldValue']);
    }

    /**
     * Set the value of OverPaymentCredit, return this.
     *
     * @param overPaymentCredit
     *             The new value to set.
     *
     * @return MWSFinancesService_Model_DebtRecoveryEvent|This
     */
    public function withOverPaymentCredit($value)
    {
        $this->setOverPaymentCredit($value);
        return $this;
    }

    /**
     * Set the value of the OverPaymentCredit property.
     *
     * @param MWSFinancesService_Model_Currency overPaymentCredit
     * @return MWSFinancesService_Model_DebtRecoveryEvent|this
     */
    public function setOverPaymentCredit($value)
    {
        $this->_fields['OverPaymentCredit']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the DebtRecoveryItemList property.
     *
     * @return List<DebtRecoveryItem> DebtRecoveryItemList.
     */
    public function getDebtRecoveryItemList()
    {
        if ($this->_fields['DebtRecoveryItemList']['FieldValue'] == null) {
            $this->_fields['DebtRecoveryItemList']['FieldValue'] = array();
        }
        return $this->_fields['DebtRecoveryItemList']['FieldValue'];
    }

    /**
     * Set the value of the DebtRecoveryItemList property.
     *
     * @param array debtRecoveryItemList
     * @return MWSFinancesService_Model_DebtRecoveryEvent|this
     */
    public function setDebtRecoveryItemList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['DebtRecoveryItemList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear DebtRecoveryItemList.
     */
    public function unsetDebtRecoveryItemList()
    {
        $this->_fields['DebtRecoveryItemList']['FieldValue'] = array();
    }

    /**
     * Check to see if DebtRecoveryItemList is set.
     *
     * @return true if DebtRecoveryItemList is set.
     */
    public function isSetDebtRecoveryItemList()
    {
        return !empty($this->_fields['DebtRecoveryItemList']['FieldValue']);
    }

    /**
     * Add values for DebtRecoveryItemList, return this.
     *
     * @return MWSFinancesService_Model_DebtRecoveryEvent|This
     */
    public function withDebtRecoveryItemList()
    {
        foreach (func_get_args() as $DebtRecoveryItemList) {
            $this->_fields['DebtRecoveryItemList']['FieldValue'][] = $DebtRecoveryItemList;
        }
        return $this;
    }

    /**
     * Get the value of the ChargeInstrumentList property.
     *
     * @return List<ChargeInstrument> ChargeInstrumentList.
     */
    public function getChargeInstrumentList()
    {
        if ($this->_fields['ChargeInstrumentList']['FieldValue'] == null) {
            $this->_fields['ChargeInstrumentList']['FieldValue'] = array();
        }
        return $this->_fields['ChargeInstrumentList']['FieldValue'];
    }

    /**
     * Set the value of the ChargeInstrumentList property.
     *
     * @param array chargeInstrumentList
     * @return MWSFinancesService_Model_DebtRecoveryEvent|this
     */
    public function setChargeInstrumentList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['ChargeInstrumentList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear ChargeInstrumentList.
     */
    public function unsetChargeInstrumentList()
    {
        $this->_fields['ChargeInstrumentList']['FieldValue'] = array();
    }

    /**
     * Check to see if ChargeInstrumentList is set.
     *
     * @return true if ChargeInstrumentList is set.
     */
    public function isSetChargeInstrumentList()
    {
        return !empty($this->_fields['ChargeInstrumentList']['FieldValue']);
    }

    /**
     * Add values for ChargeInstrumentList, return this.
     *
     * @return MWSFinancesService_Model_DebtRecoveryEvent|This
     */
    public function withChargeInstrumentList()
    {
        foreach (func_get_args() as $ChargeInstrumentList) {
            $this->_fields['ChargeInstrumentList']['FieldValue'][] = $ChargeInstrumentList;
        }
        return $this;
    }

}
