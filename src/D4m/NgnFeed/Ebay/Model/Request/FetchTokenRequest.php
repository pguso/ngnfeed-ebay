<?php

namespace D4m\NgnFeed\Ebay\Model\Request;

class FetchTokenRequest extends BaseRequest
{
    protected $sessionID;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param mixed $sessionID
     */
    public function setSessionID($sessionID)
    {
        $this->sessionID = $sessionID;
    }

    /**
     * @return mixed
     */
    public function getSessionID()
    {
        return $this->sessionID;
    }
}