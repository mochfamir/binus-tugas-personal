<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;


class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $avanza = new Car([
            'model_name' => 'Toyota Avanza',
            'transmission' => 'Manual',
            'production_year' => '2015',
            'image_url' => 'https://awsimages.detik.net.id/visual/2022/01/21/toyota-all-new-avanza-2015-tangkapan-layar_169.jpeg?w=650'
        ]);

        $xenia = new Car([
            'model_name' => 'Daihatsu Xenia',
            'transmission' => 'Manual',
            'production_year' => '2021',
            'image_url' => 'https://infomobilbekas.com/wp-content/uploads/2021/11/all-new-xenia-gen-tiga-2021-depan.jpg'
        ]);

        $cars = array($avanza, $xenia);

        foreach($cars as $car) {
            $car->save();
        }
    }
}