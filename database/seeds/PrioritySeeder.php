<?php

use Illuminate\Database\Seeder;
use App\Models\Catalogs\Priority;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Priority::create([
            'name' => 'LOW',
            'display_name' => 'BAJA',
            'description' => 'Prioridad baja puede esperar',
            'created_at' => new DateTime,
            'updated_at' => new DateTime]);

        Priority::create([
            'name' => 'NORMAL',
            'display_name' => 'NORMAL',
            'description' => 'Prioridad normal puede esperar',
            'created_at' => new DateTime,
            'updated_at' => new DateTime]);

        Priority::create([
            'name' => 'HIGH',
            'display_name' => 'ALTA',
            'description' => 'Prioridad alta',
            'created_at' => new DateTime,
            'updated_at' => new DateTime]);

        Priority::create([
            'name' => 'URGENT',
            'display_name' => 'URGENTE',
            'description' => 'Prioridad urgente',
            'created_at' => new DateTime,
            'updated_at' => new DateTime]);
    }
}
