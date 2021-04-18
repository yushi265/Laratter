<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'testUser1',
            'email' => 'testUser@test.com',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'testUser2',
            'email' => 'testUser2@test.com',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('articles')->insert([
            'user_id' => 1,
            'body' => 'テストですよー',
            'created_at' => '2021-04-18 00:00:00',
            'updated_at' => '2021-04-18 00:00:00',
        ]);

        DB::table('articles')->insert([
            'user_id' => 1,
            'body' => 'テストですよー2',
            'created_at' => '2021-04-18 00:00:00',
            'updated_at' => '2021-04-18 00:00:00',
        ]);

        DB::table('articles')->insert([
            'user_id' => 2,
            'body' => 'テストですよー',
            'created_at' => '2021-04-18 00:00:00',
            'updated_at' => '2021-04-18 00:00:00',
        ]);

        DB::table('articles')->insert([
            'user_id' => 2,
            'body' => 'テストですよー2',
            'created_at' => '2021-04-18 00:00:00',
            'updated_at' => '2021-04-18 00:00:00',
        ]);
    }
}
