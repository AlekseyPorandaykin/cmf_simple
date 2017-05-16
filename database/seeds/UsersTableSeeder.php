<?php

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
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.ru',
            'password' => bcrypt('123456'),
            'remember_token' => 'fNRsTFM8QcTTvTA4Jio3bOnTqp5FllWafiBSL8SHU9ej8MSW3Lqyk4juAsji',
            'created_at' => '2017-05-14 18:10:19',
            'updated_at' => '2017-05-14 18:10:19',
        ]);
    }
}
