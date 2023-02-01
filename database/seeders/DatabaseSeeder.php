<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->has(\App\Models\Comunidad::factory(1))->has(\App\Models\Post::factory(1)->has(\App\Models\Comentario::factory(1)))->create();

        $this->call([
           ComunidadSeeder::class,
        ]);
    }
}
