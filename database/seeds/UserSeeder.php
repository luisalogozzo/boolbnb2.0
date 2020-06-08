<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $newUser = new User;
      $newUser->name = 'Andrea';
      $newUser->surname = 'Pacifico';
      $newUser->email = 'andrea.pacifico@gmail.com';
      $newUser->password = Hash::make('password');
      $newUser->date_of_birth = '1984-06-19';
      $newUser->img_profile = '';
      $newUser->save();
      $newUser = new User;
      $newUser->name = 'Luisa';
      $newUser->surname = 'Logozzo';
      $newUser->email = 'luisa.logozzo@gmail.com';
      $newUser->password = Hash::make('password');
      $newUser->date_of_birth = '1995-01-08';
      $newUser->img_profile = '';
      $newUser->save();
    }
}
