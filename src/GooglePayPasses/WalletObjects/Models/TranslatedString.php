<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;

class TranslatedString extends Model
{
    protected $internal_gapi_mappings = [];
    public $kind;
    public $language;
    public $value;

    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setLanguage($language)
    {
        $this->language = $language;
    }
    public function getLanguage()
    {
        return $this->language;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}