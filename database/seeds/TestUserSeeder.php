<?php

use Illuminate\Database\Seeder;

class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'riley',
            'email'=> 'rileycubbon@outlook.com',
            'password' => bcrypt('12356789'),
            'avatar' => 'http://riley.dev/img/a8.jpg',
            'created_at' => \Carbon\Carbon::now(),
        ]);
    }
}
