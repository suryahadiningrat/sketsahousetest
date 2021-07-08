<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $master = App\User::create([
            'name' => 'Admin',
            'email' => 'admin@sketsahouse.com',
            'password' => bcrypt('admin123')
        ]);
    }
}
