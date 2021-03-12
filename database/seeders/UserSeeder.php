<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([ 
            'name' => 'Admin',
            'email' =>  'xamapan_admin@gmail.com',
            'password' => bcrypt('admin_xamapan')
        ]);

        User::factory(2)->create();
    }
}
