<?php


namespace GooglePayPasses\WalletObjects\Resources;


use Google\Exception;
use Google\Service\Resource;
use GooglePayPasses\WalletObjects\Collections\OfferClassListResponse;
use GooglePayPasses\WalletObjects\Models\AddMessageRequest;
use GooglePayPasses\WalletObjects\Models\OfferClassAddMessageResponse;
use GooglePayPasses\WalletObjects\Collections\OfferClass as OfferClassCollection;

class OfferClass extends Resource
{
    /**
     * Adds a message to the offer class referenced by the given class ID.
     * (offerclass.addmessage)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param AddMessageRequest $postBody
     * @param array $optParams Optional parameters.
     * @return OfferClassAddMessageResponse
     * @throws Exception
     */
    public function addmessage(string $resourceId, AddMessageRequest $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('addmessage', array($params), OfferClassAddMessageResponse::class);
    }

    /**
     * Returns the offer class with the given class ID. (offerclass.get)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param array $optParams Optional parameters.
     * @return OfferClassCollection
     * @throws Exception
     */
    public function get(string $resourceId, $optParams = array())
    {
        $params = array('resourceId' => $resourceId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), OfferClassCollection::class);
    }

    /**
     * Inserts an offer class with the given ID and properties. (offerclass.insert)
     *
     * @param OfferClassCollection $postBody
     * @param array $optParams Optional parameters.
     * @return OfferClassCollection
     * @throws Exception
     */
    public function insert(OfferClassCollection $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), OfferClassCollection::class);
    }

    /**
     * Returns a list of all offer classes for a given issuer ID.
     * (offerclass.listOfferclass)
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
     * @return OfferClassListResponse
     * @throws Exception
     */
    public function listOfferclass($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), OfferClassListResponse::class);
    }

    /**
     * Updates the offer class referenced by the given class ID. This method
     * supports patch semantics. (offerclass.patch)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param OfferClassCollection $postBody
     * @param array $optParams Optional parameters.
     * @return OfferClassCollection
     * @throws Exception
     */
    public function patch(string $resourceId, OfferClassCollection $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), OfferClassCollection::class);
    }

    /**
     * Updates the offer class referenced by the given class ID. (offerclass.update)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param OfferClassCollection $postBody
     * @param array $optParams Optional parameters.
     * @return OfferClassCollection
     * @throws Exception
     */
    public function update(string $resourceId, OfferClassCollection $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), OfferClassCollection::class);
    }
}