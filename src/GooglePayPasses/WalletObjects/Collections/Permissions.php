<?php


namespace GooglePayPasses\WalletObjects\Collections;


use Google\Collection;
use GooglePayPasses\WalletObjects\Models\Permission;

class Permissions extends Collection
{
    protected $collection_key = 'permissions';
    protected $internal_gapi_mappings = [];
    public $issuerId;
    protected $permissionsType = Permission::class;
    protected $permissionsDataType = 'array';
    /**
     * @var array|Permission|mixed|null
     */
    private $permissions;


    public function setIssuerId($issuerId)
    {
        $this->issuerId = $issuerId;
    }
    public function getIssuerId()
    {
        return $this->issuerId;
    }
    public function setPermissions(Permission $permissions)
    {
        $this->permissions = $permissions;
    }
    public function getPermissions()
    {
        return $this->permissions;
    }
}