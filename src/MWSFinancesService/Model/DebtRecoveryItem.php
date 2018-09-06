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
 * MWSFinancesService_Model_DebtRecoveryItem
 *
 * Properties:
 * <ul>
 *
 * <li>RecoveryAmount: MWSFinancesService_Model_Currency</li>
 * <li>OriginalAmount: MWSFinancesService_Model_Currency</li>
 * <li>GroupBeginDate: string</li>
 * <li>GroupEndDate: string</li>
 *
 * </ul>
 * @property array _fields
 */
class MWSFinancesService_Model_DebtRecoveryItem extends MWSFinancesService_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'RecoveryAmount' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
            'OriginalAmount' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
            'GroupBeginDate' => array('FieldValue' => null, 'FieldType' => 'string'),
            'GroupEndDate' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
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
     * @return MWSFinancesService_Model_DebtRecoveryItem|This
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
     * @return MWSFinancesService_Model_DebtRecoveryItem|this
     */
    public function setRecoveryAmount($value)
    {
        $this->_fields['RecoveryAmount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the OriginalAmount property.
     *
     * @return Currency OriginalAmount.
     */
    public function getOriginalAmount()
    {
        return $this->_fields['OriginalAmount']['FieldValue'];
    }

    /**
     * Check to see if OriginalAmount is set.
     *
     * @return true if OriginalAmount is set.
     */
    public function isSetOriginalAmount()
    {
        return !is_null($this->_fields['OriginalAmount']['FieldValue']);
    }

    /**
     * Set the value of OriginalAmount, return this.
     *
     * @param originalAmount
     *             The new value to set.
     *
     * @return MWSFinancesService_Model_DebtRecoveryItem|This
     */
    public function withOriginalAmount($value)
    {
        $this->setOriginalAmount($value);
        return $this;
    }

    /**
     * Set the value of the OriginalAmount property.
     *
     * @param MWSFinancesService_Model_Currency originalAmount
     * @return MWSFinancesService_Model_DebtRecoveryItem|this
     */
    public function setOriginalAmount($value)
    {
        $this->_fields['OriginalAmount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the GroupBeginDate property.
     *
     * @return XMLGregorianCalendar GroupBeginDate.
     */
    public function getGroupBeginDate()
    {
        return $this->_fields['GroupBeginDate']['FieldValue'];
    }

    /**
     * Check to see if GroupBeginDate is set.
     *
     * @return true if GroupBeginDate is set.
     */
    public function isSetGroupBeginDate()
    {
        return !is_null($this->_fields['GroupBeginDate']['FieldValue']);
    }

    /**
     * Set the value of GroupBeginDate, return this.
     *
     * @param groupBeginDate
     *             The new value to set.
     *
     * @return MWSFinancesService_Model_DebtRecoveryItem|This
     */
    public function withGroupBeginDate($value)
    {
        $this->setGroupBeginDate($value);
        return $this;
    }

    /**
     * Set the value of the GroupBeginDate property.
     *
     * @param string groupBeginDate
     * @return MWSFinancesService_Model_DebtRecoveryItem|this
     */
    public function setGroupBeginDate($value)
    {
        $this->_fields['GroupBeginDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the GroupEndDate property.
     *
     * @return XMLGregorianCalendar GroupEndDate.
     */
    public function getGroupEndDate()
    {
        return $this->_fields['GroupEndDate']['FieldValue'];
    }

    /**
     * Check to see if GroupEndDate is set.
     *
     * @return true if GroupEndDate is set.
     */
    public function isSetGroupEndDate()
    {
        return !is_null($this->_fields['GroupEndDate']['FieldValue']);
    }

    /**
     * Set the value of GroupEndDate, return this.
     *
     * @param groupEndDate
     *             The new value to set.
     *
     * @return MWSFinancesService_Model_DebtRecoveryItem|This
     */
    public function withGroupEndDate($value)
    {
        $this->setGroupEndDate($value);
        return $this;
    }

    /**
     * Set the value of the GroupEndDate property.
     *
     * @param string groupEndDate
     * @return MWSFinancesService_Model_DebtRecoveryItem|this
     */
    public function setGroupEndDate($value)
    {
        $this->_fields['GroupEndDate']['FieldValue'] = $value;
        return $this;
    }

}
