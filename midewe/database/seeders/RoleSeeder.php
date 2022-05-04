<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role;
        $role->name = 'Admin';
        $role->created_at = date('Y-m-d H:i:s');
        $role->updated_at  = date('Y-m-d H:i:s');
        $role->save();

        $role = new Role;
        $role->name = 'User';
        $role->created_at = date('Y-m-d H:i:s');
        $role->updated_at  = date('Y-m-d H:i:s');
        $role->save();

        $role = new Role;
        $role->name = 'Customer';
        $role->created_at = date('Y-m-d H:i:s');
        $role->updated_at  = date('Y-m-d H:i:s');
        $role->save();
    }
}
