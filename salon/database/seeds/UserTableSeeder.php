<?php

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
        DB::table('role_users')->truncate();
        DB::table('users')->truncate();
        DB::table('roles')->truncate();

        // Create Admin Role
        $role1 = [
            'name' => 'Admin',
            'slug' => 'admin',
        ];
        $adminRole = Sentinel::getRoleRepository()->createModel()->fill($role1)->save();

        // Create Staff Role
        $role2 = [
            'name' => 'Staff',
            'slug' => 'staff',
        ];
        $adminRole = Sentinel::getRoleRepository()->createModel()->fill($role2)->save();        

        // Create User Role
        $role3 = [
            'name' => 'User',
            'slug' => 'user',
        ];
        $userRole = Sentinel::getRoleRepository()->createModel()->fill($role3)->save();

        // Create user with admin-role
        $admin_data = [
            'username' => 'admin',
            'email'    => 'admin@cva.vn',
            'password' => 'admin@123',
            'permissions' => [
                'administrator' => true,
                'directorate' => true,
            ]
        ];

        $admin = Sentinel::registerAndActivate($admin_data);
        $role = Sentinel::findRoleBySlug('admin');
        $role->users()->attach($admin);

        // Create user with admin-role
        $staff_data = [
            //'username' => 'admin',
            'username' => 'staff_1',
            'email'    => 'staff_1@cva.vn',
            'password' => 'staff1@123',
            'permissions' => [
                'administrator' => true,
                'directorate' => false,
            ]
        ];

        $staff = Sentinel::registerAndActivate($staff_data);
        $role = Sentinel::findRoleBySlug('staff');
        $role->users()->attach($admin);

        // Create user with user-role
        $member_data = [
            'username' => 'member',
            'email'    => 'member@gmail.com',
            'password' => 'member@123',
            'permissions' => [
                'administrator' => false,
                'directorate' => false,
            ]
        ];

        $member = Sentinel::registerAndActivate($member_data);
        $role = Sentinel::findRoleBySlug('user');
        $role->users()->attach($member);
    }
}
