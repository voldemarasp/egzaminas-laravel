<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create( [
    		'name' => 'Best',
    		'email' => 'best@admin.com',
    		'password' => bcrypt('admin'),
    		'role' => 'admin',
    		'disabled' => 0
    	] );

    }
}
