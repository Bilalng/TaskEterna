<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interface\UserInterface;
use App\Models\User;
class UserController extends Controller
{
    protected $userService;

    public function __constructer(UserInterface $userService)
    {
        $this->userService = $userService;
    }
    public function index()
    {
        $user = $this->userService->getUser();
        if (!$user) {
            return response()->json([
                'stattus' => 'failed',
                'message' => 'users not found'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $user
        ], 200);
    }
}
