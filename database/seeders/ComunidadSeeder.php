<?php

namespace Database\Seeders;

use App\Models\Comunidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComunidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comunidad = new Comunidad();
        $comunidad->nombre = 'VillaCrypto';

        $comunidad->save();
    }
}
