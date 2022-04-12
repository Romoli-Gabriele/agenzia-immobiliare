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
        $proprietarioRole = config('roles.models.role')::where('name', '=', 'Proprietario')->first();
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
                'codicefiscale' => 'ascert12c32d432j',
                'email' => 'user@user.com',
                'password' => bcrypt('password'),
                'indirizzo' => 'via a caso 12 Dublino',
                'telefono' => '0124345560',
                'cellulare' => '3313456523',
                'iban' => null
            ]);

            $newUser->attachRole($clienteRole);
        }
        if (config('roles.models.defaultUser')::where('email', '=', 'proprietario@user.com')->first() === null) {
            $newUser = config('roles.models.defaultUser')::create([
                'name' => 'Proprietario',
                'codicefiscale' => 'ascert12c32d432j',
                'email' => 'proprietario@user.com',
                'password' => bcrypt('password'),
                'indirizzo' => 'via ricasoli 17 Roma',
                'telefono' => '0124765560',
                'cellulare' => '3313489523',
                'iban' => 'IT12K345678998'
            ]);

            $newUser->attachRole($proprietarioRole);
        }
    }
}
