<?php

namespace Api\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for fareItinerary StructType
 * @package Api
 * @subpackage Structs
 * @release 1.1.0
 */
class ApiFareItinerary extends AbstractStructBase
{
    /**
     * The price
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Api\StructType\ApiFareItineraryPrice
     */
    public $price;
    /**
     * The key
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $key;
    /**
     * The firstSegmentsIds
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int[]
     */
    public $firstSegmentsIds;
    /**
     * The clickoutURLParams
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $clickoutURLParams;
    /**
     * The resident
     * @var bool
     */
    public $resident;
    /**
     * The secondSegmentsIds
     * @var int[]
     */
    public $secondSegmentsIds;
    /**
     * The thirdSegmentsIds
     * @var int[]
     */
    public $thirdSegmentsIds;
    /**
     * Constructor method for fareItinerary
     * @uses ApiFareItinerary::setPrice()
     * @uses ApiFareItinerary::setKey()
     * @uses ApiFareItinerary::setFirstSegmentsIds()
     * @uses ApiFareItinerary::setClickoutURLParams()
     * @uses ApiFareItinerary::setResident()
     * @uses ApiFareItinerary::setSecondSegmentsIds()
     * @uses ApiFareItinerary::setThirdSegmentsIds()
     * @param \Api\StructType\ApiFareItineraryPrice $price
     * @param string $key
     * @param int[] $firstSegmentsIds
     * @param string $clickoutURLParams
     * @param bool $resident
     * @param int[] $secondSegmentsIds
     * @param int[] $thirdSegmentsIds
     */
    public function __construct(\Api\StructType\ApiFareItineraryPrice $price = null, $key = null, array $firstSegmentsIds = array(), $clickoutURLParams = null, $resident = null, array $secondSegmentsIds = array(), array $thirdSegmentsIds = array())
    {
        $this
            ->setPrice($price)
            ->setKey($key)
            ->setFirstSegmentsIds($firstSegmentsIds)
            ->setClickoutURLParams($clickoutURLParams)
            ->setResident($resident)
            ->setSecondSegmentsIds($secondSegmentsIds)
            ->setThirdSegmentsIds($thirdSegmentsIds);
    }
    /**
     * Get price value
     * @return \Api\StructType\ApiFareItineraryPrice
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param \Api\StructType\ApiFareItineraryPrice $price
     * @return \Api\StructType\ApiFareItinerary
     */
    public function setPrice(\Api\StructType\ApiFareItineraryPrice $price = null)
    {
        $this->price = $price;
        return $this;
    }
    /**
     * Get key value
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }
    /**
     * Set key value
     * @param string $key
     * @return \Api\StructType\ApiFareItinerary
     */
    public function setKey($key = null)
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->key = $key;
        return $this;
    }
    /**
     * Get firstSegmentsIds value
     * @return int[]
     */
    public function getFirstSegmentsIds()
    {
        return $this->firstSegmentsIds;
    }
    /**
     * This method is responsible for validating the values passed to the setFirstSegmentsIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFirstSegmentsIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFirstSegmentsIdsForArrayContraintsFromSetFirstSegmentsIds(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $fareItineraryFirstSegmentsIdsItem) {
            // validation for constraint: itemType
            if (!is_numeric($fareItineraryFirstSegmentsIdsItem)) {
                $invalidValues[] = is_object($fareItineraryFirstSegmentsIdsItem) ? get_class($fareItineraryFirstSegmentsIdsItem) : var_export($fareItineraryFirstSegmentsIdsItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The firstSegmentsIds property can only contain items of int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set firstSegmentsIds value
     * @throws \InvalidArgumentException
     * @param int[] $firstSegmentsIds
     * @return \Api\StructType\ApiFareItinerary
     */
    public function setFirstSegmentsIds(array $firstSegmentsIds = array())
    {
        // validation for constraint: array
        if ('' !== ($firstSegmentsIdsArrayErrorMessage = self::validateFirstSegmentsIdsForArrayContraintsFromSetFirstSegmentsIds($firstSegmentsIds))) {
            throw new \InvalidArgumentException($firstSegmentsIdsArrayErrorMessage, __LINE__);
        }
        $this->firstSegmentsIds = $firstSegmentsIds;
        return $this;
    }
    /**
     * Add item to firstSegmentsIds value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \Api\StructType\ApiFareItinerary
     */
    public function addToFirstSegmentsIds($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The firstSegmentsIds property can only contain items of int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->firstSegmentsIds[] = $item;
        return $this;
    }
    /**
     * Get clickoutURLParams value
     * @return string|null
     */
    public function getClickoutURLParams()
    {
        return $this->clickoutURLParams;
    }
    /**
     * Set clickoutURLParams value
     * @param string $clickoutURLParams
     * @return \Api\StructType\ApiFareItinerary
     */
    public function setClickoutURLParams($clickoutURLParams = null)
    {
        // validation for constraint: string
        if (!is_null($clickoutURLParams) && !is_string($clickoutURLParams)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clickoutURLParams, true), gettype($clickoutURLParams)), __LINE__);
        }
        $this->clickoutURLParams = $clickoutURLParams;
        return $this;
    }
    /**
     * Get resident value
     * @return bool|null
     */
    public function getResident()
    {
        return $this->resident;
    }
    /**
     * Set resident value
     * @param bool $resident
     * @return \Api\StructType\ApiFareItinerary
     */
    public function setResident($resident = null)
    {
        // validation for constraint: boolean
        if (!is_null($resident) && !is_bool($resident)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($resident, true), gettype($resident)), __LINE__);
        }
        $this->resident = $resident;
        return $this;
    }
    /**
     * Get secondSegmentsIds value
     * @return int[]|null
     */
    public function getSecondSegmentsIds()
    {
        return $this->secondSegmentsIds;
    }
    /**
     * This method is responsible for validating the values passed to the setSecondSegmentsIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSecondSegmentsIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSecondSegmentsIdsForArrayContraintsFromSetSecondSegmentsIds(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $fareItinerarySecondSegmentsIdsItem) {
            // validation for constraint: itemType
            if (!is_numeric($fareItinerarySecondSegmentsIdsItem)) {
                $invalidValues[] = is_object($fareItinerarySecondSegmentsIdsItem) ? get_class($fareItinerarySecondSegmentsIdsItem) : var_export($fareItinerarySecondSegmentsIdsItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The secondSegmentsIds property can only contain items of int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set secondSegmentsIds value
     * @throws \InvalidArgumentException
     * @param int[] $secondSegmentsIds
     * @return \Api\StructType\ApiFareItinerary
     */
    public function setSecondSegmentsIds(array $secondSegmentsIds = array())
    {
        // validation for constraint: array
        if ('' !== ($secondSegmentsIdsArrayErrorMessage = self::validateSecondSegmentsIdsForArrayContraintsFromSetSecondSegmentsIds($secondSegmentsIds))) {
            throw new \InvalidArgumentException($secondSegmentsIdsArrayErrorMessage, __LINE__);
        }
        $this->secondSegmentsIds = $secondSegmentsIds;
        return $this;
    }
    /**
     * Add item to secondSegmentsIds value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \Api\StructType\ApiFareItinerary
     */
    public function addToSecondSegmentsIds($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The secondSegmentsIds property can only contain items of int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->secondSegmentsIds[] = $item;
        return $this;
    }
    /**
     * Get thirdSegmentsIds value
     * @return int[]|null
     */
    public function getThirdSegmentsIds()
    {
        return $this->thirdSegmentsIds;
    }
    /**
     * This method is responsible for validating the values passed to the setThirdSegmentsIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setThirdSegmentsIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateThirdSegmentsIdsForArrayContraintsFromSetThirdSegmentsIds(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $fareItineraryThirdSegmentsIdsItem) {
            // validation for constraint: itemType
            if (!is_numeric($fareItineraryThirdSegmentsIdsItem)) {
                $invalidValues[] = is_object($fareItineraryThirdSegmentsIdsItem) ? get_class($fareItineraryThirdSegmentsIdsItem) : var_export($fareItineraryThirdSegmentsIdsItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The thirdSegmentsIds property can only contain items of int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set thirdSegmentsIds value
     * @throws \InvalidArgumentException
     * @param int[] $thirdSegmentsIds
     * @return \Api\StructType\ApiFareItinerary
     */
    public function setThirdSegmentsIds(array $thirdSegmentsIds = array())
    {
        // validation for constraint: array
        if ('' !== ($thirdSegmentsIdsArrayErrorMessage = self::validateThirdSegmentsIdsForArrayContraintsFromSetThirdSegmentsIds($thirdSegmentsIds))) {
            throw new \InvalidArgumentException($thirdSegmentsIdsArrayErrorMessage, __LINE__);
        }
        $this->thirdSegmentsIds = $thirdSegmentsIds;
        return $this;
    }
    /**
     * Add item to thirdSegmentsIds value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \Api\StructType\ApiFareItinerary
     */
    public function addToThirdSegmentsIds($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The thirdSegmentsIds property can only contain items of int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->thirdSegmentsIds[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Api\StructType\ApiFareItinerary
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
