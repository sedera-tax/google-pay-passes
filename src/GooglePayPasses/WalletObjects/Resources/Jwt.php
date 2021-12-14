<?php


namespace GooglePayPasses\WalletObjects\Resources;


use Google\Exception;
use Google\Service\Resource;
use GooglePayPasses\WalletObjects\Models\JwtInsertResponse;
use GooglePayPasses\WalletObjects\Models\JwtModel;

class Jwt extends Resource
{
    /**
     * Inserts the resources in the JWT. (jwt.insert)
     *
     * @param JwtModel $postBody
     * @param array $optParams Optional parameters.
     * @return JwtInsertResponse
     * @throws Exception
     */
    public function insert(JwtModel $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), JwtInsertResponse::class);
    }
}