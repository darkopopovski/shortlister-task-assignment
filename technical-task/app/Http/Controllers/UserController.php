<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Log;
use App\Http\Responses\UserResponse;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    public function getUsers() {
        $users = $this->userService->getUsers()
                      ->map(fn($user) => UserResponse::fromUser($user));

        return view('user-table', ['users' => $users]);
    }

    
    public function getUsersPageable(Request $request) {
        $pageSize = $request->query('pageSize', 10);

        $users = $this->userService->getUsersPageable($pageSize);
                    //   ->map(fn($user) => UserResponse::fromUser($user));

        return view('user-table-pageable', ['users' => $users]);
    }

    public function createUserView() {
        return view('create-user');
    }

    public function createUser(UserRequest $request) {
        $user = $this->userService->createUser($request->validated());

        Log::info('Incoming Request Data:', $request->all());

        if ($user) {
            return redirect('/users');
        }

        return response()->json([
            'error' => 'User not saved!'
        ], 400);
    }
}
