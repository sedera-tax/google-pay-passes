<?php


namespace GooglePayPasses\WalletObjects\Resources;


use Google\Exception;
use Google\Service\Resource;
use GooglePayPasses\WalletObjects\Collections\LoyaltyClassListResponse;
use GooglePayPasses\WalletObjects\Models\AddMessageRequest;
use GooglePayPasses\WalletObjects\Models\LoyaltyClassAddMessageResponse;
use GooglePayPasses\WalletObjects\Collections\LoyaltyClass as LoyaltyClassCollection;

class LoyaltyClass extends Resource
{
    /**
     * Adds a message to the loyalty class referenced by the given class ID.
     * (loyaltyclass.addmessage)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param AddMessageRequest $postBody
     * @param array $optParams Optional parameters.
     * @return LoyaltyClassAddMessageResponse
     * @throws Exception
     */
    public function addmessage(string $resourceId, AddMessageRequest $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('addmessage', array($params), LoyaltyClassAddMessageResponse::class);
    }

    /**
     * Returns the loyalty class with the given class ID. (loyaltyclass.get)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param array $optParams Optional parameters.
     * @return LoyaltyClassCollection
     * @throws Exception
     */
    public function get(string $resourceId, $optParams = array())
    {
        $params = array('resourceId' => $resourceId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), LoyaltyClassCollection::class);
    }

    /**
     * Inserts an loyalty class with the given ID and properties.
     * (loyaltyclass.insert)
     *
     * @param LoyaltyClassCollection $postBody
     * @param array $optParams Optional parameters.
     * @return LoyaltyClassCollection
     * @throws Exception
     */
    public function insert(LoyaltyClassCollection $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), LoyaltyClassCollection::class);
    }

    /**
     * Returns a list of all loyalty classes for a given issuer ID.
     * (loyaltyclass.listLoyaltyclass)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string issuerId The ID of the issuer authorized to list classes.
     * @opt_param string token Used to get the next set of results if `maxResults`
     * is specified, but more than `maxResults` classes are available in a list. For
     * example, if you have a list of 200 classes and you call list with
     * `maxResults` set to 20, list will return the first 20 classes and a token.
     * Call list again with `maxResults` set to 20 and the token to get the next 20
     * classes.
     * @opt_param int maxResults Identifies the max number of results returned by a
     * list. All results are returned if `maxResults` isn't defined.
     * @return LoyaltyClassListResponse
     * @throws Exception
     */
    public function listLoyaltyclass($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), LoyaltyClassListResponse::class);
    }

    /**
     * Updates the loyalty class referenced by the given class ID. This method
     * supports patch semantics. (loyaltyclass.patch)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param LoyaltyClassCollection $postBody
     * @param array $optParams Optional parameters.
     * @return LoyaltyClassCollection
     * @throws Exception
     */
    public function patch(string $resourceId, LoyaltyClassCollection $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), LoyaltyClassCollection::class);
    }

    /**
     * Updates the loyalty class referenced by the given class ID.
     * (loyaltyclass.update)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param LoyaltyClassCollection $postBody
     * @param array $optParams Optional parameters.
     * @return LoyaltyClassCollection
     * @throws Exception
     */
    public function update(string $resourceId, LoyaltyClassCollection $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), LoyaltyClassCollection::class);
    }
}