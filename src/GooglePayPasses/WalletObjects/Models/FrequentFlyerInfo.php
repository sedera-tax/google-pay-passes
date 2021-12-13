<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\LocalizedString;

class FrequentFlyerInfo extends Model
{
    protected $internal_gapi_mappings = [];
    public $frequentFlyerNumber;
    protected $frequentFlyerProgramNameType = LocalizedString::class;
    protected $frequentFlyerProgramNameDataType = '';
    public $kind;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $frequentFlyerProgramName;


    public function setFrequentFlyerNumber($frequentFlyerNumber)
    {
        $this->frequentFlyerNumber = $frequentFlyerNumber;
    }
    public function getFrequentFlyerNumber()
    {
        return $this->frequentFlyerNumber;
    }
    public function setFrequentFlyerProgramName(LocalizedString $frequentFlyerProgramName)
    {
        $this->frequentFlyerProgramName = $frequentFlyerProgramName;
    }
    public function getFrequentFlyerProgramName()
    {
        return $this->frequentFlyerProgramName;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
}