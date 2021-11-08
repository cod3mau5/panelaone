<?php

use App\User;
use App\Role;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_super = Role::where('name', 'superadmin')->first();
        $role_user  = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = 'Super Administrador';
        $user->username = 'superadmin';
        $user->email = 'superadmin@blackkraken.mx';
        $user->password = bcrypt('password');
        $user->save();
        $user->roles()->attach($role_admin);


        $user = new User();
        $user->name = 'Admin';
        $user->username = 'administrator';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('password');
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'User';
        $user->username = 'user';
        $user->email = 'user@example.com';
        $user->password = bcrypt('password');
        $user->save();
        $user->roles()->attach($role_user);

    }
}
