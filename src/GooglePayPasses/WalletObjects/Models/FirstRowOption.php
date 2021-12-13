<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\FieldSelector;

class FirstRowOption extends Model
{
    protected $internal_gapi_mappings = [];
    protected $fieldOptionType = FieldSelector::class;
    protected $fieldOptionDataType = '';
    public $transitOption;
    /**
     * @var array|FieldSelector|mixed|null
     */
    private $fieldOption;


    public function setFieldOption(FieldSelector $fieldOption)
    {
        $this->fieldOption = $fieldOption;
    }
    public function getFieldOption()
    {
        return $this->fieldOption;
    }
    public function setTransitOption($transitOption)
    {
        $this->transitOption = $transitOption;
    }
    public function getTransitOption()
    {
        return $this->transitOption;
    }
}