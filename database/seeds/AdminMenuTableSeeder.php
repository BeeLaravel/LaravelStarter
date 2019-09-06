<?php
use Illuminate\Database\Seeder;

class AdminMenuTableSeeder extends Seeder {
    public function run() {
        

        \DB::table('admin_menu')->delete();
        
        \DB::table('admin_menu')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'icon' => 'fa-bar-chart',
                'id' => 1,
                'order' => 1,
                'parent_id' => 0,
                'permission' => NULL,
                'title' => 'Dashboard',
                'updated_at' => NULL,
                'uri' => '/',
            ),
            1 => 
            array (
                'created_at' => NULL,
                'icon' => 'fa-tasks',
                'id' => 2,
                'order' => 2,
                'parent_id' => 0,
                'permission' => NULL,
                'title' => 'Admin',
                'updated_at' => NULL,
                'uri' => '',
            ),
            2 => 
            array (
                'created_at' => NULL,
                'icon' => 'fa-users',
                'id' => 3,
                'order' => 3,
                'parent_id' => 2,
                'permission' => NULL,
                'title' => 'Users',
                'updated_at' => NULL,
                'uri' => 'auth/users',
            ),
            3 => 
            array (
                'created_at' => NULL,
                'icon' => 'fa-user',
                'id' => 4,
                'order' => 4,
                'parent_id' => 2,
                'permission' => NULL,
                'title' => 'Roles',
                'updated_at' => NULL,
                'uri' => 'auth/roles',
            ),
            4 => 
            array (
                'created_at' => NULL,
                'icon' => 'fa-ban',
                'id' => 5,
                'order' => 5,
                'parent_id' => 2,
                'permission' => NULL,
                'title' => 'Permission',
                'updated_at' => NULL,
                'uri' => 'auth/permissions',
            ),
            5 => 
            array (
                'created_at' => NULL,
                'icon' => 'fa-bars',
                'id' => 6,
                'order' => 6,
                'parent_id' => 2,
                'permission' => NULL,
                'title' => 'Menu',
                'updated_at' => NULL,
                'uri' => 'auth/menu',
            ),
            6 => 
            array (
                'created_at' => NULL,
                'icon' => 'fa-history',
                'id' => 7,
                'order' => 7,
                'parent_id' => 2,
                'permission' => NULL,
                'title' => 'Operation log',
                'updated_at' => NULL,
                'uri' => 'auth/logs',
            ),
            7 => 
            array (
                'created_at' => '2019-09-04 13:23:13',
                'icon' => 'fa-gears',
                'id' => 8,
                'order' => 8,
                'parent_id' => 0,
                'permission' => NULL,
                'title' => 'Helpers',
                'updated_at' => '2019-09-04 15:33:27',
                'uri' => NULL,
            ),
            8 => 
            array (
                'created_at' => '2019-09-04 13:23:13',
                'icon' => 'fa-keyboard-o',
                'id' => 9,
                'order' => 9,
                'parent_id' => 8,
                'permission' => NULL,
                'title' => 'Scaffold',
                'updated_at' => '2019-09-04 13:28:58',
                'uri' => 'helpers/scaffold',
            ),
            9 => 
            array (
                'created_at' => '2019-09-04 13:23:13',
                'icon' => 'fa-database',
                'id' => 10,
                'order' => 10,
                'parent_id' => 8,
                'permission' => NULL,
                'title' => 'Database terminal',
                'updated_at' => '2019-09-04 13:28:58',
                'uri' => 'helpers/terminal/database',
            ),
            10 => 
            array (
                'created_at' => '2019-09-04 13:23:13',
                'icon' => 'fa-terminal',
                'id' => 11,
                'order' => 11,
                'parent_id' => 8,
                'permission' => NULL,
                'title' => 'Laravel artisan',
                'updated_at' => '2019-09-04 13:28:58',
                'uri' => 'helpers/terminal/artisan',
            ),
            11 => 
            array (
                'created_at' => '2019-09-04 13:23:13',
                'icon' => 'fa-list-alt',
                'id' => 12,
                'order' => 12,
                'parent_id' => 8,
                'permission' => NULL,
                'title' => 'Routes',
                'updated_at' => '2019-09-04 13:28:58',
                'uri' => 'helpers/routes',
            ),
            12 => 
            array (
                'created_at' => '2019-09-04 13:25:15',
                'icon' => 'fa-toggle-on',
                'id' => 13,
                'order' => 14,
                'parent_id' => 0,
                'permission' => NULL,
                'title' => 'Config',
                'updated_at' => '2019-09-04 13:28:58',
                'uri' => 'config',
            ),
            13 => 
            array (
                'created_at' => '2019-09-04 13:26:26',
                'icon' => 'fa-sliders',
                'id' => 14,
                'order' => 13,
                'parent_id' => 0,
                'permission' => NULL,
                'title' => 'Api tester',
                'updated_at' => '2019-09-04 13:26:26',
                'uri' => 'api-tester',
            ),
            14 => 
            array (
                'created_at' => '2019-09-04 13:26:35',
                'icon' => 'fa-file',
                'id' => 15,
                'order' => 16,
                'parent_id' => 0,
                'permission' => NULL,
                'title' => 'Media manager',
                'updated_at' => '2019-09-04 13:28:58',
                'uri' => 'media',
            ),
            15 => 
            array (
                'created_at' => '2019-09-04 13:26:43',
                'icon' => 'fa-file',
                'id' => 16,
                'order' => 15,
                'parent_id' => 0,
                'permission' => NULL,
                'title' => 'FileManager',
                'updated_at' => '2019-09-04 13:26:43',
                'uri' => 'file-manager',
            ),
            16 => 
            array (
                'created_at' => '2019-09-04 13:41:09',
                'icon' => 'fa-apple',
                'id' => 17,
                'order' => 18,
                'parent_id' => 18,
                'permission' => NULL,
                'title' => 'Questions',
                'updated_at' => '2019-09-05 08:24:33',
                'uri' => 'tacit/questions',
            ),
            17 => 
            array (
                'created_at' => '2019-09-05 08:23:29',
                'icon' => 'fa-anchor',
                'id' => 18,
                'order' => 17,
                'parent_id' => 0,
                'permission' => NULL,
                'title' => 'Tacit',
                'updated_at' => '2019-09-05 08:23:51',
                'uri' => NULL,
            ),
            18 => 
            array (
                'created_at' => '2019-09-05 08:25:17',
                'icon' => 'fa-amazon',
                'id' => 19,
                'order' => 0,
                'parent_id' => 18,
                'permission' => NULL,
                'title' => 'Tests',
                'updated_at' => '2019-09-05 08:25:17',
                'uri' => 'tacit/tests',
            ),
            19 => 
            array (
                'created_at' => '2019-09-05 08:26:13',
                'icon' => 'fa-balance-scale',
                'id' => 20,
                'order' => 0,
                'parent_id' => 0,
                'permission' => NULL,
                'title' => 'Categories',
                'updated_at' => '2019-09-05 08:26:13',
                'uri' => NULL,
            ),
            20 => 
            array (
                'created_at' => '2019-09-05 08:26:59',
                'icon' => 'fa-bitbucket-square',
                'id' => 21,
                'order' => 0,
                'parent_id' => 20,
                'permission' => NULL,
                'title' => 'Frases',
                'updated_at' => '2019-09-05 08:26:59',
                'uri' => 'common/frases',
            ),
        ));
        
        
    }
}