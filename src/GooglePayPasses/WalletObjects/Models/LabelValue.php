<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\LocalizedString;

class LabelValue extends Model
{
    protected $internal_gapi_mappings = [];
    public $label;
    protected $localizedLabelType = LocalizedString::class;
    protected $localizedLabelDataType = '';
    protected $localizedValueType = LocalizedString::class;
    protected $localizedValueDataType = '';
    public $value;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $localizedLabel;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $localizedValue;


    public function setLabel($label)
    {
        $this->label = $label;
    }
    public function getLabel()
    {
        return $this->label;
    }
    public function setLocalizedLabel(LocalizedString $localizedLabel)
    {
        $this->localizedLabel = $localizedLabel;
    }
    public function getLocalizedLabel()
    {
        return $this->localizedLabel;
    }
    public function setLocalizedValue(LocalizedString $localizedValue)
    {
        $this->localizedValue = $localizedValue;
    }
    public function getLocalizedValue()
    {
        return $this->localizedValue;
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