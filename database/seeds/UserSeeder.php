<?php

use Illuminate\Database\Seeder;
use App\Models\Auth\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
			'name' => 'Ivan Chernikov',
			'password' => bcrypt('werewolf'),
			'email' => 'ivan.chernikov25@gmail.com',
		]);
    }
}
