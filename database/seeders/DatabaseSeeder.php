<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $this->call(UsersTableSeeder::class);
        User::create([
            'name' => 'Sulton Daud Ul Mukarobin',
            'email' => 'admin@transisi.id',
            'password' => bcrypt('transisi'),

        ]);
    }
}
