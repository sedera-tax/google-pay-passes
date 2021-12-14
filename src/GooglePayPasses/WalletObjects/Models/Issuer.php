<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\IssuerContactInfo;
use GooglePayPasses\WalletObjects\Collections\SmartTapMerchantData;

class Issuer extends Model
{
    protected $internal_gapi_mappings = [];
    protected $contactInfoType = IssuerContactInfo::class;
    protected $contactInfoDataType = '';
    public $homepageUrl;
    public $issuerId;
    public $name;
    protected $smartTapMerchantDataType = SmartTapMerchantData::class;
    protected $smartTapMerchantDataDataType = '';
    /**
     * @var array|IssuerContactInfo|mixed|null
     */
    private $contactInfo;
    /**
     * @var array|SmartTapMerchantData|mixed|null
     */
    private $smartTapMerchantData;


    public function setContactInfo(IssuerContactInfo $contactInfo)
    {
        $this->contactInfo = $contactInfo;
    }
    public function getContactInfo()
    {
        return $this->contactInfo;
    }
    public function setHomepageUrl($homepageUrl)
    {
        $this->homepageUrl = $homepageUrl;
    }
    public function getHomepageUrl()
    {
        return $this->homepageUrl;
    }
    public function setIssuerId($issuerId)
    {
        $this->issuerId = $issuerId;
    }
    public function getIssuerId()
    {
        return $this->issuerId;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setSmartTapMerchantData(SmartTapMerchantData $smartTapMerchantData)
    {
        $this->smartTapMerchantData = $smartTapMerchantData;
    }
    public function getSmartTapMerchantData()
    {
        return $this->smartTapMerchantData;
    }
}