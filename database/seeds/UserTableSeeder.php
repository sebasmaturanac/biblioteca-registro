<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Bican\Roles\Models\Role;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

/*$adminRole = Role::create([
	'name' => 'Sistema',
	'slug' => 'sys',
	'description' => 'Capo del Systema', // optional
	'level' => 1, // optional, set to 1 by default
]);

 Role::create([
	'name' => 'Admin',
	'slug' => 'admin',
	'description' => 'Administrador del sistema', // optional
	'level' => 2, // optional, set to 1 by default
]);
Role::create([
	'name' => 'Staff',
	'slug' => 'staff',
	'description' => 'Capo del Systema', // optional
	'level' => 3, // optional, set to 1 by default
]);*/
$user =  \app\User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('qwerty'),
            'username' => 'admin'
        ]);

/*$user -> attachRole($adminRole);*/
 
    }

    
}
