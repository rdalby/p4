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
		# Array of author data to add
		$users = [
			['tester1', 'tester@gmail.com', 'pass123'],
			['tester2', 'tester2@gmail.com', 'pass1234']
		];
		$count = count($users);

		# Loop through each author, adding them to the database
		foreach ($users as $userData) {
			$user = new User();

			$user->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
			$user->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
			$user->name = $userData[0];
			$user->email = $userData[1];
			$user->email_verified_at =Carbon\Carbon::now()->subDays($count)->toDateTimeString();
			$user->password = $userData[2];


			$user->save();

			$count--;
		}


    }
}
