<?php


namespace GooglePayPasses\WalletObjects\Resources;


use Google\Exception;
use Google\Service\Resource;
use GooglePayPasses\WalletObjects\Collections\EventTicketObjectListResponse;
use GooglePayPasses\WalletObjects\Models\AddMessageRequest;
use GooglePayPasses\WalletObjects\Models\EventTicketObjectAddMessageResponse;
use GooglePayPasses\WalletObjects\Collections\EventTicketObject as EventTicketObjectCollection;
use GooglePayPasses\WalletObjects\Models\ModifyLinkedOfferObjectsRequest;

class EventTicketObject extends Resource
{
    /**
     * Adds a message to the event ticket object referenced by the given object ID.
     * (eventticketobject.addmessage)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param AddMessageRequest $postBody
     * @param array $optParams Optional parameters.
     * @return EventTicketObjectAddMessageResponse
     * @throws Exception
     */
    public function addmessage(string $resourceId, AddMessageRequest $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('addmessage', array($params), EventTicketObjectAddMessageResponse::class);
    }

    /**
     * Returns the event ticket object with the given object ID.
     * (eventticketobject.get)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param array $optParams Optional parameters.
     * @return EventTicketObjectCollection
     * @throws Exception
     */
    public function get(string $resourceId, $optParams = array())
    {
        $params = array('resourceId' => $resourceId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), EventTicketObjectCollection::class);
    }

    /**
     * Inserts an event ticket object with the given ID and properties.
     * (eventticketobject.insert)
     *
     * @param EventTicketObjectCollection $postBody
     * @param array $optParams Optional parameters.
     * @return EventTicketObjectCollection
     * @throws Exception
     */
    public function insert(EventTicketObjectCollection $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), EventTicketObjectCollection::class);
    }

    /**
     * Returns a list of all event ticket objects for a given issuer ID.
     * (eventticketobject.listEventticketobject)
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
     * @return EventTicketObjectListResponse
     * @throws Exception
     */
    public function listEventticketobject($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), EventTicketObjectListResponse::class);
    }

    /**
     * Modifies linked offer objects for the event ticket object with the given ID.
     * (eventticketobject.modifylinkedofferobjects)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param ModifyLinkedOfferObjectsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return EventTicketObjectCollection
     * @throws Exception
     */
    public function modifylinkedofferobjects(string $resourceId, ModifyLinkedOfferObjectsRequest $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('modifylinkedofferobjects', array($params), EventTicketObjectCollection::class);
    }

    /**
     * Updates the event ticket object referenced by the given object ID. This
     * method supports patch semantics. (eventticketobject.patch)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param EventTicketObjectCollection $postBody
     * @param array $optParams Optional parameters.
     * @return EventTicketObjectCollection
     * @throws Exception
     */
    public function patch(string $resourceId, EventTicketObjectCollection $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), EventTicketObjectCollection::class);
    }

    /**
     * Updates the event ticket object referenced by the given object ID.
     * (eventticketobject.update)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param EventTicketObjectCollection $postBody
     * @param array $optParams Optional parameters.
     * @return EventTicketObjectCollection
     * @throws Exception
     */
    public function update(string $resourceId, EventTicketObjectCollection $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), EventTicketObjectCollection::class);
    }
}