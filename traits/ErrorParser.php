<?php

namespace Drongotech\ResponseParser\Traits;

trait ErrorParser
{

    protected $error_message;

    public function setError($error)
    {
        if (env('APP_DEBUG') == true) {
            $this->error_message = $error;
        } else {
            $this->error_message = "Oops! Something went wrong. Please try again";
        }

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
