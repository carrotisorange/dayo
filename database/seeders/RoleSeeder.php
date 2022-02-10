<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role' => 'player'
        ]);

        DB::table('roles')->insert([
            'role' => 'provider'
        ]);
    }
}
