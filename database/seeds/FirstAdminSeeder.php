<?php

use Illuminate\Database\Seeder;

class FirstAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'riley',
            'email'=> 'riley@outlook.com',
            'password' => bcrypt('123456789'),
            'avatar' => 'img/a8.jpg',
            'created_at' => \Carbon\Carbon::now(),
        ]);
    }
}
