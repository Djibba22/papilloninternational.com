<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Default Seeder
        //$this->call(UsersTableSeeder::class);
        // Role comes before User seeder here.
        $this->call(RoleTableSeeder::class);
        // Call the roles seeder.
        $this->call(UserTableSeeder::class);
    }
}
