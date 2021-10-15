<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'admin';
        $role->save();

        $role=new Role();
        $role->name = 'employer';
        $role->save();

        $role=new Role();
        $role->name = 'company';
        $role->save();

        $role = new Role();
        $role->name = 'user';
        $role->save();
    }
}
