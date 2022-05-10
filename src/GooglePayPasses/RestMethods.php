<?php
/**
 * Copyright 2019 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace GooglePayPasses;

use Google\Exception;
use Google_Client;
use Google_Service_Exception;
use GooglePayPasses\WalletObjects\Collections\EventTicketClass;
use GooglePayPasses\WalletObjects\Collections\EventTicketObject;
use GooglePayPasses\WalletObjects\Collections\FlightClass;
use GooglePayPasses\WalletObjects\Collections\FlightObject;
use GooglePayPasses\WalletObjects\Collections\GiftCardClass;
use GooglePayPasses\WalletObjects\Collections\GiftCardObject;
use GooglePayPasses\WalletObjects\Collections\LoyaltyClass;
use GooglePayPasses\WalletObjects\Collections\LoyaltyObject;
use GooglePayPasses\WalletObjects\Collections\OfferClass;
use GooglePayPasses\WalletObjects\Collections\OfferObject;
use GooglePayPasses\WalletObjects\Collections\TransitClass;
use GooglePayPasses\WalletObjects\Collections\TransitObject;

class RestMethods
{
    private static $restMethods;
    private $client;

    private function __construct() {
        // Create an Google_Client which facillitates REST call
        $this->client = new Google_Client();

        // do OAuth2.0 via service account file.
        // See https://developers.google.com/api-client-library/php/auth/service-accounts#authorizingrequests
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . SERVICE_ACCOUNT_FILE); // for Google_Client() initialization for server-to-server
        $this->client->useApplicationDefaultCredentials();
        // Set application name.
        $this->client->setApplicationName(APPLICATION_NAME);
        // Set Api scopes.
        $this->client->setScopes(array(SCOPES));
    }

    public static function getInstance() {
        if (is_null(static::$restMethods)) {
            static::$restMethods = new RestMethods();
        }
        return static::$restMethods;
    }

    /*******************************
     *
     *  Insert defined class with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/offerclass/insert
     *
     * @param OfferClass $offerClass - represents offer class resource.
     * @return OfferClass $response - response from REST call. If error, returns Google_Service_Exception
     *
     */
    public function insertOfferClass(OfferClass $offerClass){
        $response = NULL;

        // Use the Google Pay API for Passes Java client lib to insert the Offer class
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/offerclass/insert
        //// The methods to call these from client library are in WalletObjectsService.php
        $service = new WalletObjectsService($this->client);

        try {
            $response = $service->offerclass->insert($offerClass);
            $response["code"] = 200;
        } catch (Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
            echo("\n>>>> [START] Google Server Error response:");
            var_dump($response);
            echo("\n>>>> [END] Google Server Error response\n");
        } catch (Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }

    /*******************************
     *
     *  Insert defined class with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/eventticketclass/insert
     *
     * @param EventTicketClass $eventticketClass - represents eventticket class resource.
     * @return EventTicketClass $response - response from REST call. If error, returns Google_Service_Exception
     *
     */
    public function insertEventTicketClass(EventTicketClass $eventticketClass){
        $response = NULL;

        // Use the Google Pay API for Passes Java client lib to insert the EventTicket class
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/eventticketclass/insert
        //// The methods to call these from client library are in WalletObjectsService.php
        $service = new WalletObjectsService($this->client);

        try {
            $response = $service->eventticketclass->insert($eventticketClass);
            $response["code"] = 200;
        } catch (Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
            echo("\n>>>> [START] Google Server Error response:");
            var_dump($response);
            echo("\n>>>> [END] Google Server Error response\n");
        } catch (Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }

    /*******************************
     *
     *  Insert defined class with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/flightclass/insert
     *
     * @param FlightClass $flightClass - represents flight class resource.
     * @return FlightClass $response - response from REST call. If error, returns Google_Service_Exception
     *
     */
    public function insertFlightClass(FlightClass $flightClass){
        $response = NULL;

        // Use the Google Pay API for Passes Java client lib to insert the Flight class
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/flightclass/insert
        //// The methods to call these from client library are in WalletObjectsService.php
        $service = new WalletObjectsService($this->client);

        try {
            $response = $service->flightclass->insert($flightClass);
            $response["code"] = 200;
        } catch (Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
            echo("\n>>>> [START] Google Server Error response:");
            var_dump($response);
            echo("\n>>>> [END] Google Server Error response\n");
        } catch (Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }

    /*******************************
     *
     *  Insert defined class with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/giftcardclass/insert
     *
     * @param GiftCardClass $giftcardClass - represents giftcard class resource.
     * @return GiftCardClass $response - response from REST call. If error, returns Google_Service_Exception
     *
     */
    public function insertGiftCardClass(GiftCardClass $giftcardClass){
        $response = NULL;

        // Use the Google Pay API for Passes Java client lib to insert the GiftCard class
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/giftcardclass/insert
        //// The methods to call these from client library are in WalletObjectsService.php
        $service = new WalletObjectsService($this->client);

        try {
            $response = $service->giftcardclass->insert($giftcardClass);
            $response["code"] = 200;
        } catch (Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
            echo("\n>>>> [START] Google Server Error response:");
            var_dump($response);
            echo("\n>>>> [END] Google Server Error response\n");
        } catch (Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }

    /*******************************
     *
     *  Insert defined class with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/loyaltyclass/insert
     *
     * @param LoyaltyClass $loyaltyClass - represents loyalty class resource.
     * @return LoyaltyClass $response - response from REST call. If error, returns Google_Service_Exception
     *
     */
    public function insertLoyaltyClass(LoyaltyClass $loyaltyClass){
        $response = NULL;

        // Use the Google Pay API for Passes Java client lib to insert the Loyalty class
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/loyaltyclass/insert
        //// The methods to call these from client library are in WalletObjectsService.php
        $service = new WalletObjectsService($this->client);

        try {
            $response = $service->loyaltyclass->insert($loyaltyClass);
            $response["code"] = 200;
        } catch (Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
            echo("\n>>>> [START] Google Server Error response:");
            var_dump($response);
            echo("\n>>>> [END] Google Server Error response\n");
        } catch (Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }

    /*******************************
     *
     *  Insert defined class with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/transitclass/insert
     *
     * @param TransitClass $transitClass - represents transit class resource.
     * @return TransitClass $response - response from REST call. If error, returns Google_Service_Exception
     *
     *******************************/
    public function insertTransitClass(TransitClass $transitClass){
        $response = NULL;

        // Use the Google Pay API for Passes Java client lib to insert the Transit class
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/transitclass/insert
        //// The methods to call these from client library are in WalletObjectsService.php
        $service = new WalletObjectsService($this->client);

        try {
            $response = $service->transitclass->insert($transitClass);
            $response["code"] = 200;
        } catch (Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
            echo("\n>>>> [START] Google Server Error response:");
            var_dump($response);
            echo("\n>>>> [END] Google Server Error response\n");
        } catch (Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }

    /*******************************
     *
     *  Get defined class with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/offerclass/get
     *
     * @param String $classId - The unique identifier for a class.
     * @return OfferClass $response - response from REST call. If error, returns Google_Service_Exception
     *
     *******************************/
    public function getOfferClass(string $classId){
        $response = NULL;

        // Use the Google Pay API for Passes Java client lib to get an Offer class
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/offerclass/get
        //// The methods to call these from client library are in WalletObjectsService.php
        $service = new WalletObjectsService($this->client);

        try {
            $response = $service->offerclass->get($classId);
            $response["code"] = 200;
        } catch (Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
            echo("\n>>>> [START] Google Server Error response:");
            var_dump($response);
            echo("\n>>>> [END] Google Server Error response\n");
        } catch (Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }

    /*******************************
     *
     *  Get defined class with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/eventticketclass/get
     *
     * @param String $classId - The unique identifier for a class.
     * @return EventTicketClass $response - response from REST call. If error, returns Google_Service_Exception
     *
     *******************************/
    public function getEventTicketClass(string $classId){
        $response = NULL;

        // Use the Google Pay API for Passes Java client lib to get an EventTicket class
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/eventticketclass/get
        //// The methods to call these from client library are in WalletObjectsService.php
        $service = new WalletObjectsService($this->client);

        try {
            $response = $service->eventticketclass->get($classId);
            $response["code"] = 200;
        } catch (Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
            echo("\n>>>> [START] Google Server Error response:");
            var_dump($response);
            echo("\n>>>> [END] Google Server Error response\n");
        } catch (Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }

    /*******************************
     *
     *  Get defined class with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/flightclass/get
     *
     * @param String $classId - The unique identifier for a class.
     * @return FlightClass $response - response from REST call. If error, returns Google_Service_Exception
     *
     *******************************/
    public function getFlightClass(string $classId){
        $response = NULL;

        // Use the Google Pay API for Passes Java client lib to get an Flight class
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/flightclass/get
        //// The methods to call these from client library are in WalletObjectsService.php
        $service = new WalletObjectsService($this->client);

        try {
            $response = $service->flightclass->get($classId);
            $response["code"] = 200;
        } catch (Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
            echo("\n>>>> [START] Google Server Error response:");
            var_dump($response);
            echo("\n>>>> [END] Google Server Error response\n");
        } catch (Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }
    /*******************************
     *
     *  Get defined class with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/giftcardclass/get
     *
     * @param String $classId - The unique identifier for a class.
     * @return GiftCardClass $response - response from REST call. If error, returns Google_Service_Exception
     *
     *******************************/
    public function getGiftCardClass(string $classId){
        $response = NULL;

        // Use the Google Pay API for Passes Java client lib to get an GiftCard class
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/giftcardclass/get
        //// The methods to call these from client library are in WalletObjectsService.php
        $service = new WalletObjectsService($this->client);

        try {
            $response = $service->giftcardclass->get($classId);
            $response["code"] = 200;
        } catch (Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
            echo("\n>>>> [START] Google Server Error response:");
            var_dump($response);
            echo("\n>>>> [END] Google Server Error response\n");
        } catch (Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }
    /*******************************
     *
     *  Get defined class with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/loyaltyclass/get
     *
     * @param String $classId - The unique identifier for a class.
     * @return LoyaltyClass $response - response from REST call. If error, returns Google_Service_Exception
     *
     *******************************/
    public function getLoyaltyClass(string $classId){
        $response = NULL;

        // Use the Google Pay API for Passes Java client lib to get an Loyalty class
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/loyaltyclass/get
        //// The methods to call these from client library are in WalletObjectsService.php
        $service = new WalletObjectsService($this->client);

        try {
            $response = $service->loyaltyclass->get($classId);
            $response["code"] = 200;
        } catch (Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
            echo("\n>>>> [START] Google Server Error response:");
            var_dump($response);
            echo("\n>>>> [END] Google Server Error response\n");
        } catch (Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }
    /*******************************
     *
     *  Get defined class with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/transitclass/get
     *
     * @param String $classId - The unique identifier for a class.
     * @return TransitClass $response - response from REST call. If error, returns Google_Service_Exception
     *
     *******************************/
    public function getTransitClass(string $classId){
        $response = NULL;

        // Use the Google Pay API for Passes Java client lib to get an Transit class
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/transitclass/get
        //// The methods to call these from client library are in WalletObjectsService.php
        $service = new WalletObjectsService($this->client);

        try {
            $response = $service->transitclass->get($classId);
            $response["code"] = 200;
        } catch (Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
            echo("\n>>>> [START] Google Server Error response:");
            var_dump($response);
            echo("\n>>>> [END] Google Server Error response\n");
        } catch (Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }
    /*******************************
     *
     *  Insert defined object with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/offerobject/insert
     *
     * @param OfferObject $offerObject - represents offer class resource.
     * @return OfferObject $response - response from REST call. If error, returns Google_Service_Exception
     *
     *******************************/
    public function insertOfferObject(OfferObject $offerObject){
        $response = NULL;

        // Use the Google Pay API for Passes Java client lib to insert an Offer object
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/offerobject/insert
        //// The methods to call these from client library are in WalletObjectsService.php
        $service = new WalletObjectsService($this->client);

        try {
            $response = $service->offerobject->insert($offerObject);
            $response["code"] = 200;
        } catch (Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
            echo("\n>>>> [START] Google Server Error response:");
            var_dump($response);
            echo("\n>>>> [END] Google Server Error response\n");
        } catch (Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }
    /*******************************
     *
     *  Insert defined object with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/eventticketobject/insert
     *
     * @param EventTicketObject $eventticketObject - represents eventticket class resource.
     * @return EventTicketObject $response - response from REST call. If error, returns Google_Service_Exception
     *
     *******************************/
    public function insertEventTicketObject(EventTicketObject $eventticketObject){
        $response = NULL;

        // Use the Google Pay API for Passes Java client lib to insert an EventTicket object
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/eventticketobject/insert
        //// The methods to call these from client library are in WalletObjectsService.php
        $service = new WalletObjectsService($this->client);

        try {
            $response = $service->eventticketobject->insert($eventticketObject);
            $response["code"] = 200;
        } catch (Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
            echo("\n>>>> [START] Google Server Error response:");
            var_dump($response);
            echo("\n>>>> [END] Google Server Error response\n");
        } catch (Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }
    /*******************************
     *
     *  Insert defined object with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/flightobject/insert
     *
     * @param FlightObject $flightObject - represents flight class resource.
     * @return FlightObject $response - response from REST call. If error, returns Google_Service_Exception
     *
     *******************************/
    public function insertFlightObject(FlightObject $flightObject){
        $response = NULL;

        // Use the Google Pay API for Passes Java client lib to insert an Flight object
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/flightobject/insert
        //// The methods to call these from client library are in WalletObjectsService.php
        $service = new WalletObjectsService($this->client);

        try {
            $response = $service->flightobject->insert($flightObject);
            $response["code"] = 200;
        } catch (Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
            echo("\n>>>> [START] Google Server Error response:");
            var_dump($response);
            echo("\n>>>> [END] Google Server Error response\n");
        } catch (Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }
    /*******************************
     *
     *  Insert defined object with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/giftcardobject/insert
     *
     * @param GiftCardObject $giftcardObject - represents giftcard class resource.
     * @return GiftCardObject $response - response from REST call. If error, returns Google_Service_Exception
     *
     *******************************/
    public function insertGiftCardObject(GiftCardObject $giftcardObject){
        $response = NULL;

        // Use the Google Pay API for Passes Java client lib to insert an GiftCard object
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/giftcardobject/insert
        //// The methods to call these from client library are in WalletObjectsService.php
        $service = new WalletObjectsService($this->client);

        try {
            $response = $service->giftcardobject->insert($giftcardObject);
            $response["code"] = 200;
        } catch (Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
            echo("\n>>>> [START] Google Server Error response:");
            var_dump($response);
            echo("\n>>>> [END] Google Server Error response\n");
        } catch (Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }
    /*******************************
     *
     *  Insert defined object with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/loyaltyobject/insert
     *
     * @param LoyaltyObject $loyaltyObject - represents loyalty class resource.
     * @return LoyaltyObject $response - response from REST call. If error, returns Google_Service_Exception
     *
     *******************************/
    public function insertLoyaltyObject(LoyaltyObject $loyaltyObject){
        $response = NULL;

        // Use the Google Pay API for Passes Java client lib to insert an Loyalty object
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/loyaltyobject/insert
        //// The methods to call these from client library are in WalletObjectsService.php
        $service = new WalletObjectsService($this->client);

        try {
            $response = $service->loyaltyobject->insert($loyaltyObject);
            $response["code"] = 200;
        } catch (Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
            echo("\n>>>> [START] Google Server Error response:");
            var_dump($response);
            echo("\n>>>> [END] Google Server Error response\n");
        } catch (Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }
    /*******************************
     *
     *  Insert defined object with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/transitobject/insert
     *
     * @param TransitObject $transitObject - represents transit class resource.
     * @return TransitObject $response - response from REST call. If error, returns Google_Service_Exception
     *
     *******************************/
    public function insertTransitObject(TransitObject $transitObject){
        $response = NULL;

        // Use the Google Pay API for Passes Java client lib to insert an Transit object
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/transitobject/insert
        //// The methods to call these from client library are in WalletObjectsService.php
        $service = new WalletObjectsService($this->client);

        try {
            $response = $service->transitobject->insert($transitObject);
            $response["code"] = 200;
        } catch (Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
            echo("\n>>>> [START] Google Server Error response:");
            var_dump($response);
            echo("\n>>>> [END] Google Server Error response\n");
        } catch (Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }

    /*******************************
     *
     *  Get defined object with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/offerobject/get
     *
     * @param String $objectId - The unique identifier for an object.
     * @return OfferObject $response - response from REST call. If error, returns Google_Service_Exception
     *
     *******************************/
    public function getOfferObject(string $objectId){
        $response = NULL;

        // Use the Google Pay API for Passes Java client lib to get an Offer object
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/offerobject/get
        //// The methods to call these from client library are in WalletObjectsService.php
        $service = new WalletObjectsService($this->client);

        try {
            $response = $service->offerobject->get($objectId);
            $response["code"] = 200;
        } catch (Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
            echo("\n>>>> [START] Google Server Error response:");
            var_dump($response);
            echo("\n>>>> [END] Google Server Error response\n");
        } catch (Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }

    /*******************************
     *
     *  Get defined object with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/eventticketobject/get
     *
     * @param String $objectId - The unique identifier for an object.
     * @return EventTicketObject $response - response from REST call. If error, returns Google_Service_Exception
     *
     *******************************/
    public function getEventTicketObject(string $objectId){
        $response = NULL;

        // Use the Google Pay API for Passes Java client lib to get an EventTicket object
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/eventticketobject/get
        //// The methods to call these from client library are in WalletObjectsService.php
        $service = new WalletObjectsService($this->client);

        try {
            $response = $service->eventticketobject->get($objectId);
            $response["code"] = 200;
        } catch (Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
            echo("\n>>>> [START] Google Server Error response:");
            var_dump($response);
            echo("\n>>>> [END] Google Server Error response\n");
        } catch (Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }

    /*******************************
     *
     *  Get defined object with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/flightobject/get
     *
     * @param String $objectId - The unique identifier for an object.
     * @return FlightObject $response - response from REST call. If error, returns Google_Service_Exception
     *
     *******************************/
    public function getFlightObject(string $objectId){
        $response = NULL;

        // Use the Google Pay API for Passes Java client lib to get an Flight object
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/flightobject/get
        //// The methods to call these from client library are in WalletObjectsService.php
        $service = new WalletObjectsService($this->client);

        try {
            $response = $service->flightobject->get($objectId);
            $response["code"] = 200;
        } catch (Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
            echo("\n>>>> [START] Google Server Error response:");
            var_dump($response);
            echo("\n>>>> [END] Google Server Error response\n");
        } catch (Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }

    /*******************************
     *
     *  Get defined object with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/giftcardobject/get
     *
     * @param String $objectId - The unique identifier for an object.
     * @return GiftCardObject $response - response from REST call. If error, returns Google_Service_Exception
     *
     *******************************/
    public function getGiftCardObject(string $objectId){
        $response = NULL;

        // Use the Google Pay API for Passes Java client lib to get an GiftCard object
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/giftcardobject/get
        //// The methods to call these from client library are in WalletObjectsService.php
        $service = new WalletObjectsService($this->client);

        try {
            $response = $service->giftcardobject->get($objectId);
            $response["code"] = 200;
        } catch (Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
            echo("\n>>>> [START] Google Server Error response:");
            var_dump($response);
            echo("\n>>>> [END] Google Server Error response\n");
        } catch (Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }

    /*******************************
     *
     *  Get defined object with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/loyaltyobject/get
     *
     * @param String $objectId - The unique identifier for an object.
     * @return LoyaltyObject $response - response from REST call. If error, returns Google_Service_Exception
     *
     *******************************/
    public function getLoyaltyObject(string $objectId){
        $response = NULL;

        // Use the Google Pay API for Passes Java client lib to get an Loyalty object
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/loyaltyobject/get
        //// The methods to call these from client library are in WalletObjectsService.php
        $service = new WalletObjectsService($this->client);

        try {
            $response = $service->loyaltyobject->get($objectId);
            $response["code"] = 200;
        } catch (Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
            echo("\n>>>> [START] Google Server Error response:");
            var_dump($response);
            echo("\n>>>> [END] Google Server Error response\n");
        } catch (Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }

    /*******************************
     *
     *  Get defined object with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/transitobject/get
     *
     * @param String $objectId - The unique identifier for an object.
     * @return TransitObject $response - response from REST call. If error, returns Google_Service_Exception
     *
     *******************************/
    public function getTransitObject(string $objectId){
        $response = NULL;

        // Use the Google Pay API for Passes Java client lib to get an Transit object
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/transitobject/get
        //// The methods to call these from client library are in WalletObjectsService.php
        $service = new WalletObjectsService($this->client);

        try {
            $response = $service->transitobject->get($objectId);
            $response["code"] = 200;
        } catch (Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
            echo("\n>>>> [START] Google Server Error response:");
            var_dump($response);
            echo("\n>>>> [END] Google Server Error response\n");
        } catch (Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }
}