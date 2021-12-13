<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\LocalizedString;

class TextModuleData extends Model
{
    protected $internal_gapi_mappings = [];
    public $body;
    public $header;
    public $id;
    protected $localizedBodyType = LocalizedString::class;
    protected $localizedBodyDataType = '';
    protected $localizedHeaderType = LocalizedString::class;
    protected $localizedHeaderDataType = '';
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $localizedBody;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $localizedHeader;


    public function setBody($body)
    {
        $this->body = $body;
    }
    public function getBody()
    {
        return $this->body;
    }
    public function setHeader($header)
    {
        $this->header = $header;
    }
    public function getHeader()
    {
        return $this->header;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setLocalizedBody(LocalizedString $localizedBody)
    {
        $this->localizedBody = $localizedBody;
    }
    public function getLocalizedBody()
    {
        return $this->localizedBody;
    }
    public function setLocalizedHeader(LocalizedString $localizedHeader)
    {
        $this->localizedHeader = $localizedHeader;
    }
    public function getLocalizedHeader()
    {
        return $this->localizedHeader;
    }
}