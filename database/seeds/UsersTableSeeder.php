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
        \DB::table('users')->delete();

        \DB::table('users')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Shehan',
                'email' => 'info@solidwatersystems.com',
                'password' => bcrypt('sws123'),
                'created_at' => '2020-03-05 00:00:00',
                'updated_at' => '2020-03-05 00:00:00',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Shehan',
                'email' => 'viraj@solidwatersystems.com',
                'password' => bcrypt('sws123'),
                'created_at' => '2020-03-05 00:00:00',
                'updated_at' => '2020-03-05 00:00:00',
            ),

        ));
    }
}
