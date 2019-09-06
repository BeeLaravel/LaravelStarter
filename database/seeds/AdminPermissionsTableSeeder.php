<?php
use Illuminate\Database\Seeder;

class AdminPermissionsTableSeeder extends Seeder {
    public function run() {
        

        \DB::table('admin_permissions')->delete();
        
        \DB::table('admin_permissions')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'http_method' => '',
                'http_path' => '*',
                'id' => 1,
                'name' => 'All permission',
                'slug' => '*',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'created_at' => NULL,
                'http_method' => 'GET',
                'http_path' => '/',
                'id' => 2,
                'name' => 'Dashboard',
                'slug' => 'dashboard',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'created_at' => NULL,
                'http_method' => '',
                'http_path' => '/auth/login
/auth/logout',
                'id' => 3,
                'name' => 'Login',
                'slug' => 'auth.login',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'created_at' => NULL,
                'http_method' => 'GET,PUT',
                'http_path' => '/auth/setting',
                'id' => 4,
                'name' => 'User setting',
                'slug' => 'auth.setting',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'created_at' => NULL,
                'http_method' => '',
                'http_path' => '/auth/roles
/auth/permissions
/auth/menu
/auth/logs',
                'id' => 5,
                'name' => 'Auth management',
                'slug' => 'auth.management',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'created_at' => '2019-09-04 13:23:13',
                'http_method' => NULL,
                'http_path' => '/helpers/*',
                'id' => 6,
                'name' => 'Admin helpers',
                'slug' => 'ext.helpers',
                'updated_at' => '2019-09-04 13:23:13',
            ),
            6 => 
            array (
                'created_at' => '2019-09-04 13:25:15',
                'http_method' => NULL,
                'http_path' => '/config*',
                'id' => 7,
                'name' => 'Admin Config',
                'slug' => 'ext.config',
                'updated_at' => '2019-09-04 13:25:15',
            ),
            7 => 
            array (
                'created_at' => '2019-09-04 13:26:26',
                'http_method' => NULL,
                'http_path' => '/api-tester*',
                'id' => 8,
                'name' => 'Api tester',
                'slug' => 'ext.api-tester',
                'updated_at' => '2019-09-04 13:26:26',
            ),
            8 => 
            array (
                'created_at' => '2019-09-04 13:26:36',
                'http_method' => NULL,
                'http_path' => '/media*',
                'id' => 9,
                'name' => 'Media manager',
                'slug' => 'ext.media-manager',
                'updated_at' => '2019-09-04 13:26:36',
            ),
            9 => 
            array (
                'created_at' => '2019-09-04 14:27:41',
                'http_method' => '',
                'http_path' => '/tacit*',
                'id' => 10,
                'name' => 'Tacit',
                'slug' => 'tacit',
                'updated_at' => '2019-09-04 15:05:09',
            ),
        ));
        
        
    }
}