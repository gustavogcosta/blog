<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Gustavo',
            'email' => 'gustavo@php.com',
            'password' => Hash::make('g1s1t1o2')
        ]);
        User::create([
            'name' => 'Lucas',
            'email' => 'lucas@php.com',
            'password' => Hash::make('123')
        ]);
        User::create([
            'name' => 'admin',
            'email' => 'admin@php.com',
            'password' => Hash::make('admin')
        ]);
    }
}
