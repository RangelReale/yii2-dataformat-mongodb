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
        if ($value === null) {
            return null;
        }
        
        return new \MongoDate($value);
    }
    
    /**
     * @inheritdoc
     */
    public function asTime($value, $format = null)
    {
        if ($value === null) {
            return null;
        }
        
        return new \MongoDate($value);
    }    
    
    /**
     * @inheritdoc
     */
    public function asDatetime($value, $format = null)
    {
        if ($value === null) {
            return null;
        }
        
        return new \MongoDate($value);
    }    
    
    /**
     * @inheritdoc
     */
    public function parseDate($value, $format = null)
    {
        if ($value === null) {
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
        if ($value === null) {
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
        if ($value === null) {
            return null;
        }

        if ($value instanceof \MongoDate) {
            return $value->sec;
        }
        
        throw new InvalidConfigException('Invalid MongoDB date format');        
    }    
}
