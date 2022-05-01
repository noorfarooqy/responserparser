<?php

namespace Drongotech\ResponseParser\Traits;



trait LockableTrait
{
    public function getLockoutTime()
    {
        return $this->lockout_time;
    }

    public function hasLockoutTime()
    {
        return $this->getLockoutTime() > 0;
    }
}