<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id'=>2,
            'active'=>1,
            'name'=>'num2',
            'username'=>'num2',
            'email'=>'yasnum2@gmail.com',
            'password'=>bcrypt('num.num'),
            'remember_token'=> str_random(10),
        ]);
    }
}
