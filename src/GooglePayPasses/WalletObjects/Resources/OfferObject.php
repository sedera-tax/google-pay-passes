<?php


namespace GooglePayPasses\WalletObjects\Resources;


use Google\Exception;
use Google\Service\Resource;
use GooglePayPasses\WalletObjects\Collections\OfferObjectListResponse;
use GooglePayPasses\WalletObjects\Models\AddMessageRequest;
use GooglePayPasses\WalletObjects\Models\OfferObjectAddMessageResponse;
use GooglePayPasses\WalletObjects\Collections\OfferObject as OfferObjectCollection;

class OfferObject extends Resource
{
    /**
     * Adds a message to the offer object referenced by the given object ID.
     * (offerobject.addmessage)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param AddMessageRequest $postBody
     * @param array $optParams Optional parameters.
     * @return OfferObjectAddMessageResponse
     * @throws Exception
     */
    public function addmessage(string $resourceId, AddMessageRequest $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('addmessage', array($params), OfferObjectAddMessageResponse::class);
    }

    /**
     * Returns the offer object with the given object ID. (offerobject.get)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param array $optParams Optional parameters.
     * @return OfferObjectCollection
     * @throws Exception
     */
    public function get(string $resourceId, $optParams = array())
    {
        $params = array('resourceId' => $resourceId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), OfferObjectCollection::class);
    }

    /**
     * Inserts an offer object with the given ID and properties.
     * (offerobject.insert)
     *
     * @param OfferObjectCollection $postBody
     * @param array $optParams Optional parameters.
     * @return OfferObjectCollection
     * @throws Exception
     */
    public function insert(OfferObjectCollection $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), OfferObjectCollection::class);
    }

    /**
     * Returns a list of all offer objects for a given issuer ID.
     * (offerobject.listOfferobject)
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
     * @return OfferObjectListResponse
     * @throws Exception
     */
    public function listOfferobject($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), OfferObjectListResponse::class);
    }

    /**
     * Updates the offer object referenced by the given object ID. This method
     * supports patch semantics. (offerobject.patch)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param OfferObjectCollection $postBody
     * @param array $optParams Optional parameters.
     * @return OfferObjectCollection
     * @throws Exception
     */
    public function patch(string $resourceId, OfferObjectCollection $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), OfferObjectCollection::class);
    }

    /**
     * Updates the offer object referenced by the given object ID.
     * (offerobject.update)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param OfferObjectCollection $postBody
     * @param array $optParams Optional parameters.
     * @return OfferObjectCollection
     * @throws Exception
     */
    public function update(string $resourceId, OfferObjectCollection $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), OfferObjectCollection::class);
    }
}