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
        DB::table('users')->delete();

        $users = array(
          array(
            'name' => "User1",
            'email' => "user1@example.com",
            'password' => bcrypt('password')
          ),
          array(
            'name' => "User2",
            'email' => "user2@example.com",
            'password' => bcrypt('password')
          ),
          array(
            'name' => "User3",
            'email' => "user3@example.com",
            'password' => bcrypt('password')
          ),
        );

        foreach($users as &$user) {
          $user['created_at'] = Carbon\Carbon::now();
          $user['updated_at'] = Carbon\Carbon::now();
        }
        DB::table('users')->insert($users);
    }
}
