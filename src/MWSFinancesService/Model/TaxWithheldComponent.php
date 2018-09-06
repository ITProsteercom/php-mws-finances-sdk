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
 * MWSFinancesService_Model_TaxWithheldComponent
 *
 * Properties:
 * <ul>
 *
 * <li>TaxCollectionModel: string</li>
 * <li>TaxesWithheld: array</li>
 *
 * </ul>
 * @property array _fields
 */
class MWSFinancesService_Model_TaxWithheldComponent extends MWSFinancesService_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'TaxCollectionModel' => array('FieldValue' => null, 'FieldType' => 'string'),
            'TaxesWithheld' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_ChargeComponent'), 'ListMemberName' => 'ChargeComponent'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the TaxCollectionModel property.
     *
     * @return String TaxCollectionModel.
     */
    public function getTaxCollectionModel()
    {
        return $this->_fields['TaxCollectionModel']['FieldValue'];
    }

    /**
     * Check to see if TaxCollectionModel is set.
     *
     * @return true if TaxCollectionModel is set.
     */
    public function isSetTaxCollectionModel()
    {
        return !is_null($this->_fields['TaxCollectionModel']['FieldValue']);
    }

    /**
     * Set the value of TaxCollectionModel, return this.
     *
     * @param taxCollectionModel
     *             The new value to set.
     *
     * @return MWSFinancesService_Model_TaxWithheldComponent|This
     */
    public function withTaxCollectionModel($value)
    {
        $this->setTaxCollectionModel($value);
        return $this;
    }

    /**
     * Set the value of the TaxCollectionModel property.
     *
     * @param string taxCollectionModel
     * @return MWSFinancesService_Model_TaxWithheldComponent|this
     */
    public function setTaxCollectionModel($value)
    {
        $this->_fields['TaxCollectionModel']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the TaxesWithheld property.
     *
     * @return List<ChargeComponent> TaxesWithheld.
     */
    public function getTaxesWithheld()
    {
        if ($this->_fields['TaxesWithheld']['FieldValue'] == null) {
            $this->_fields['TaxesWithheld']['FieldValue'] = array();
        }
        return $this->_fields['TaxesWithheld']['FieldValue'];
    }

    /**
     * Set the value of the TaxesWithheld property.
     *
     * @param array taxesWithheld
     * @return MWSFinancesService_Model_TaxWithheldComponent|this
     */
    public function setTaxesWithheld($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['TaxesWithheld']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear TaxesWithheld.
     */
    public function unsetTaxesWithheld()
    {
        $this->_fields['TaxesWithheld']['FieldValue'] = array();
    }

    /**
     * Check to see if TaxesWithheld is set.
     *
     * @return true if TaxesWithheld is set.
     */
    public function isSetTaxesWithheld()
    {
        return !empty($this->_fields['TaxesWithheld']['FieldValue']);
    }

    /**
     * Add values for TaxesWithheld, return this.
     *
     * @return MWSFinancesService_Model_TaxWithheldComponent|This
     */
    public function withTaxesWithheld()
    {
        foreach (func_get_args() as $TaxesWithheld) {
            $this->_fields['TaxesWithheld']['FieldValue'][] = $TaxesWithheld;
        }
        return $this;
    }

}
