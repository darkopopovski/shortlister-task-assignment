<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\UserRepositoryInterface;

class UserRepositoryEloquent implements UserRepositoryInterface {

    public function findAll() {
        return User::all();
    }
}