<?php

namespace App\Service;
use App\Interface\UserInterface;
use App\Models\User;
class UserService implements UserInterface
{
    public function getAllUser()
    {
        return User::paginate(10);
    }
}