<?php
use Illuminate\Database\Seeder;

class AdminRolesTableSeeder extends Seeder {
    public function run() {
        

        \DB::table('admin_roles')->delete();
        
        \DB::table('admin_roles')->insert(array (
            0 => 
            array (
                'created_at' => '2019-09-04 13:19:28',
                'id' => 1,
                'name' => 'Administrator',
                'slug' => 'administrator',
                'updated_at' => '2019-09-04 13:19:28',
            ),
            1 => 
            array (
                'created_at' => '2019-09-04 13:29:59',
                'id' => 2,
                'name' => 'Editor',
                'slug' => 'editor',
                'updated_at' => '2019-09-04 13:29:59',
            ),
        ));
        
        
    }
}