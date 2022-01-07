<?php

namespace App\Domain\Auth\Event;

use App\Domain\Auth\User;

class UserBannedEvent
{
    public function __construct(private User $user)
    {
    }

    public function getUser(): User
    {
        return $this->user;
    }
}
