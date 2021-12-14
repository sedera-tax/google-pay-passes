<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;

class DiscoverableProgramMerchantSigninInfo extends Model
{
    protected $internal_gapi_mappings = [];
    protected $signinWebsiteType = Uri::class;
    protected $signinWebsiteDataType = '';


    public function setSigninWebsite(Uri $signinWebsite)
    {
        $this->signinWebsite = $signinWebsite;
    }
    public function getSigninWebsite()
    {
        return $this->signinWebsite;
    }
}