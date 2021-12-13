<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;

class Review extends Model
{
    protected $internal_gapi_mappings = [];
    public $comments;

    public function setComments($comments)
    {
        $this->comments = $comments;
    }
    public function getComments()
    {
        return $this->comments;
    }
}