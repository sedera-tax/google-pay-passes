<?php


namespace GooglePayPasses\WalletObjects\Collections;


use Google\Collection;

class DiscoverableProgramMerchantSignupInfo extends Collection
{
    protected $collection_key = 'signupSharedDatas';
    protected $internal_gapi_mappings = [];
    public $signupSharedDatas;
    protected $signupWebsiteType = Uri::class;
    protected $signupWebsiteDataType = '';
    /**
     * @var array|Uri|mixed|null
     */
    private $signupWebsite;


    public function setSignupSharedDatas($signupSharedDatas)
    {
        $this->signupSharedDatas = $signupSharedDatas;
    }
    public function getSignupSharedDatas()
    {
        return $this->signupSharedDatas;
    }
    public function setSignupWebsite(Uri $signupWebsite)
    {
        $this->signupWebsite = $signupWebsite;
    }
    public function getSignupWebsite()
    {
        return $this->signupWebsite;
    }
}