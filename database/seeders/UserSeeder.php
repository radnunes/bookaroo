<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@teste.pt',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            //'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'name' => 'Client',
            'email' => 'client@teste.pt',
            'email_verified_at' => now()->subDays(3),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);


        foreach(User::all() as $user){
            if($user->id == 1)
                $user->assignRole('admin');
            else
                $user->assignRole('client');
        }
    }
}
