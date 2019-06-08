<?php

use Illuminate\Database\Seeder;
use App\Models\System;

class SystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        System::create([
            'name' => 'TAXI',
            'display_name' => 'TAXI',
            'description' => 'Sistema 1',
            'created_at' => new DateTime,
            'updated_at' => new DateTime]);

        System::create([
            'name' => 'REVISTA',
            'display_name' => 'REVISTA',
            'description' => 'Sistema 2',
            'created_at' => new DateTime,
            'updated_at' => new DateTime]);

        System::create([
            'name' => 'DOCUMENTAL',
            'display_name' => 'DOCUMENTAL',
            'description' => 'Sistema 3',
            'created_at' => new DateTime,
            'updated_at' => new DateTime]);
    }
}
