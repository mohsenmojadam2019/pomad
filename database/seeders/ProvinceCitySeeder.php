<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Seeder;

class ProvinceCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'province_cities.json');

        $jsonData = json_decode($data, true);

        foreach ($jsonData as $key => $value) {

            $province = new Province();
            $province->name = $value['name'];

            $province->save();
            foreach ($value['cities'] as $cityName) {

                $city = new City();
                $city->name = $cityName;
                $city->province_id = $province->id;
                $city->save();

            }

        }

        //loop and insert


    }
}
