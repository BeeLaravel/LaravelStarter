<?php
use Illuminate\Database\Seeder;

class AdminRoleUsersTableSeeder extends Seeder {
    public function run() {
        

        \DB::table('admin_role_users')->delete();
        
        \DB::table('admin_role_users')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'role_id' => 1,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            1 => 
            array (
                'created_at' => NULL,
                'role_id' => 1,
                'updated_at' => NULL,
                'user_id' => 2,
            ),
            2 => 
            array (
                'created_at' => NULL,
                'role_id' => 2,
                'updated_at' => NULL,
                'user_id' => 3,
            ),
            3 => 
            array (
                'created_at' => NULL,
                'role_id' => 2,
                'updated_at' => NULL,
                'user_id' => 4,
            ),
        ));
        
        
    }
}