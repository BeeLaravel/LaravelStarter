<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(TacitQuestionsTableSeeder::class);
        $this->call(TacitTestsTableSeeder::class);
        $this->call(TacitTestQuestionTableSeeder::class);
        $this->call(CommonFrasesTableSeeder::class);
        $this->call(AdminPermissionsTableSeeder::class);
        $this->call(AdminRolesTableSeeder::class);
        $this->call(AdminUsersTableSeeder::class);
        $this->call(AdminRoleUsersTableSeeder::class);
        $this->call(AdminRolePermissionsTableSeeder::class);
        $this->call(AdminMenuTableSeeder::class);
        $this->call(AdminRoleMenuTableSeeder::class);
        $this->call(MiniProgramsTableSeeder::class);
        $this->call(MiniUsersTableSeeder::class);
    }
}
