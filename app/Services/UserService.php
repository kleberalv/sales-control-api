<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function validateUserInput($data)
    {
        $rules = [
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . ($data['id'] ?? 'null'),
            'password' => 'required|string|min:8|max:20',
        ];

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return [
                'message' => 'Validation error',
                'errors' => $validator->errors(),
                'status' => Response::HTTP_UNPROCESSABLE_ENTITY,
            ];
        }

        return null;
    }

    public function createUser($data)
    {
        $data['password'] = Hash::make($data['password']);
        return $this->userRepository->createUser($data);
    }

    public function updateUser($id, $data)
    {
        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }
        return $this->userRepository->updateUser($id, $data);
    }

    public function deleteUser($id)
    {
        return $this->userRepository->deleteUser($id);
    }

    public function getAllUsers()
    {
        return $this->userRepository->getAllUsers();
    }

    public function getUserById($id)
    {
        return $this->userRepository->getUserById($id);
    }
}
