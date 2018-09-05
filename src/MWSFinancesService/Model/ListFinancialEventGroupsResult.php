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
 * MWSFinancesService_Model_ListFinancialEventGroupsResult
 *
 * Properties:
 * <ul>
 *
 * <li>NextToken: string</li>
 * <li>FinancialEventGroupList: array</li>
 *
 * </ul>
 * @property array _fields
 */
class MWSFinancesService_Model_ListFinancialEventGroupsResult extends MWSFinancesService_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'NextToken' => array('FieldValue' => null, 'FieldType' => 'string'),
            'FinancialEventGroupList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_FinancialEventGroup'), 'ListMemberName' => 'FinancialEventGroup'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the NextToken property.
     *
     * @return String NextToken.
     */
    public function getNextToken()
    {
        return $this->_fields['NextToken']['FieldValue'];
    }

    /**
     * Check to see if NextToken is set.
     *
     * @return true if NextToken is set.
     */
    public function isSetNextToken()
    {
        return !is_null($this->_fields['NextToken']['FieldValue']);
    }

    /**
     * Set the value of NextToken, return this.
     *
     * @param nextToken
     *             The new value to set.
     *
     * @return MWSFinancesService_Model_ListFinancialEventGroupsResult|This
     */
    public function withNextToken($value)
    {
        $this->setNextToken($value);
        return $this;
    }

    /**
     * Set the value of the NextToken property.
     *
     * @param string nextToken
     * @return MWSFinancesService_Model_ListFinancialEventGroupsResult|this
     */
    public function setNextToken($value)
    {
        $this->_fields['NextToken']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the FinancialEventGroupList property.
     *
     * @return List<FinancialEventGroup> FinancialEventGroupList.
     */
    public function getFinancialEventGroupList()
    {
        if ($this->_fields['FinancialEventGroupList']['FieldValue'] == null) {
            $this->_fields['FinancialEventGroupList']['FieldValue'] = array();
        }
        return $this->_fields['FinancialEventGroupList']['FieldValue'];
    }

    /**
     * Set the value of the FinancialEventGroupList property.
     *
     * @param array financialEventGroupList
     * @return MWSFinancesService_Model_ListFinancialEventGroupsResult|this
     */
    public function setFinancialEventGroupList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['FinancialEventGroupList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear FinancialEventGroupList.
     */
    public function unsetFinancialEventGroupList()
    {
        $this->_fields['FinancialEventGroupList']['FieldValue'] = array();
    }

    /**
     * Check to see if FinancialEventGroupList is set.
     *
     * @return true if FinancialEventGroupList is set.
     */
    public function isSetFinancialEventGroupList()
    {
        return !empty($this->_fields['FinancialEventGroupList']['FieldValue']);
    }

    /**
     * Add values for FinancialEventGroupList, return this.
     *
     * @return MWSFinancesService_Model_ListFinancialEventGroupsResult|This
     */
    public function withFinancialEventGroupList()
    {
        foreach (func_get_args() as $FinancialEventGroupList) {
            $this->_fields['FinancialEventGroupList']['FieldValue'][] = $FinancialEventGroupList;
        }
        return $this;
    }

}
