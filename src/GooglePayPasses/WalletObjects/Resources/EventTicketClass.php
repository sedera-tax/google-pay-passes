<?php

namespace GooglePayPasses\WalletObjects\Resources;

use Google\Service\Resource;
use GooglePayPasses\WalletObjects\Collections\EventTicketClassListResponse;
use GooglePayPasses\WalletObjects\Models\AddMessageRequest;
use GooglePayPasses\WalletObjects\Models\EventTicketClassAddMessageResponse;
use GooglePayPasses\WalletObjects\Collections\EventTicketClass as EventTicketClassCollection;

/**
 * The "EventTicket" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $eventticketclass = $walletobjectsService->eventticketclass;
 *  </code>
 */
class EventTicketClass extends Resource
{
    /**
     * Adds a message to the event ticket class referenced by the given class ID.
     * (EventTicketClass.addmessage)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param AddMessageRequest $postBody
     * @param array $optParams Optional parameters.
     * @return EventTicketClassAddMessageResponse
     */
    public function addmessage(string $resourceId, AddMessageRequest $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('addmessage', array($params), EventTicketClassAddMessageResponse::class);
    }

    /**
     * Returns the event ticket class with the given class ID.
     * (eventticketclass.get)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param array $optParams Optional parameters.
     * @return EventTicketClassCollection
     */
    public function get(string $resourceId, $optParams = array())
    {
        $params = array('resourceId' => $resourceId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), EventTicketClassCollection::class);
    }

    /**
     * Inserts an event ticket class with the given ID and properties.
     * (eventticketclass.insert)
     *
     * @param EventTicketClassCollection $postBody
     * @param array $optParams Optional parameters.
     * @return EventTicketClassCollection
     */
    public function insert(EventTicketClassCollection $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), EventTicketClassCollection::class);
    }

    /**
     * Returns a list of all event ticket classes for a given issuer ID.
     * (eventticketclass.listEventticketclass)
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
     * @return EventTicketClassListResponse
     */
    public function listEventticketclass($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), EventTicketClassListResponse::class);
    }

    /**
     * Updates the event ticket class referenced by the given class ID. This method
     * supports patch semantics. (eventticketclass.patch)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param EventTicketClassCollection $postBody
     * @param array $optParams Optional parameters.
     * @return EventTicketClassCollection
     */
    public function patch(string $resourceId, EventTicketClassCollection $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), EventTicketClassCollection::class);
    }

    /**
     * Updates the event ticket class referenced by the given class ID.
     * (eventticketclass.update)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param EventTicketClassCollection $postBody
     * @param array $optParams Optional parameters.
     * @return EventTicketClassCollection
     */
    public function update(string $resourceId, EventTicketClassCollection $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), EventTicketClassCollection::class);
    }
}