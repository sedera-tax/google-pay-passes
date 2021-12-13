<?php


namespace GooglePayPasses\WalletObjects\Resources;


use Google\Exception;
use Google\Service\Resource;
use GooglePayPasses\WalletObjects\Collections\FlightObjectListResponse;
use GooglePayPasses\WalletObjects\Models\AddMessageRequest;
use GooglePayPasses\WalletObjects\Models\FlightObjectAddMessageResponse;
use GooglePayPasses\WalletObjects\Collections\FlightObject as FlightObjectCollection;

class FlightObject extends Resource
{
    /**
     * Adds a message to the flight object referenced by the given object ID.
     * (flightobject.addmessage)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param AddMessageRequest $postBody
     * @param array $optParams Optional parameters.
     * @return FlightObjectAddMessageResponse
     * @throws Exception
     */
    public function addmessage(string $resourceId, AddMessageRequest $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('addmessage', array($params), FlightObjectAddMessageResponse::class);
    }

    /**
     * Returns the flight object with the given object ID. (flightobject.get)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param array $optParams Optional parameters.
     * @return FlightObjectCollection
     * @throws Exception
     */
    public function get(string $resourceId, $optParams = array())
    {
        $params = array('resourceId' => $resourceId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), FlightObjectCollection::class);
    }

    /**
     * Inserts an flight object with the given ID and properties.
     * (flightobject.insert)
     *
     * @param FlightObjectCollection $postBody
     * @param array $optParams Optional parameters.
     * @return FlightObjectCollection
     * @throws Exception
     */
    public function insert(FlightObjectCollection $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), FlightObjectCollection::class);
    }

    /**
     * Returns a list of all flight objects for a given issuer ID.
     * (flightobject.listFlightobject)
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
     * @return FlightObjectListResponse
     * @throws Exception
     */
    public function listFlightobject($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), FlightObjectListResponse::class);
    }

    /**
     * Updates the flight object referenced by the given object ID. This method
     * supports patch semantics. (flightobject.patch)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param FlightObjectCollection $postBody
     * @param array $optParams Optional parameters.
     * @return FlightObjectCollection
     * @throws Exception
     */
    public function patch(string $resourceId, FlightObjectCollection $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), FlightObjectCollection::class);
    }

    /**
     * Updates the flight object referenced by the given object ID.
     * (flightobject.update)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param FlightObjectCollection $postBody
     * @param array $optParams Optional parameters.
     * @return FlightObjectCollection
     * @throws Exception
     */
    public function update(string $resourceId, FlightObjectCollection $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), FlightObjectCollection::class);
    }
}