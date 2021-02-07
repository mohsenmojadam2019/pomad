<?php

namespace Database\Seeders;

use App\Models\Channel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Channel::create([
           'name'=>'laravel 8.8',
           'slug'=>str::slug('laravel 8.8'),
       ]) ;

        Channel::create([
            'name'=>'vue js',
            'slug'=>str::slug('vue js'),
        ]) ;

        Channel::create([
            'name'=>'angular js',
            'slug'=>str::slug('angular js'),
        ]) ;






    }
}
