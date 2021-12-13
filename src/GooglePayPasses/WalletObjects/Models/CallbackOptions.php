<?php

namespace GooglePayPasses\WalletObjects\Models;

use Google\Model;

class CallbackOptions extends Model
{
    protected $internal_gapi_mappings = [];
    public $updateRequestUrl;
    public $url;

    public function setUpdateRequestUrl($updateRequestUrl)
    {
        $this->updateRequestUrl = $updateRequestUrl;
    }

    public function getUpdateRequestUrl()
    {
        return $this->updateRequestUrl;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }
}