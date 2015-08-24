<?php

namespace RangelReale\dataformat\mongodb;

use yii\base\InvalidConfigException;
use RangelReale\dataformat\BaseDataFormat;

/**
 * Class DataFormat
 */
class DataFormat extends BaseDataFormat
{
    /**
     * @inheritdoc
     */
    public function asDate($value, $format = null)
    {
        if ($value === null || $value == '') {
            return null;
        }
        
        return new \MongoDate($value);
    }
    
    /**
     * @inheritdoc
     */
    public function asTime($value, $format = null)
    {
        if ($value === null || $value == '') {
            return null;
        }
        
        return new \MongoDate($value);
    }    
    
    /**
     * @inheritdoc
     */
    public function asDatetime($value, $format = null)
    {
        if ($value === null || $value == '') {
            return null;
        }
        
        return new \MongoDate($value);
    }    
    
    public function asMongoid($value)
    {
        if ($value === null || $value == '') {
            return null;
        }
        
        return new \MongoId($value);
    }
    
    /**
     * @inheritdoc
     */
    public function parseDate($value, $format = null)
    {
        if ($value === null || $value == '') {
            return null;
        }
        
        if ($value instanceof \MongoDate) {
            return $value->sec;
        }
        
        throw new InvalidConfigException('Invalid MongoDB date format');        
    }    
    
    /**
     * @inheritdoc
     */
    public function parseTime($value, $format = null)
    {
        if ($value === null || $value == '') {
            return null;
        }

        if ($value instanceof \MongoDate) {
            return $value->sec;
        }
        
        throw new InvalidConfigException('Invalid MongoDB date format');        
    }    
    
    /**
     * @inheritdoc
     */
    public function parseDatetime($value, $format = null)
    {
        if ($value === null || $value == '') {
            return null;
        }

        if ($value instanceof \MongoDate) {
            return $value->sec;
        }
        
        throw new InvalidConfigException('Invalid MongoDB date format');        
    }    
    
    public function parseMongoid($value)
    {
        if ($value === null || $value == '') {
            return null;
        }

        if ($value instanceof \MongoId) {
            return (string)$value;
        }
        
        throw new InvalidConfigException('Invalid MongoDB ID format');        
    }    
}
