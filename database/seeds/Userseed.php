<?php

use Illuminate\Database\Seeder;

class Userseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \app\User::create([
            'name' => "zhu",
            'email' => "1231@qq.com",
            'password' =>bcrypt("keng");
        ]);
    }
}
