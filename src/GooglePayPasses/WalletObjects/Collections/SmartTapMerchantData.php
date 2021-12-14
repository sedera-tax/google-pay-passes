<?php


namespace GooglePayPasses\WalletObjects\Collections;


use Google\Collection;
use GooglePayPasses\WalletObjects\Models\AuthenticationKey;

class SmartTapMerchantData extends Collection
{
    protected $collection_key = 'authenticationKeys';
    protected $internal_gapi_mappings = [];
    protected $authenticationKeysType = AuthenticationKey::class;
    protected $authenticationKeysDataType = 'array';
    public $smartTapMerchantId;
    /**
     * @var array|AuthenticationKey|mixed|null
     */
    private $authenticationKeys;


    public function setAuthenticationKeys(AuthenticationKey $authenticationKeys)
    {
        $this->authenticationKeys = $authenticationKeys;
    }
    public function getAuthenticationKeys()
    {
        return $this->authenticationKeys;
    }
    public function setSmartTapMerchantId($smartTapMerchantId)
    {
        $this->smartTapMerchantId = $smartTapMerchantId;
    }
    public function getSmartTapMerchantId()
    {
        return $this->smartTapMerchantId;
    }
}