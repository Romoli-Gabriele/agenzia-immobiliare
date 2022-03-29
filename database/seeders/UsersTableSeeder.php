<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clienteRole = config('roles.models.role')::where('name', '=', 'Cliente')->first();
        $adminRole = config('roles.models.role')::where('name', '=', 'Admin')->first();
        $permissions = config('roles.models.permission')::all();

        /*
         * Add Users
         *
         */
        if (config('roles.models.defaultUser')::where('email', '=', 'admin@admin.com')->first() === null) {
            $newUser = config('roles.models.defaultUser')::create([
                'name'     => 'Admin',
                'email'    => 'admin@admin.com',
                'codicefiscale' => 'rmlgrl04c11d612g',
                'indirizzo' => 'Via san giovanni 3 Firenze',
                'telefono' => '0552345678',
                'cellulare' => '3348762090',
                'iban' => null,
                'password' => bcrypt('password'),
            ]);

            $newUser->attachRole($adminRole);
            foreach ($permissions as $permission) {
                $newUser->attachPermission($permission);
            }
        }

        if (config('roles.models.defaultUser')::where('email', '=', 'user@user.com')->first() === null) {
            $newUser = config('roles.models.defaultUser')::create([
                'name' => 'Cliente',
                'codicefiscale',
                'email',
                'password',
                'indirizzo',
                'telefono',
                'cellulare',
                'iban'
            ]);

            $newUser->attachRole($clienteRole);
        }
    }
}
