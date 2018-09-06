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
 * MWSFinancesService_Model_ListFinancialEventsByNextTokenResponse
 *
 * Properties:
 * <ul>
 *
 * <li>ListFinancialEventsByNextTokenResult: MWSFinancesService_Model_ListFinancialEventsByNextTokenResult</li>
 * <li>ResponseMetadata: MWSFinancesService_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: MWSFinancesService_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 * @property array _fields
 */
class MWSFinancesService_Model_ListFinancialEventsByNextTokenResponse extends MWSFinancesService_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'ListFinancialEventsByNextTokenResult' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_ListFinancialEventsByNextTokenResult'),
            'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_ResponseMetadata'),
            'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Construct MWSFinancesService_Model_ListFinancialEventsByNextTokenResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return MWSFinancesService_Model_ListFinancialEventsByNextTokenResponse
     * @throws Exception
     * @throws Exception
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListFinancialEventsByNextTokenResponse']");
        if ($response->length == 1) {
            return new MWSFinancesService_Model_ListFinancialEventsByNextTokenResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct MWSFinancesService_Model_ListFinancialEventsByNextTokenResponse from provided XML. 
                                  Make sure that ListFinancialEventsByNextTokenResponse is a root element");
        }
    }

    /**
     * Get the value of the ListFinancialEventsByNextTokenResult property.
     *
     * @return ListFinancialEventsByNextTokenResult ListFinancialEventsByNextTokenResult.
     */
    public function getListFinancialEventsByNextTokenResult()
    {
        return $this->_fields['ListFinancialEventsByNextTokenResult']['FieldValue'];
    }

    /**
     * Check to see if ListFinancialEventsByNextTokenResult is set.
     *
     * @return true if ListFinancialEventsByNextTokenResult is set.
     */
    public function isSetListFinancialEventsByNextTokenResult()
    {
        return !is_null($this->_fields['ListFinancialEventsByNextTokenResult']['FieldValue']);
    }

    /**
     * Set the value of ListFinancialEventsByNextTokenResult, return this.
     *
     * @param listFinancialEventsByNextTokenResult
     *             The new value to set.
     *
     * @return MWSFinancesService_Model_ListFinancialEventsByNextTokenResponse|This
     */
    public function withListFinancialEventsByNextTokenResult($value)
    {
        $this->setListFinancialEventsByNextTokenResult($value);
        return $this;
    }

    /**
     * Set the value of the ListFinancialEventsByNextTokenResult property.
     *
     * @param MWSFinancesService_Model_ListFinancialEventsByNextTokenResult listFinancialEventsByNextTokenResult
     * @return MWSFinancesService_Model_ListFinancialEventsByNextTokenResponse|this
     */
    public function setListFinancialEventsByNextTokenResult($value)
    {
        $this->_fields['ListFinancialEventsByNextTokenResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the ResponseMetadata property.
     *
     * @return ResponseMetadata ResponseMetadata.
     */
    public function getResponseMetadata()
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Check to see if ResponseMetadata is set.
     *
     * @return true if ResponseMetadata is set.
     */
    public function isSetResponseMetadata()
    {
        return !is_null($this->_fields['ResponseMetadata']['FieldValue']);
    }

    /**
     * Set the value of ResponseMetadata, return this.
     *
     * @param responseMetadata
     *             The new value to set.
     *
     * @return MWSFinancesService_Model_ListFinancialEventsByNextTokenResponse|This
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }

    /**
     * Set the value of the ResponseMetadata property.
     *
     * @param MWSFinancesService_Model_ResponseMetadata responseMetadata
     * @return MWSFinancesService_Model_ListFinancialEventsByNextTokenResponse|this
     */
    public function setResponseMetadata($value)
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the ResponseHeaderMetadata property.
     *
     * @return ResponseHeaderMetadata ResponseHeaderMetadata.
     */
    public function getResponseHeaderMetadata()
    {
        return $this->_fields['ResponseHeaderMetadata']['FieldValue'];
    }

    /**
     * Check to see if ResponseHeaderMetadata is set.
     *
     * @return true if ResponseHeaderMetadata is set.
     */
    public function isSetResponseHeaderMetadata()
    {
        return !is_null($this->_fields['ResponseHeaderMetadata']['FieldValue']);
    }

    /**
     * Set the value of ResponseHeaderMetadata, return this.
     *
     * @param responseHeaderMetadata
     *             The new value to set.
     *
     * @return MWSFinancesService_Model_ListFinancialEventsByNextTokenResponse|This
     */
    public function withResponseHeaderMetadata($value)
    {
        $this->setResponseHeaderMetadata($value);
        return $this;
    }

    /**
     * Set the value of the ResponseHeaderMetadata property.
     *
     * @param MWSFinancesService_Model_ResponseHeaderMetadata responseHeaderMetadata
     * @return MWSFinancesService_Model_ListFinancialEventsByNextTokenResponse|this
     */
    public function setResponseHeaderMetadata($value)
    {
        $this->_fields['ResponseHeaderMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * XML Representation for this object
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = "";
        $xml .= "<ListFinancialEventsByNextTokenResponse xmlns=\"http://mws.amazonservices.com/Finances/2015-05-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListFinancialEventsByNextTokenResponse>";
        return $xml;
    }

}
