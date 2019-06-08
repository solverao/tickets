<?php

use Illuminate\Database\Seeder;
use App\Models\Catalogs\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'name' => 'FAIL',
            'display_name' => 'FALLA',
            'description' => 'Falla o problemas de funcionamiento',
            'created_at' => new DateTime,
            'updated_at' => new DateTime]);

        Type::create([
            'name' => 'REQUIREMENT',
            'display_name' => 'REQUERIMENTO',
            'description' => 'Requerimento adicinal a lo que ya existe',
            'created_at' => new DateTime,
            'updated_at' => new DateTime]);

        Type::create([
            'name' => 'UPGRADE',
            'display_name' => 'ACTUALIZACION',
            'description' => 'Mejora de lo que ya existe',
            'created_at' => new DateTime,
            'updated_at' => new DateTime]);
    }
}
