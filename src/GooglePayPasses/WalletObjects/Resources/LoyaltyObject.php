<?php


namespace GooglePayPasses\WalletObjects\Resources;


use Google\Exception;
use Google\Service\Resource;
use GooglePayPasses\WalletObjects\Collections\LoyaltyObjectListResponse;
use GooglePayPasses\WalletObjects\Models\AddMessageRequest;
use GooglePayPasses\WalletObjects\Models\LoyaltyObjectAddMessageResponse;
use GooglePayPasses\WalletObjects\Collections\LoyaltyObject as LoyaltyObjectCollection;
use GooglePayPasses\WalletObjects\Models\ModifyLinkedOfferObjectsRequest;

class LoyaltyObject extends Resource
{
    /**
     * Adds a message to the loyalty object referenced by the given object ID.
     * (loyaltyobject.addmessage)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param AddMessageRequest $postBody
     * @param array $optParams Optional parameters.
     * @return LoyaltyObjectAddMessageResponse
     * @throws Exception
     */
    public function addmessage(string $resourceId, AddMessageRequest $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('addmessage', array($params), LoyaltyObjectAddMessageResponse::class);
    }

    /**
     * Returns the loyalty object with the given object ID. (loyaltyobject.get)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param array $optParams Optional parameters.
     * @return LoyaltyObjectCollection
     * @throws Exception
     */
    public function get(string $resourceId, $optParams = array())
    {
        $params = array('resourceId' => $resourceId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), LoyaltyObjectCollection::class);
    }

    /**
     * Inserts an loyalty object with the given ID and properties.
     * (loyaltyobject.insert)
     *
     * @param LoyaltyObjectCollection $postBody
     * @param array $optParams Optional parameters.
     * @return LoyaltyObjectCollection
     * @throws Exception
     */
    public function insert(LoyaltyObjectCollection $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), LoyaltyObjectCollection::class);
    }

    /**
     * Returns a list of all loyalty objects for a given issuer ID.
     * (loyaltyobject.listLoyaltyobject)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string classId The ID of the class whose objects will be listed.
     * @opt_param string token Used to get the next set of results if `maxResults`
     * is specified, but more than `maxResults` objects are available in a list. For
     * example, if you have a list of 200 objects and you call list with
     * `maxResults` set to 20, list will return the first 20 objects and a token.
     * Call list again with `maxResults` set to 20 and the token to get the next 20
     * objects.
     * @opt_param int maxResults Identifies the max number of results returned by a
     * list. All results are returned if `maxResults` isn't defined.
     * @return LoyaltyObjectListResponse
     * @throws Exception
     */
    public function listLoyaltyobject($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), LoyaltyObjectListResponse::class);
    }

    /**
     * Modifies linked offer objects for the loyalty object with the given ID.
     * (loyaltyobject.modifylinkedofferobjects)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param ModifyLinkedOfferObjectsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return LoyaltyObjectCollection
     * @throws Exception
     */
    public function modifylinkedofferobjects(string $resourceId, ModifyLinkedOfferObjectsRequest $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('modifylinkedofferobjects', array($params), LoyaltyObjectCollection::class);
    }

    /**
     * Updates the loyalty object referenced by the given object ID. This method
     * supports patch semantics. (loyaltyobject.patch)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param LoyaltyObjectCollection $postBody
     * @param array $optParams Optional parameters.
     * @return LoyaltyObjectCollection
     * @throws Exception
     */
    public function patch(string $resourceId, LoyaltyObjectCollection $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), LoyaltyObjectCollection::class);
    }

    /**
     * Updates the loyalty object referenced by the given object ID.
     * (loyaltyobject.update)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param LoyaltyObjectCollection $postBody
     * @param array $optParams Optional parameters.
     * @return LoyaltyObjectCollection
     * @throws Exception
     */
    public function update(string $resourceId, LoyaltyObjectCollection $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), LoyaltyObjectCollection::class);
    }
}