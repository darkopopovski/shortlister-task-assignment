<?php

namespace App\Services;

use App\Http\Responses\UserResponse;
use App\Repositories\UserRepositoryInterface;

class UserService {
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function getUsers(){
        return $this->userRepository->findAll()
                    ->map(fn($user) => UserResponse::fromUser($user));
    }

    public function getUsersPageable($pageSize) {
        return $this->userRepository->findAllPageable($pageSize);
    }

    public function createUser(array $data) {
        return $this->userRepository->createUser($data);
    }
}