<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(roles::class);
		//$this->call(users::class);
		$this->call(role_users::class);
    }
}
