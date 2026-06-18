<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Wax Melts de Limón',
                'price' => 3499,
                'description' => 'Pack de 10 bomboncitos aromáticos (wax melts) aroma a limón para utilizar en un hornillo. Cada bomboncito tiene una duración aproximada de 4 horas, brindando un aroma duradero y agradable en tu hogar.',
                'image' => 'wax_melts_limon.jpg',
                'secondary_image' => 'wax_melts_limon2.jpg',
                'stock' => 10,
                'category' => 'Velas',
                'scent' => 'Limón',
                'color' => 'Blanco',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Vela Aromática de Té Rojo',
                'price' => 7999,
                'description' => 'Vela aromática de té rojo, en forma de rosa y decorada con un lazo rosa, aportando un toque de elegancia a cualquier espacio. El aroma a té rojo crea un ambiente acogedor y tranquilo, perfecto para momentos de descanso y relajación en tu hogar.',
                'image' => 'vela_aromatica_rosa.jpg',
                'secondary_image' => 'vela_aromatica_rosa2.jpg',
                'stock' => 8,
                'category' => 'Velas',
                'scent' => 'Té Rojo',
                'color' => 'Blanco',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Vela Aromática de Jazmín',
                'price' => 7999,
                'description' => 'Vela aromática de jazmín para crear un ambiente relajante en tu hogar. En forma de flor, esta vela no solo aporta un aroma encantador, sino que también añade un toque decorativo a cualquier espacio.',
                'image' => 'vela_aromatica_flor.jpg',
                'secondary_image' => 'vela_aromatica_flor2.jpg',
                'stock' => 20,
                'category' => 'Velas',
                'scent' => 'Jazmín',
                'color' => 'Blanco',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Florero y Portavelas de Yeso Naranja',
                'price' => 11999,
                'description' => 'Florero y portavelas de yeso artesanal. Ideal para darle vida a cualquier espacio, este combo cuenta con un florero, un portavelas y una bandeja. Viene con flores sintéticas de regalo y con una vela aromática (el aroma y el tipo de flor está sujeto a stock).',
                'image' => 'florero_naranja.jpg',
                'secondary_image' => 'florero_naranja2.jpg',
                'stock' => 5,
                'category' => 'Yeso',
                'scent' => null,
                'color' => 'Naranja',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Florero y Portavelas de Yeso Rosa',
                'price' => 11999,
                'description' => 'Florero y portavelas de yeso artesanal. Ideal para darle vida a cualquier espacio, este combo cuenta con un florero, un portavelas y una bandeja. Viene con flores sintéticas de regalo y con una vela aromática (el aroma y el tipo de flor está sujeto a stock).',
                'image' => 'florero_rosa.jpg',
                'secondary_image' => 'florero_rosa2.jpg',
                'stock' => 6,
                'category' => 'Yeso',
                'scent' => null,
                'color' => 'Rosa',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
