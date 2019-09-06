<?php
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
    public function run() {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'created_at' => '2019-09-05 01:52:19',
                'email' => 'beesoft@gmail.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'name' => 'admin',
                'password' => '$2y$10$7kE6LNjnc04IJrOn0InK7OACn.0sd5JBPLWADF67bJVchvjaJGEDK',
                'remember_token' => NULL,
                'updated_at' => '2019-09-05 01:52:19',
            ),
            1 => 
            array (
                'created_at' => '2019-09-05 01:52:45',
                'email' => 'beherochuling@163.com',
                'email_verified_at' => NULL,
                'id' => 2,
                'name' => 'beesoft',
                'password' => '$2y$10$LQ2hfgegP/Tn7d6THX5pbOLCPAcpe7seCcbXwDUY8so98c4eqyosW',
                'remember_token' => NULL,
                'updated_at' => '2019-09-05 01:52:45',
            ),
            2 => 
            array (
                'created_at' => '2019-09-05 01:53:15',
                'email' => 'beherochuling@sina.com',
                'email_verified_at' => NULL,
                'id' => 3,
                'name' => 'beephp',
                'password' => '$2y$10$ZeHWp7yYAX1eFn/26eywHOP5pXm1hxcXPGQ7X9tft4ZTbrzBpkroa',
                'remember_token' => NULL,
                'updated_at' => '2019-09-05 01:53:15',
            ),
            3 => 
            array (
                'created_at' => '2019-09-05 01:53:42',
                'email' => 'beherochuling@sohu.com',
                'email_verified_at' => NULL,
                'id' => 4,
                'name' => 'beepy',
                'password' => '$2y$10$VwlioHjQkZ5dQuyHhixHAeFxH0/ri5KsLTyOnBYdxxWXvViL2H/um',
                'remember_token' => NULL,
                'updated_at' => '2019-09-05 01:53:42',
            ),
        ));
        
        
    }
}