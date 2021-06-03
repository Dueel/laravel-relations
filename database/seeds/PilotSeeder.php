<?php

use Illuminate\Database\Seeder;

use App\Pilot;
use App\Car;

class PilotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(Pilot::class, 60) -> create();

        // factory(Pilot::class, 60) -> create() -> each(function($pilot){
        //     $car = Car::inRandomOrder() -> limit(2) -> get();
        //     $pilot -> cars() -> attach($car);
        //     $pilot -> save();
        // });

    }
}
