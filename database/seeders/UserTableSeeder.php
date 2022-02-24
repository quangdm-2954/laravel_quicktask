<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $this->seederAdminAccount();
       $this->seederUserAccount();
    }

    public function seederAdminAccount()
    {
        User::create([
            'first_name' => 'Minh',
            'last_name' => 'Quang',
            'username' => 'Doan minh quang',
            'isAdmin' => true,
            'isActive' => true,
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
    
    public function seederUserAccount()
    {
        User::factory()->count(10)->create();
    }

}
