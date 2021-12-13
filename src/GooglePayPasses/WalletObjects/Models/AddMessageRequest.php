<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;

class AddMessageRequest extends Model
{
    protected $internal_gapi_mappings = [];
    protected $messageType = Message::class;
    protected $messageDataType = '';
    /**
     * @var array|Message|mixed|null
     */
    private $message;


    public function setMessage(Message $message)
    {
        $this->message = $message;
    }
    public function getMessage()
    {
        return $this->message;
    }
}