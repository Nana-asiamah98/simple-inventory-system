<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::truncate();

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'main']);
        Role::create(['name' => 'pri_user']);
    }
}
