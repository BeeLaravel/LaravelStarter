<?php
use Illuminate\Database\Seeder;

class AdminRoleMenuTableSeeder extends Seeder {
    public function run() {
        

        \DB::table('admin_role_menu')->delete();
        
        \DB::table('admin_role_menu')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'menu_id' => 2,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'created_at' => NULL,
                'menu_id' => 15,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'created_at' => NULL,
                'menu_id' => 16,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'created_at' => NULL,
                'menu_id' => 13,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'created_at' => NULL,
                'menu_id' => 14,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'created_at' => NULL,
                'menu_id' => 8,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}