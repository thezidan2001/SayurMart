<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $user = User::where('id', Auth::user()->id)->first();
        $address = UserAddress::where('user_id', Auth::user()->id)->first();

        return view('profile.index')->with(compact('user', 'address'));
    }
}
