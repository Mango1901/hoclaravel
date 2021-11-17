<?php

use Illuminate\Database\Seeder;
use App\Admin;
use App\Roles;
use Illuminate\Support\Facades\DB;
class AdminRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_roles')->insert([
           'id_admin_roles' => '1',
           'admin_admin_id' => '1',
            'roles_id_roles'=> 1
        ]);
        DB::table('admin_roles')->insert([
            'id_admin_roles' => '2',
            'admin_admin_id' => '2',
            'roles_id_roles'=> 2,
        ]);
        DB::table('admin_roles')->insert([
            'id_admin_roles' => '3',
            'admin_admin_id' => '3',
            'roles_id_roles'=> 3,
        ]);

    }
}
