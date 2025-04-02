<?php

namespace App\Services;

use App\Repositories\UserRepositoryInterface;

class UserService {
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function getUsers(){
        return $this->userRepository->findAll();
    }
}