<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;

class AppLinkData extends Model
{
    protected $internal_gapi_mappings = [];
    protected $androidAppLinkInfoType = AppLinkDataAppLinkInfo::class;
    protected $androidAppLinkInfoDataType = '';
    protected $iosAppLinkInfoType = AppLinkDataAppLinkInfo::class;
    protected $iosAppLinkInfoDataType = '';
    protected $webAppLinkInfoType = AppLinkDataAppLinkInfo::class;
    protected $webAppLinkInfoDataType = '';
    /**
     * @var array|AppLinkDataAppLinkInfo|mixed|null
     */
    private $androidAppLinkInfo;
    /**
     * @var array|AppLinkDataAppLinkInfo|mixed|null
     */
    private $iosAppLinkInfo;
    /**
     * @var array|AppLinkDataAppLinkInfo|mixed|null
     */
    private $webAppLinkInfo;


    public function setAndroidAppLinkInfo(AppLinkDataAppLinkInfo $androidAppLinkInfo)
    {
        $this->androidAppLinkInfo = $androidAppLinkInfo;
    }
    public function getAndroidAppLinkInfo()
    {
        return $this->androidAppLinkInfo;
    }
    public function setIosAppLinkInfo(AppLinkDataAppLinkInfo $iosAppLinkInfo)
    {
        $this->iosAppLinkInfo = $iosAppLinkInfo;
    }
    public function getIosAppLinkInfo()
    {
        return $this->iosAppLinkInfo;
    }
    public function setWebAppLinkInfo(AppLinkDataAppLinkInfo $webAppLinkInfo)
    {
        $this->webAppLinkInfo = $webAppLinkInfo;
    }
    public function getWebAppLinkInfo()
    {
        return $this->webAppLinkInfo;
    }
}