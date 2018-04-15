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
        $user = factory(User::class, 1)->create([
            'username' => 'Encoder',
            'password' => Hash::make('password'),
        ]);
    }
}
