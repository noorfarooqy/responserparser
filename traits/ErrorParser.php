<?php

namespace Drongotech\ResponseParser\Traits;

trait ErrorParser
{

    protected $error_message;

    public function setError($error)
    {
        $this->error_message = $error;
    }

    public function getMessage()
    {
        return $this->error_message;
    }
    public function getError($info = "")
    {
        return "Oops! Something went wrong in the database while trying to ";
    }
}
