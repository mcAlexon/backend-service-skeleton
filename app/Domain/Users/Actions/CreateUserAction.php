<?php

namespace App\Domain\Users\Actions;

use App\Domain\Users\Models\User;

class CreateUserAction
{
    public function execute(array $fields): User
    {
        $users = new User();
        $users->fill($fields);
        $users->save();

        return $users;
    }
}