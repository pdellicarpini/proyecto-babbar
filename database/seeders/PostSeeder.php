<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'title' => 'Cómo elegir la vela aromática perfecta para tu hogar',
                'preview' => 'Descubre los factores clave para seleccionar la vela aromática ideal que se adapte a tus gustos y necesidades.',
                'content' => 'Elegir la vela aromática perfecta para tu hogar puede transformar por completo el ambiente, creando una atmósfera acogedora y relajante. Para tomar la mejor decisión, es importante considerar varios factores. Primero, piensa en el aroma que deseas; las opciones van desde fragancias florales hasta cítricas o amaderadas. Luego, evalúa el tamaño de la vela, ya que esto influirá en su duración y en la intensidad del aroma. Además, ten en cuenta el diseño y el material del recipiente, ya que esto puede complementar la decoración de tu espacio. Finalmente, no olvides revisar las opiniones de otros usuarios para asegurarte de que estás adquiriendo un producto de calidad. Con estos consejos, podrás encontrar la vela aromática perfecta que se adapte a tu estilo y necesidades.',
                'image' => 'elegir_vela.jpg',
                'image_alt' => 'Velas aromáticas de colores variados',
                'featured' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Beneficios de las velas aromáticas para tu bienestar',
                'preview' => 'Explora cómo las velas aromáticas pueden mejorar tu bienestar físico y emocional.',
                'content' => 'Las velas aromáticas no solo aportan un agradable aroma a tu hogar, sino que también ofrecen numerosos beneficios para tu bienestar físico y emocional. El uso de ciertas fragancias, como la lavanda o el eucalipto, puede ayudar a reducir el estrés y promover la relajación. Además, encender una vela aromática durante una sesión de meditación o yoga puede mejorar la concentración y crear un ambiente propicio para la introspección. Las velas también pueden mejorar la calidad del sueño al crear un ambiente tranquilo antes de acostarse. En resumen, incorporar velas aromáticas en tu rutina diaria puede ser una excelente manera de cuidar tu salud mental y emocional.',
                'image' => 'beneficios_velas.jpg',
                'image_alt' => 'Sala de estar acogedora decorada con velas aromáticas',
                'featured' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
