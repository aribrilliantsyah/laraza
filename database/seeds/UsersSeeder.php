<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat role super admin
        $superadminRole = new Role();
        $superadminRole->name = "superadmin";
        $superadminRole->display_name = "Super Admin";
        $superadminRole->save();

        //membuat role admin 
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        //membuat sample super admin
        $superadmin = new User();
        $superadmin->name = 'Admin Laraza';
        $superadmin->email = 'admin@gmail.com';
        $superadmin->password = bcrypt('rahasia');
        $superadmin->save();
        $superadmin->attachRole($superadminRole);

        //membuat sample super admin
        $admin = new User();
        $admin->name = 'Sample Pengurus';
        $admin->email = 'pengurus@gmail.com';
        $admin->password = bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);

        $admin = new User();
        $admin->name = 'Sample Pengurus 2';
        $admin->email = 'pengurus2@gmail.com';
        $admin->password = bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);
    }
}
