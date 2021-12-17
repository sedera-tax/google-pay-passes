<?php


namespace GooglePayPasses\WalletObjects\Resources;


use Google\Exception;
use Google\Service\Resource;
use GooglePayPasses\WalletObjects\Collections\SmartTap as SmartTapCollection;

class Smarttap extends Resource
{
    /**
     * Inserts the smart tap. (smarttap.insert)
     *
     * @param SmartTapCollection $postBody
     * @param array $optParams Optional parameters.
     * @return SmartTapCollection
     * @throws Exception
     */
    public function insert(SmartTapCollection $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), SmartTapCollection::class);
    }
}