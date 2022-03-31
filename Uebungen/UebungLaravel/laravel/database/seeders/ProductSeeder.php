<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Kleine Schaufel',
            'description' => 'Kleine Schaufel optimal für kleinere Garten arbeiten zuhause',
            'price' => '10',
            'image' => 'https://c8.alamy.com/compde/j7d9h3/kleine-garten-schaufel-auf-einem-hintergrund-von-grunem-rasen-j7d9h3.jpg',
        ]);

        Product::create([
            'name' => 'Gummistiefel',
            'description' => 'Schwarze Gummistiefel mit Blumen Muster. Optimal für Gartenarbeiten gedacht',
            'price' => '29.95',
            'image' => 'https://www.gummistiefelprofi.de/img/gartenstiefel_2020_start_488x497.jpg',
        ]);

        Product::create([
            'name' => 'Blumentopf Rot',
            'description' => 'lumentopf Plastik Rot mit 10.5cm Durchmesser',
            'price' => '4.20',
            'image' => 'https://images.obi.de/product/AT/1500x1500/111242_1.jpg',
        ]);

        Product::create([
            'name' => 'Blumentopf Rund',
            'description' => 'Blumentopf aus glasierter Terrakotta mit Ablaufloch im Boden. Dazu ein passender Untersetzer, Durchmesser 18,6 cm. Höhe des Topfes 18,5 cm',
            'price' => '30',
            'image' => 'https://lp2.hm.com/hmgoepprod?set=quality%5B79%5D%2Csource%5B%2F54%2F6f%2F546fb1bf2ed1c82a05f36660c44f08f79aae4f8d.jpg%5D%2Corigin%5Bdam%5D%2Ccategory%5B%5D%2Ctype%5BDESCRIPTIVESTILLLIFE%5D%2Cres%5Bm%5D%2Chmver%5B2%5D&call=url[file:/product/main]',
        ]);

        Product::create([
            'name' => 'Giesskanne',
            'description' => 'Grüne 10l Giesskanne von FloraSelf',
            'price' => '55',
            'image' => 'https://cdn.hornbach.ch/data/shop/D04/001/780/494/560/61/DV_8_3150956_02_4c_DE_20190215091753.jpg',
        ]);
    }
}
