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
        // $this->call(UsersTableSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(SystemSeeder::class);
        $this->call(PrioritySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
    }
}
