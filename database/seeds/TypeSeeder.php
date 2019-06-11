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
            'description' => 'Falla critica',
            'created_at' => new DateTime,
            'updated_at' => new DateTime]);

        Type::create([
            'name' => 'NOTIFICATION',
            'display_name' => 'NOTIFICACION',
            'description' => 'Falla no critica',
            'created_at' => new DateTime,
            'updated_at' => new DateTime]);
    }
}
