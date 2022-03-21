<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Administrator";
        $adminRole->save();

        $admin = new User;
        $admin->name = 'Admin';
        $admin->email = 'sandi@gmail.com';
        $admin->password = Hash::make('password');
        $admin->save();
        $admin->attachRole($adminRole);
    }
}
