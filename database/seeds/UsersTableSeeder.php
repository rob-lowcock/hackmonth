<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => 'Dum-E',
            'nickname' => 'dummy',
            'email' => 'dummy@hackmonth.org',
            'image' => 'https://static.tvtropes.org/pmwiki/pub/images/dum_e.jpg',
            'provider' => 'github',
            'provider_id' => 1,
            'github_token' => 'lol',
        ]);
    }
}
