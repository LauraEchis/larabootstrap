<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class CardCreatingController extends Controller
{
    public function index()
    {
        return view('createcard');
    }

//    public function update(array $data)
//    {
//        return User::updated();
//    }
}
