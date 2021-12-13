<?php


namespace GooglePayPasses\WalletObjects\Collections;


use Google\Collection;
use GooglePayPasses\WalletObjects\Models\TranslatedString;

class LocalizedString extends Collection
{
    protected $collection_key = 'translatedValues';
    protected $internal_gapi_mappings = [];
    protected $defaultValueType = TranslatedString::class;
    protected $defaultValueDataType = '';
    public $kind;
    protected $translatedValuesType = TranslatedString::class;
    protected $translatedValuesDataType = 'array';
    /**
     * @var array|TranslatedString|mixed|null
     */
    public $defaultValue;
    /**
     * @var array|mixed|null
     */
    public $translatedValues;


    public function setDefaultValue(TranslatedString $defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setTranslatedValues($translatedValues)
    {
        $this->translatedValues = $translatedValues;
    }
    public function getTranslatedValues()
    {
        return $this->translatedValues;
    }
}