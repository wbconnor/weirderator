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
            'title' => 'Washing socks before you wear them',
            'weird_votes' => 9,
            'total_votes' => 10,
            'weird_score' => .9
          ),
          array(
            'title' => 'Mustard on Fritos',
            'weird_votes' => 9,
            'total_votes' => 10,
            'weird_score' => .9
          ),
          array(
            'title' => 'Getting naked before you poop',
            'weird_votes' => 9,
            'total_votes' => 10,
            'weird_score' => .9
          ),
        );

        foreach($things as &$wheel) {
          $wheel['created_at'] = Carbon\Carbon::now();
          $wheel['updated_at'] = Carbon\Carbon::now();
        }
        DB::table('things')->insert($things);
    }
}
