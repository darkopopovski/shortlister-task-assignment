<?php

namespace App\Repositories;

interface UserRepositoryInterface {
    public function findAll();
    public function findAllPageable($pageSize);
    public function createUser(array $data);
}