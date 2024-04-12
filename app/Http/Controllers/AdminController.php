<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show(){
        $admin = User::where('role',env('FSLOG_ADMIN'))->get();
        $users = User::where('role',env('FSLOG_EM'))->get();
        $eventmanger = User::where('role',env('FSLOG_EVENTM'))->get();
        return view('adpanel', compact('users','admin','eventmanger'));
    }
}
