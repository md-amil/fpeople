<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
            'name' => 'Khushnabi',
            'email' => 'pkhushnabi@gmail.com',
            'password' => bcrypt('Apple')
        ]);
        User::create([
            'name' => 'Amil',
            'email' => 'amil@gmail.com',
            'password' => bcrypt('password')
        ]);
        factory(App\User::class, 100)->create();
    }
}
