<?php

use Illuminate\Database\Seeder;
use App\Role;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'active' => true,
            'name' => 'admin',
            'display_name' => 'ADMINISTRADOR',
            'description' => 'Todos los permisos',
            'created_at' => new DateTime,
            'updated_at' => new DateTime]);

        Role::create([
            'active' => true,
            'name' => 'realizar',
            'display_name' => 'REALIZA',
            'description' => 'Realiza los tickets',
            'created_at' => new DateTime,
            'updated_at' => new DateTime]);

        Role::create([
            'active' => true,
            'name' => 'contestar',
            'display_name' => 'CONTESTA',
            'description' => 'Contesta los tickets',
            'created_at' => new DateTime,
            'updated_at' => new DateTime]);

        DB::table('role_user')->insert([
            'user_id' => 1,
            'role_id' => 1,
        ]);
    }
}
