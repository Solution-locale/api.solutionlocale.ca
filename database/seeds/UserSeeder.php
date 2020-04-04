<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Jean-Philippe Murray";
        $user->email = "jpm@solutionlocale.ca";
        $user->password = Hash::make('secret');
        $user->is_admin = true;
        $user->is_approved = true;
        $user->can_read = true;
        $user->save();
    }
}
