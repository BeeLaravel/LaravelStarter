<?php
use Illuminate\Database\Seeder;

class MiniUsersTableSeeder extends Seeder {
    public function run() {
        \DB::table('mini_users')->delete();
        
        \DB::table('mini_users')->insert(array (
            0 => 
            array (
                'avatarUrl' => 'https://wx.qlogo.cn/mmopen/vi_32/B5iaSvk1Je4N8U1tmX5iaBgw4ahUpejUZwKedAdTvM8x4x0bYia2zoGMUN8ZWr2dfVibR10S6Fiauib5FMaNXnkLo0rg/132',
                'city' => 'San Jose',
                'country' => 'United States',
                'created_at' => '2019-09-10 07:24:45',
                'gender' => 1,
                'id' => 1,
                'language' => 'zh_CN',
                'nickName' => '井梧故园秋',
                'openid' => 'oqnDv0Ih5gLH9uOnSDw6lOKiO-UE',
                'province' => 'California',
                'session_key' => '2Zy0JhDDShjjrVlLP/XXjQ==',
                'updated_at' => '2019-09-10 07:24:48',
            ),
            1 => 
            array (
                'avatarUrl' => 'https://wx.qlogo.cn/mmopen/vi_32/B5iaSvk1Je4N8U1tmX5iaBgw4ahUpejUZwKedAdTvM8x4x0bYia2zoGMUN8ZWr2dfVibR10S6Fiauib5FMaNXnkLo0rg/132',
                'city' => 'San Jose',
                'country' => 'United States',
                'created_at' => '2019-09-10 07:24:45',
                'gender' => 1,
                'id' => 2,
                'language' => 'zh_CN',
                'nickName' => '井梧故园秋',
                'openid' => 'oqnDv0Ih5gLH9uOnSDw6lOKiO-UF',
                'province' => 'California',
                'session_key' => '2Zy0JhDDShjjrVlLP/XXjQ==',
                'updated_at' => '2019-09-10 07:24:48',
            ),
            2 => 
            array (
                'avatarUrl' => 'https://wx.qlogo.cn/mmopen/vi_32/B5iaSvk1Je4N8U1tmX5iaBgw4ahUpejUZwKedAdTvM8x4x0bYia2zoGMUN8ZWr2dfVibR10S6Fiauib5FMaNXnkLo0rg/132',
                'city' => 'San Jose',
                'country' => 'United States',
                'created_at' => '2019-09-10 07:24:45',
                'gender' => 1,
                'id' => 3,
                'language' => 'zh_CN',
                'nickName' => '井梧故园秋',
                'openid' => 'oqnDv0Ih5gLH9uOnSDw6lOKiO-UG',
                'province' => 'California',
                'session_key' => '2Zy0JhDDShjjrVlLP/XXjQ==',
                'updated_at' => '2019-09-10 07:24:48',
            ),
            3 => 
            array (
                'avatarUrl' => 'https://wx.qlogo.cn/mmopen/vi_32/B5iaSvk1Je4N8U1tmX5iaBgw4ahUpejUZwKedAdTvM8x4x0bYia2zoGMUN8ZWr2dfVibR10S6Fiauib5FMaNXnkLo0rg/132',
                'city' => 'San Jose',
                'country' => 'United States',
                'created_at' => '2019-09-10 07:24:45',
                'gender' => 1,
                'id' => 4,
                'language' => 'zh_CN',
                'nickName' => '井梧故园秋',
                'openid' => 'oqnDv0Ih5gLH9uOnSDw6lOKiO-UH',
                'province' => 'California',
                'session_key' => '2Zy0JhDDShjjrVlLP/XXjQ==',
                'updated_at' => '2019-09-10 07:24:48',
            ),
        ));
    }
}