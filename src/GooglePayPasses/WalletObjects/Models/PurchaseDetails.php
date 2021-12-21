<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;

class PurchaseDetails extends Model
{
    protected $internal_gapi_mappings = [];
    public $accountId;
    public $confirmationCode;
    public $purchaseDateTime;
    public $purchaseReceiptNumber;
    protected $ticketCostType = TicketCost::class;
    protected $ticketCostDataType = '';
    /**
     * @var array|TicketCost|mixed|null
     */
    private $ticketCost;


    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }
    public function getAccountId()
    {
        return $this->accountId;
    }
    public function setConfirmationCode($confirmationCode)
    {
        $this->confirmationCode = $confirmationCode;
    }
    public function getConfirmationCode()
    {
        return $this->confirmationCode;
    }
    public function setPurchaseDateTime($purchaseDateTime)
    {
        $this->purchaseDateTime = $purchaseDateTime;
    }
    public function getPurchaseDateTime()
    {
        return $this->purchaseDateTime;
    }
    public function setPurchaseReceiptNumber($purchaseReceiptNumber)
    {
        $this->purchaseReceiptNumber = $purchaseReceiptNumber;
    }
    public function getPurchaseReceiptNumber()
    {
        return $this->purchaseReceiptNumber;
    }
    public function setTicketCost(TicketCost $ticketCost)
    {
        $this->ticketCost = $ticketCost;
    }
    public function getTicketCost()
    {
        return $this->ticketCost;
    }
}