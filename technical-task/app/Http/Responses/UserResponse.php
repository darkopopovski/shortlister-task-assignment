<?php

namespace App\Http\Responses;

use Carbon\Carbon;
use App\Models\User;

class UserResponse {

    public string $id;
    public string $fullName;
    public string $email;
    public string $phone;
    public int $age;

    public function __construct(User $user) {
        $this->id = $user->id;
        $this->fullName = $user->full_name;
        $this->email = $user->email;
        $this->phone = $user->phone;
        $this->age = $this->calculateAge($user->date_of_birth);
    }
    
    public static function fromUser(User $user) {
        return new self ($user);
    }

    private function calculateAge(string $dateOfBirth): int
    {
        return Carbon::parse($dateOfBirth)->age;
    }

}