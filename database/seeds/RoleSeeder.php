<?php

use Illuminate\Database\Seeder;
use App\Role;

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
            'name' => 'admin',
            'display_name' => 'ADMINISTRADOR',
            'description' => 'Todos los permisos',
            'created_at' => new DateTime,
            'updated_at' => new DateTime]);

        Role::create([
            'name' => 'realizar',
            'display_name' => 'REALIZA',
            'description' => 'Realiza los tickets',
            'created_at' => new DateTime,
            'updated_at' => new DateTime]);

        Role::create([
            'name' => 'contestar',
            'display_name' => 'CONTESTA',
            'description' => 'Contesta los tickets',
            'created_at' => new DateTime,
            'updated_at' => new DateTime]);
    }
}
