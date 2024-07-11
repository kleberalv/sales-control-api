<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;
use App\Helpers\ResponseHelper;
use App\Helpers\RequestHelper;
use Illuminate\Http\Response;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index(Request $request)
    {
        $users = $this->userService->getAllUsers();
        if (RequestHelper::isApiRequest($request)) {
            return ResponseHelper::respondWithApi(null, $users, Response::HTTP_OK);
        }
        return view('users.index', compact('users'));
    }

    public function store(Request $request)
    {
        $validation = $this->userService->validateUserInput($request->all());
        if ($validation) {
            return ResponseHelper::respondWithApi($validation['message'], $validation['errors'], $validation['status']);
        }

        $user = $this->userService->createUser($request->all());
        $message = 'User created successfully!';

        return RequestHelper::isApiRequest($request) ?
            ResponseHelper::respondWithApi($message, $user, Response::HTTP_CREATED) :
            ResponseHelper::respondWithWeb('users.index', $message);
    }

    public function show(Request $request, $id)
    {
        $user = $this->userService->getUserById($id);
        if (RequestHelper::isApiRequest($request)) {
            return ResponseHelper::respondWithApi(null, $user, Response::HTTP_OK);
        }
        return view('users.show', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $validation = $this->userService->validateUserInput($request->all());
        if ($validation) {
            return ResponseHelper::respondWithApi($validation['message'], $validation['errors'], $validation['status']);
        }

        $user = $this->userService->updateUser($id, $request->all());
        $message = 'User updated successfully!';

        return RequestHelper::isApiRequest($request) ?
            ResponseHelper::respondWithApi($message, $user, Response::HTTP_OK) :
            ResponseHelper::respondWithWeb('users.index', $message);
    }

    public function destroy(Request $request, $id)
    {
        $this->userService->deleteUser($id);
        $message = 'User deleted successfully!';

        return RequestHelper::isApiRequest($request) ?
            ResponseHelper::respondWithApi($message, null, Response::HTTP_OK) :
            ResponseHelper::respondWithWeb('users.index', $message);
    }
}
