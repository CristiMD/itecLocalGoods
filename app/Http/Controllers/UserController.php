<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function deactivate(){

        User::where('id','=', Auth::id())->delete();
        return redirect()->back();
    }

}
