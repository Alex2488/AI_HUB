<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Carbon\Carbon;
use Carbon\Traits\Timestamp;
use Database\Factories\ServiceFactory;
use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

//        ServiceFactory::factory()->create();



        \App\Models\User::create([
            'name' => 'Alex',
            'email' => 'savchuk.aviz@gmail.com',
            'password' => Hash::make('ChesterSlim1423'),
            'role' => '1',
            'email_verified_at' => Carbon::now()
        ]);




    }
}
