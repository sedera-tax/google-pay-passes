<?php


namespace GooglePayPasses\WalletObjects\Collections;


use Google\Collection;
use GooglePayPasses\WalletObjects\Models\IssuerToUserInfo;

class SmartTap extends Collection
{
    protected $collection_key = 'infos';
    protected $internal_gapi_mappings = array(
    );
    public $id;
    protected $infosType = IssuerToUserInfo::class;
    protected $infosDataType = 'array';
    public $kind;
    public $merchantId;
    /**
     * @var array|IssuerToUserInfo|mixed|null
     */
    private $infos;


    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setInfos(IssuerToUserInfo $infos)
    {
        $this->infos = $infos;
    }
    public function getInfos()
    {
        return $this->infos;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setMerchantId($merchantId)
    {
        $this->merchantId = $merchantId;
    }
    public function getMerchantId()
    {
        return $this->merchantId;
    }
}