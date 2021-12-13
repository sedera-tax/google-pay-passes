<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;

class Image extends Model
{
    protected $internal_gapi_mappings = [];
    public $kind;
    protected $sourceUriType = ImageUri::class;
    protected $sourceUriDataType = '';
    /**
     * @var array|ImageUri|mixed|null
     */
    private $sourceUri;


    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setSourceUri(ImageUri $sourceUri)
    {
        $this->sourceUri = $sourceUri;
    }
    public function getSourceUri()
    {
        return $this->sourceUri;
    }
}