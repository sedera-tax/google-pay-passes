<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\LocalizedString;

class Uri extends Model
{
    protected $internal_gapi_mappings = [];
    public $description;
    public $id;
    public $kind;
    protected $localizedDescriptionType = LocalizedString::class;
    protected $localizedDescriptionDataType = '';
    public $uri;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $localizedDescription;


    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setLocalizedDescription(LocalizedString $localizedDescription)
    {
        $this->localizedDescription = $localizedDescription;
    }
    public function getLocalizedDescription()
    {
        return $this->localizedDescription;
    }
    public function setUri($uri)
    {
        $this->uri = $uri;
    }
    public function getUri()
    {
        return $this->uri;
    }
}