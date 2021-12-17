<?php


namespace GooglePayPasses\WalletObjects\Resources;


use Google\Exception;
use Google\Service\Resource;
use GooglePayPasses\WalletObjects\Collections\Permissions as PermissionsCollection;

class Permissions extends Resource
{
    /**
     * Returns the permissions for the given issuer id. (permissions.get)
     *
     * @param string $resourceId The unique identifier for an issuer. This ID must
     * be unique across all issuers.
     * @param array $optParams Optional parameters.
     * @return PermissionsCollection
     * @throws Exception
     */
    public function get(string $resourceId, $optParams = array())
    {
        $params = array('resourceId' => $resourceId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), PermissionsCollection::class);
    }

    /**
     * Updates the permissions for the given issuer. (permissions.update)
     *
     * @param string $resourceId The unique identifier for an issuer. This ID must
     * be unique across all issuers.
     * @param PermissionsCollection $postBody
     * @param array $optParams Optional parameters.
     * @return PermissionsCollection
     * @throws Exception
     */
    public function update(string $resourceId, PermissionsCollection $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), PermissionsCollection::class);
    }
}