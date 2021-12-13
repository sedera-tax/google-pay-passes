<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;

class FieldReference extends Model
{
    protected $internal_gapi_mappings = [];
    public $dateFormat;
    public $fieldPath;

    public function setDateFormat($dateFormat)
    {
        $this->dateFormat = $dateFormat;
    }
    public function getDateFormat()
    {
        return $this->dateFormat;
    }
    public function setFieldPath($fieldPath)
    {
        $this->fieldPath = $fieldPath;
    }
    public function getFieldPath()
    {
        return $this->fieldPath;
    }
}