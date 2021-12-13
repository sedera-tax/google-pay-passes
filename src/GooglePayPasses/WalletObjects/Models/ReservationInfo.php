<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;

class ReservationInfo extends Model
{
    protected $internal_gapi_mappings = [];
    public $confirmationCode;
    public $eticketNumber;
    protected $frequentFlyerInfoType = FrequentFlyerInfo::class;
    protected $frequentFlyerInfoDataType = '';
    public $kind;
    /**
     * @var array|FrequentFlyerInfo|mixed|null
     */
    private $frequentFlyerInfo;


    public function setConfirmationCode($confirmationCode)
    {
        $this->confirmationCode = $confirmationCode;
    }
    public function getConfirmationCode()
    {
        return $this->confirmationCode;
    }
    public function setEticketNumber($eticketNumber)
    {
        $this->eticketNumber = $eticketNumber;
    }
    public function getEticketNumber()
    {
        return $this->eticketNumber;
    }
    public function setFrequentFlyerInfo(FrequentFlyerInfo $frequentFlyerInfo)
    {
        $this->frequentFlyerInfo = $frequentFlyerInfo;
    }
    public function getFrequentFlyerInfo()
    {
        return $this->frequentFlyerInfo;
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