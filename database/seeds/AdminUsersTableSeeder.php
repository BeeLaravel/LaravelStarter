<?php
use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder {
    public function run() {
        

        \DB::table('admin_users')->delete();
        
        \DB::table('admin_users')->insert(array (
            0 => 
            array (
                'avatar' => NULL,
                'created_at' => '2019-09-04 13:19:26',
                'id' => 1,
                'name' => 'Administrator',
                'password' => '$2y$10$ceCXwG4lHGTQqUTjHCnqdOEaVvxjxdspabLH0cw2ZxZlTSPJqTHru',
                'remember_token' => 'sAFQ6X7ejHFOIyiNIYYV5MCSJblcrmxWQ97lZjttJ9IzVFrfls6P8pFSswbx',
                'updated_at' => '2019-09-04 13:19:26',
                'username' => 'admin',
            ),
            1 => 
            array (
                'avatar' => 'images/linus11.jpg',
                'created_at' => '2019-09-04 14:32:57',
                'id' => 2,
                'name' => 'BeeSoft',
                'password' => '$2y$10$AjY4e1oSFWeRupIFSupnxuFfQ2pXhgFKWIWYdSZ81XnwR26S36e4O',
                'remember_token' => NULL,
                'updated_at' => '2019-09-04 14:32:57',
                'username' => 'beesoft',
            ),
            2 => 
            array (
                'avatar' => 'images/linus21.jpg',
                'created_at' => '2019-09-04 14:33:59',
                'id' => 3,
                'name' => 'BeePHP',
                'password' => '$2y$10$SVdbdjkKuqikCX37b/Wcf.nRbAA.QcjI7R.HBbx2sRt0rCMkoXy1G',
                'remember_token' => '7kVuW7RA5GOMt2VC91pZk39kNayk9AEbevMAuZzJaR5pcAa0ndlGPGepHbS9',
                'updated_at' => '2019-09-04 14:33:59',
                'username' => 'beephp',
            ),
            3 => 
            array (
                'avatar' => 'images/logo02_100.png',
                'created_at' => '2019-09-04 14:34:31',
                'id' => 4,
                'name' => 'BeePy',
                'password' => '$2y$10$gcJbUg7xejk4V0vK.LFB4Oou.IAWezWlSssRsKhr4ey6pODg5LrU6',
                'remember_token' => NULL,
                'updated_at' => '2019-09-04 14:34:31',
                'username' => 'beepy',
            ),
        ));
        
        
    }
}