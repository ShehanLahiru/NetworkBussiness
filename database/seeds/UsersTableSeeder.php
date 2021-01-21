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
                'name' => 'Remote Promotions',
                'username' => 'RemotePromotion',
                'is_admin' => '1',
                'email' => 'remotepromotion@gmail.com',
                'password' => bcrypt('rm123'),
                'created_at' => '2020-03-05 00:00:00',
                'updated_at' => '2020-03-05 00:00:00',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Shehan',
                'username' => 'Shehan',
                'is_admin' => '0',
                'email' => 's.lahiru@gmail.com',
                'password' => bcrypt('shehan'),
                'created_at' => '2020-03-05 00:00:00',
                'updated_at' => '2020-03-05 00:00:00',
            ),

        ));
    }
}
