<?php

namespace GooglePayPasses;

use Google\Service;
use GooglePayPasses\WalletObjects\Resources\EventTicketClass;
use GooglePayPasses\WalletObjects\Resources\EventTicketObject;
use GooglePayPasses\WalletObjects\Resources\FlightClass;
use GooglePayPasses\WalletObjects\Resources\FlightObject;
use GooglePayPasses\WalletObjects\Resources\GiftCardClass;
use GooglePayPasses\WalletObjects\Resources\GiftCardObject;
use GooglePayPasses\WalletObjects\Resources\Issuer;
use GooglePayPasses\WalletObjects\Resources\Jwt;
use GooglePayPasses\WalletObjects\Resources\LoyaltyClass;
use GooglePayPasses\WalletObjects\Resources\LoyaltyObject;
use GooglePayPasses\WalletObjects\Resources\OfferClass;
use GooglePayPasses\WalletObjects\Resources\OfferObject;
use GooglePayPasses\WalletObjects\Resources\Permissions;
use GooglePayPasses\WalletObjects\Resources\Smarttap;
use GooglePayPasses\WalletObjects\Resources\TransitClass;
use GooglePayPasses\WalletObjects\Resources\TransitObject;

/**
 * Service definition for WalletObjectsService (v1).
 *
 * <p>
 * API for issuers to save and manage Google Wallet Objects.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/pay/passes" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class WalletObjectsService extends Service
{
    /** You should never encounter this message. Please do not approve the access request.. */
    const WALLET_OBJECT_ISSUER = "https://www.googleapis.com/auth/wallet_object.issuer";

    public $eventticketclass;
    public $eventticketobject;
    public $flightclass;
    public $flightobject;
    public $giftcardclass;
    public $giftcardobject;
    public $issuer;
    public $jwt;
    public $loyaltyclass;
    public $loyaltyobject;
    public $offerclass;
    public $offerobject;
    public $permissions;
    public $smarttap;
    public $transitclass;
    public $transitobject;


    /**
     * Constructs the internal representation of the Walletobjects service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        parent::__construct($client);
        $this->rootUrl = 'https://walletobjects.googleapis.com/';
        $this->servicePath = '';
        $this->batchPath = 'batch';
        $this->version = 'v1';
        $this->serviceName = 'walletobjects';

        $this->eventticketclass = new EventTicketClass(
            $this,
            $this->serviceName,
            'eventticketclass',
            array(
                'methods' => array(
                    'addmessage' => array(
                        'path' => 'walletobjects/v1/eventTicketClass/{resourceId}/addMessage',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'get' => array(
                        'path' => 'walletobjects/v1/eventTicketClass/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'insert' => array(
                        'path' => 'walletobjects/v1/eventTicketClass',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),'list' => array(
                        'path' => 'walletobjects/v1/eventTicketClass',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'issuerId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'token' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ),'patch' => array(
                        'path' => 'walletobjects/v1/eventTicketClass/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'walletobjects/v1/eventTicketClass/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->eventticketobject = new EventTicketObject(
            $this,
            $this->serviceName,
            'eventticketobject',
            array(
                'methods' => array(
                    'addmessage' => array(
                        'path' => 'walletobjects/v1/eventTicketObject/{resourceId}/addMessage',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'get' => array(
                        'path' => 'walletobjects/v1/eventTicketObject/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'insert' => array(
                        'path' => 'walletobjects/v1/eventTicketObject',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),'list' => array(
                        'path' => 'walletobjects/v1/eventTicketObject',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'classId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'token' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ),'modifylinkedofferobjects' => array(
                        'path' => 'walletobjects/v1/eventTicketObject/{resourceId}/modifyLinkedOfferObjects',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'patch' => array(
                        'path' => 'walletobjects/v1/eventTicketObject/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'walletobjects/v1/eventTicketObject/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->flightclass = new FlightClass(
            $this,
            $this->serviceName,
            'flightclass',
            array(
                'methods' => array(
                    'addmessage' => array(
                        'path' => 'walletobjects/v1/flightClass/{resourceId}/addMessage',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'get' => array(
                        'path' => 'walletobjects/v1/flightClass/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'insert' => array(
                        'path' => 'walletobjects/v1/flightClass',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),'list' => array(
                        'path' => 'walletobjects/v1/flightClass',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'issuerId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'token' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ),'patch' => array(
                        'path' => 'walletobjects/v1/flightClass/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'walletobjects/v1/flightClass/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->flightobject = new FlightObject(
            $this,
            $this->serviceName,
            'flightobject',
            array(
                'methods' => array(
                    'addmessage' => array(
                        'path' => 'walletobjects/v1/flightObject/{resourceId}/addMessage',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'get' => array(
                        'path' => 'walletobjects/v1/flightObject/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'insert' => array(
                        'path' => 'walletobjects/v1/flightObject',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),'list' => array(
                        'path' => 'walletobjects/v1/flightObject',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'classId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'token' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ),'patch' => array(
                        'path' => 'walletobjects/v1/flightObject/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'walletobjects/v1/flightObject/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->giftcardclass = new GiftCardClass(
            $this,
            $this->serviceName,
            'giftcardclass',
            array(
                'methods' => array(
                    'addmessage' => array(
                        'path' => 'walletobjects/v1/giftCardClass/{resourceId}/addMessage',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'get' => array(
                        'path' => 'walletobjects/v1/giftCardClass/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'insert' => array(
                        'path' => 'walletobjects/v1/giftCardClass',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),'list' => array(
                        'path' => 'walletobjects/v1/giftCardClass',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'issuerId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'token' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ),'patch' => array(
                        'path' => 'walletobjects/v1/giftCardClass/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'walletobjects/v1/giftCardClass/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->giftcardobject = new GiftCardObject(
            $this,
            $this->serviceName,
            'giftcardobject',
            array(
                'methods' => array(
                    'addmessage' => array(
                        'path' => 'walletobjects/v1/giftCardObject/{resourceId}/addMessage',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'get' => array(
                        'path' => 'walletobjects/v1/giftCardObject/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'insert' => array(
                        'path' => 'walletobjects/v1/giftCardObject',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),'list' => array(
                        'path' => 'walletobjects/v1/giftCardObject',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'classId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'token' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ),'patch' => array(
                        'path' => 'walletobjects/v1/giftCardObject/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'walletobjects/v1/giftCardObject/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->issuer = new Issuer(
            $this,
            $this->serviceName,
            'issuer',
            array(
                'methods' => array(
                    'get' => array(
                        'path' => 'walletobjects/v1/issuer/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'insert' => array(
                        'path' => 'walletobjects/v1/issuer',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),'list' => array(
                        'path' => 'walletobjects/v1/issuer',
                        'httpMethod' => 'GET',
                        'parameters' => array(),
                    ),'patch' => array(
                        'path' => 'walletobjects/v1/issuer/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'walletobjects/v1/issuer/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->jwt = new Jwt(
            $this,
            $this->serviceName,
            'jwt',
            array(
                'methods' => array(
                    'insert' => array(
                        'path' => 'walletobjects/v1/jwt',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),
                )
            )
        );
        $this->loyaltyclass = new LoyaltyClass(
            $this,
            $this->serviceName,
            'loyaltyclass',
            array(
                'methods' => array(
                    'addmessage' => array(
                        'path' => 'walletobjects/v1/loyaltyClass/{resourceId}/addMessage',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'get' => array(
                        'path' => 'walletobjects/v1/loyaltyClass/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'insert' => array(
                        'path' => 'walletobjects/v1/loyaltyClass',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),'list' => array(
                        'path' => 'walletobjects/v1/loyaltyClass',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'issuerId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'token' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ),'patch' => array(
                        'path' => 'walletobjects/v1/loyaltyClass/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'walletobjects/v1/loyaltyClass/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->loyaltyobject = new LoyaltyObject(
            $this,
            $this->serviceName,
            'loyaltyobject',
            array(
                'methods' => array(
                    'addmessage' => array(
                        'path' => 'walletobjects/v1/loyaltyObject/{resourceId}/addMessage',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'get' => array(
                        'path' => 'walletobjects/v1/loyaltyObject/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'insert' => array(
                        'path' => 'walletobjects/v1/loyaltyObject',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),'list' => array(
                        'path' => 'walletobjects/v1/loyaltyObject',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'classId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'token' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ),'modifylinkedofferobjects' => array(
                        'path' => 'walletobjects/v1/loyaltyObject/{resourceId}/modifyLinkedOfferObjects',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'patch' => array(
                        'path' => 'walletobjects/v1/loyaltyObject/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'walletobjects/v1/loyaltyObject/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->offerclass = new OfferClass(
            $this,
            $this->serviceName,
            'offerclass',
            array(
                'methods' => array(
                    'addmessage' => array(
                        'path' => 'walletobjects/v1/offerClass/{resourceId}/addMessage',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'get' => array(
                        'path' => 'walletobjects/v1/offerClass/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'insert' => array(
                        'path' => 'walletobjects/v1/offerClass',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),'list' => array(
                        'path' => 'walletobjects/v1/offerClass',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'issuerId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'token' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ),'patch' => array(
                        'path' => 'walletobjects/v1/offerClass/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'walletobjects/v1/offerClass/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->offerobject = new OfferObject(
            $this,
            $this->serviceName,
            'offerobject',
            array(
                'methods' => array(
                    'addmessage' => array(
                        'path' => 'walletobjects/v1/offerObject/{resourceId}/addMessage',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'get' => array(
                        'path' => 'walletobjects/v1/offerObject/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'insert' => array(
                        'path' => 'walletobjects/v1/offerObject',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),'list' => array(
                        'path' => 'walletobjects/v1/offerObject',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'classId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'token' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ),'patch' => array(
                        'path' => 'walletobjects/v1/offerObject/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'walletobjects/v1/offerObject/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->permissions = new Permissions(
            $this,
            $this->serviceName,
            'permissions',
            array(
                'methods' => array(
                    'get' => array(
                        'path' => 'walletobjects/v1/permissions/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'walletobjects/v1/permissions/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->smarttap = new Smarttap(
            $this,
            $this->serviceName,
            'smarttap',
            array(
                'methods' => array(
                    'insert' => array(
                        'path' => 'walletobjects/v1/smartTap',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),
                )
            )
        );
        $this->transitclass = new TransitClass(
            $this,
            $this->serviceName,
            'transitclass',
            array(
                'methods' => array(
                    'addmessage' => array(
                        'path' => 'walletobjects/v1/transitClass/{resourceId}/addMessage',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'get' => array(
                        'path' => 'walletobjects/v1/transitClass/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'insert' => array(
                        'path' => 'walletobjects/v1/transitClass',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),'list' => array(
                        'path' => 'walletobjects/v1/transitClass',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'issuerId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'token' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ),'patch' => array(
                        'path' => 'walletobjects/v1/transitClass/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'walletobjects/v1/transitClass/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->transitobject = new TransitObject(
            $this,
            $this->serviceName,
            'transitobject',
            array(
                'methods' => array(
                    'addmessage' => array(
                        'path' => 'walletobjects/v1/transitObject/{resourceId}/addMessage',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'get' => array(
                        'path' => 'walletobjects/v1/transitObject/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'insert' => array(
                        'path' => 'walletobjects/v1/transitObject',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),'list' => array(
                        'path' => 'walletobjects/v1/transitObject',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'classId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'token' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ),'patch' => array(
                        'path' => 'walletobjects/v1/transitObject/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'walletobjects/v1/transitObject/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
    }
}