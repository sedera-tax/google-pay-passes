<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\FieldSelector;

class BarcodeSectionDetail extends Model
{
    protected $internal_gapi_mappings = [];
    protected $fieldSelectorType = FieldSelector::class;
    protected $fieldSelectorDataType = '';
    /**
     * @var array|FieldSelector|mixed|null
     */
    private $fieldSelector;


    public function setFieldSelector(FieldSelector $fieldSelector)
    {
        $this->fieldSelector = $fieldSelector;
    }
    public function getFieldSelector()
    {
        return $this->fieldSelector;
    }
}