<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\UserRepositoryInterface;

class UserRepositoryEloquent implements UserRepositoryInterface {

    public function findAll() {
        return User::all();
    }

    public function findAllPageable($pageSize) {
        return User::paginate($pageSize);
    }

    public function createUser(array $data): User {

        $data['password'] = bcrypt($this->generatePassword(5));
        $data['name'] = 'Test Name!';

        return User::create($data);
    }

    private function generatePassword($length = 12) {
        return substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, $length);
    }
}