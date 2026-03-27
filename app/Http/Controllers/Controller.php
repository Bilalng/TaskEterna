<?php

namespace App\Http\Controllers;
use App\Interface\UserInterface;

abstract class Controller
{
    protected $userService;

    public function _constructer(UserInterface $userService){
        $this->userService = $userService; 
    }
    public function index(){
         $user = $this->userService->getAllUser();

        if(!$user){
            return response()->json([
                'stattus' => 'failed',
                'message' => 'users not found'
            ],404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $user
        ],200);
    }
}
