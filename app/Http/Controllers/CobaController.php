<?php

namespace esemka\Http\Controllers;

use Illuminate\Http\Request;
use esemka\User;

class CobaController extends Controller
{
    public function index(){
        $date = date('Y-m-d H:i:s');
        return User::create([
        'name' => 'cobs',
        'email_verified_at' => $date,
        'email' => 'cobs3@gmail.com'
        ]);
    }
}