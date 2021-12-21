<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\LocalizedString;

class TicketCost extends Model
{
    protected $internal_gapi_mappings = [];
    protected $discountMessageType = LocalizedString::class;
    protected $discountMessageDataType = '';
    protected $faceValueType = Money::class;
    protected $faceValueDataType = '';
    protected $purchasePriceType = Money::class;
    protected $purchasePriceDataType = '';
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $discountMessage;
    /**
     * @var array|Money|mixed|null
     */
    private $faceValue;
    /**
     * @var array|Money|mixed|null
     */
    private $purchasePrice;


    public function setDiscountMessage(LocalizedString $discountMessage)
    {
        $this->discountMessage = $discountMessage;
    }
    public function getDiscountMessage()
    {
        return $this->discountMessage;
    }
    public function setFaceValue(Money $faceValue)
    {
        $this->faceValue = $faceValue;
    }
    public function getFaceValue()
    {
        return $this->faceValue;
    }
    public function setPurchasePrice(Money $purchasePrice)
    {
        $this->purchasePrice = $purchasePrice;
    }
    public function getPurchasePrice()
    {
        return $this->purchasePrice;
    }
}