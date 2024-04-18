<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AdminController extends Controller
{
    public function show(){
        $admin = User::where('role',env('FSLOG_ADMIN'))->get();
        $users = User::where('role',env('FSLOG_EM'))->get();
        $eventmanger = User::where('role',env('FSLOG_EVENTM'))->get();


        if (App::isDownForMaintenance()) {
           $status = 'اپلیکشین در حال حاضر در حالت خاموش است';
        } else {
            $status = 'وبسایت در حال اجراست';
        }


        return view('adpanel', compact('users','admin','eventmanger','status'));
    }
}
