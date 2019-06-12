<?php

use Illuminate\Database\Seeder;
use App\Models\Catalogs\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'active' => true,
            'name' => 'PENDING',
            'display_name' => 'PENDIENTE',
            'description' => 'Sin procesar',
            'created_at' => new DateTime,
            'updated_at' => new DateTime]);

        Status::create([
            'active' => true,
            'name' => 'SUSPENDED',
            'display_name' => 'SUSPENDIDO',
            'description' => 'Aun no se resuleve pero no afecta el tiempo transcurrido',
            'created_at' => new DateTime,
            'updated_at' => new DateTime]);

        Status::create([
            'active' => true,
            'name' => 'FAILED',
            'display_name' => 'FALLIDO',
            'description' => 'Sin solucion',
            'created_at' => new DateTime,
            'updated_at' => new DateTime]);

        Status::create([
            'active' => true,
            'name' => 'SUCCESSFUL',
            'display_name' => 'EXITOSO',
            'description' => 'Se completo correctamente y se recibio respuesta',
            'created_at' => new DateTime,
            'updated_at' => new DateTime]);

        Status::create([
            'active' => true,
            'name' => 'CLOSED',
            'display_name' => 'CERRADO',
            'description' => 'Se cerro sin confirmacion de exitoso',
            'created_at' => new DateTime,
            'updated_at' => new DateTime]);
    }
}
