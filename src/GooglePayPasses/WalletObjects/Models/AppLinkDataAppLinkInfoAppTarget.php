<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;

class AppLinkDataAppLinkInfoAppTarget extends Model
{
    protected $internal_gapi_mappings = [];
    protected $targetUriType = Uri::class;
    protected $targetUriDataType = '';
    /**
     * @var array|Uri|mixed|null
     */
    private $targetUri;


    public function setTargetUri(Uri $targetUri)
    {
        $this->targetUri = $targetUri;
    }
    public function getTargetUri()
    {
        return $this->targetUri;
    }
}