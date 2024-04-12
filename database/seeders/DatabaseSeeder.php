<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // role info ----------------------
        /*
        ROLE LIST :

        admin = 1787a450
        eventmanger = 5940170a
        user = b89f2a4c

        For usage, assign this to the desired user within the seeder, or alternatively, perform this action directly within the panel."
        */
        $ps = env('FSLOG_PS');
        $em = env('FSLOG_EM');
        User::create(['nickname'=>'ادمین','username'=>'admin','firstname' => 'سودو','lastname'=>'ادمین', 'email' => $em,'role'=>env('FSLOG_ADMIN'), 'password' => Hash::make($ps),'phonenumber'=>'+98ADMIN','phonenumber_verified_at'=>now(),  'email_verified_at' => now(),]);
    }
}
