<?php


use App\Models\Ticket;
use Faker\Generator as Faker;



    $factory->define(Ticket::class,function (Faker $faker){

        return[

            'title'=>$faker->sentence,
            'description'=>$faker->paragraph,
            'status'=>$faker->word,


        ];






    });



