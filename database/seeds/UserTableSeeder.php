<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'=>'Jorge',
            'email'=>'j.luis9327@gmail.com',
            'password'=>bcrypt('2835145'),
            'admin'=>true
        ]);
    }
}
