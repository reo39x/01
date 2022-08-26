<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    public function mypage(User $user)
    {
        return view('user/mypage')->with(['own_reviews' => $user->getOwnPaginateByLimit()]);
    }
}
