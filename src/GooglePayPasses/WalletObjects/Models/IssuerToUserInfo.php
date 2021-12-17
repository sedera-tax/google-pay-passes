<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;

class IssuerToUserInfo extends Model
{
    protected $internal_gapi_mappings = [];
    public $action;
    protected $signUpInfoType = SignUpInfo::class;
    protected $signUpInfoDataType = '';
    public $url;
    public $value;
    /**
     * @var array|SignUpInfo|mixed|null
     */
    private $signUpInfo;


    public function setAction($action)
    {
        $this->action = $action;
    }
    public function getAction()
    {
        return $this->action;
    }
    public function setSignUpInfo(SignUpInfo $signUpInfo)
    {
        $this->signUpInfo = $signUpInfo;
    }
    public function getSignUpInfo()
    {
        return $this->signUpInfo;
    }
    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrl()
    {
        return $this->url;
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