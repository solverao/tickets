<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'active' => true,
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('123456'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime]);
    }
}
