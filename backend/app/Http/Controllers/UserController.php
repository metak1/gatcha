<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller {

    public function index() {
        $users = User::get();
        
        return view('users.list', [ 'users' => $users ]);
    }
}