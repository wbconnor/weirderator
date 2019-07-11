<?php

use Illuminate\Database\Seeder;

class ThingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('things')->delete();

        $things = array(
          array(
            'title' => 'Washing brand new socks before you wear them',
            'user_id' => 1
          ),
          array(
            'title' => 'Mustard on Fritos',
            'user_id' => 1
          ),
          array(
            'title' => 'Getting naked before you poop',
            'user_id' => 1
          ),
        );

        foreach($things as &$thing) {
          $thing['created_at'] = Carbon\Carbon::now();
          $thing['updated_at'] = Carbon\Carbon::now();
        }
        DB::table('things')->insert($things);
    }
}
