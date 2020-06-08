<?php

use Illuminate\Database\Seeder;
use App\Apartment;
use App\View;
use Faker\Generator as Faker;
Use Carbon\Carbon;
class ViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 2000; $i++) {
        $newView = new View;
        $newView->apartment_id = Apartment::inRandomOrder()->first()->id;
        $newView->ip_address = $faker->ipv4;
        $newView->created_at = Carbon::now()->subSeconds(rand(0, 7766000));
        $newView->save();
      }
    }
}
