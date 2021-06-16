<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\User;
class ApiController extends BaseController
{
    public function index(){
        $users = User::get();
        return response()->json($users, 200);
    } 
}
