<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            'name'     => 'Berani Sehat Admin',
            'email'    => 'admin@beranisehat.com',
            'password' => bcrypt('pantangberhenti'),
            'is_admin' => true
        ]);
    }
}
