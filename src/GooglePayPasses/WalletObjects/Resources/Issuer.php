<?php


namespace GooglePayPasses\WalletObjects\Resources;


use Google\Exception;
use Google\Service\Resource;
use GooglePayPasses\WalletObjects\Collections\IssuerListResponse;
use GooglePayPasses\WalletObjects\Models\Issuer as IssuerModel;

class Issuer extends Resource
{
    /**
     * Returns the issuer with the given issuer ID. (issuer.get)
     *
     * @param string $resourceId The unique identifier for an issuer. This ID must
     * be unique across all issuers.
     * @param array $optParams Optional parameters.
     * @return IssuerModel
     * @throws Exception
     */
    public function get(string $resourceId, $optParams = array())
    {
        $params = array('resourceId' => $resourceId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), IssuerModel::class);
    }

    /**
     * Inserts an issuer with the given ID and properties. (issuer.insert)
     *
     * @param IssuerModel $postBody
     * @param array $optParams Optional parameters.
     * @return IssuerModel
     * @throws Exception
     */
    public function insert(IssuerModel $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), IssuerModel::class);
    }

    /**
     * Returns a list of all issuers shared to the caller. (issuer.listIssuer)
     *
     * @param array $optParams Optional parameters.
     * @return IssuerListResponse
     * @throws Exception
     */
    public function listIssuer($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), IssuerListResponse::class);
    }

    /**
     * Updates the issuer referenced by the given issuer ID. This method supports
     * patch semantics. (issuer.patch)
     *
     * @param string $resourceId The unique identifier for an issuer. This ID must
     * be unique across all issuers.
     * @param IssuerModel $postBody
     * @param array $optParams Optional parameters.
     * @return IssuerModel
     * @throws Exception
     */
    public function patch(string $resourceId, IssuerModel $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), IssuerModel::class);
    }

    /**
     * Updates the issuer referenced by the given issuer ID. (issuer.update)
     *
     * @param string $resourceId The unique identifier for an issuer. This ID must
     * be unique across all issuers.
     * @param IssuerModel $postBody
     * @param array $optParams Optional parameters.
     * @return IssuerModel
     * @throws Exception
     */
    public function update(string $resourceId, IssuerModel $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), IssuerModel::class);
    }
}