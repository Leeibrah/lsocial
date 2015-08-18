<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder{

    public function run(){
        DB::table('users')->delete();

        $adminRole = Role::whereName('administrator')->first();
        $businessRole = Role::whereName('business')->first();
        $userRole = Role::whereName('user')->first();

        $user = User::create(array(
            'first_name'    => 'Admin',
            'last_name'     => 'Doe',
            'email'         => 'admin@admin.com',
            'password'      => Hash::make('admin')
            
        ));
        $user->assignRole($adminRole);

        $user = User::create(array(
            'first_name'    => 'Biz',
            'last_name'     => 'One',
            'email'         => 'biz@biz.com',
            'password'      => Hash::make('biz')
        ));
        $user->assignRole($businessRole);

        $user = User::create(array(
            'first_name'    => 'John',
            'last_name'     => 'Doe',
            'email'         => 'user@user.com',
            'password'      => Hash::make('user')
        ));
        $user->assignRole($userRole);
    }
}