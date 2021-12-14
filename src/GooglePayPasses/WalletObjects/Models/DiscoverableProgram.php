<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\DiscoverableProgramMerchantSignupInfo;

class DiscoverableProgram extends Model
{
    protected $internal_gapi_mappings = [];
    protected $merchantSigninInfoType = DiscoverableProgramMerchantSigninInfo::class;
    protected $merchantSigninInfoDataType = '';
    protected $merchantSignupInfoType = DiscoverableProgramMerchantSignupInfo::class;
    protected $merchantSignupInfoDataType = '';
    public $state;
    /**
     * @var array|DiscoverableProgramMerchantSigninInfo|mixed|null
     */
    private $merchantSigninInfo;
    /**
     * @var array|DiscoverableProgramMerchantSignupInfo|mixed|null
     */
    private $merchantSignupInfo;


    public function setMerchantSigninInfo(DiscoverableProgramMerchantSigninInfo $merchantSigninInfo)
    {
        $this->merchantSigninInfo = $merchantSigninInfo;
    }
    public function getMerchantSigninInfo()
    {
        return $this->merchantSigninInfo;
    }
    public function setMerchantSignupInfo(DiscoverableProgramMerchantSignupInfo $merchantSignupInfo)
    {
        $this->merchantSignupInfo = $merchantSignupInfo;
    }
    public function getMerchantSignupInfo()
    {
        return $this->merchantSignupInfo;
    }
    public function setState($state)
    {
        $this->state = $state;
    }
    public function getState()
    {
        return $this->state;
    }
}