<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'Super Admin']);
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Accountant']);
        Role::create(['name' => 'Consultant']);
        Role::create(['name' => 'Sub Consultant']);
        Role::create(['name' => 'User']);
    }
}
