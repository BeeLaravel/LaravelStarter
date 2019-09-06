<?php
use Illuminate\Database\Seeder;

class AdminRolePermissionsTableSeeder extends Seeder {
    public function run() {
        

        \DB::table('admin_role_permissions')->delete();
        
        \DB::table('admin_role_permissions')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'permission_id' => 1,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'created_at' => NULL,
                'permission_id' => 2,
                'role_id' => 2,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'created_at' => NULL,
                'permission_id' => 10,
                'role_id' => 2,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}