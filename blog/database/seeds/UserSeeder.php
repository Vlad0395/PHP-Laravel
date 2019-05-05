<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'admin'
            ],
            [
                'name' => 'user'
            ]
        ];
        $users = [
            [
                'name' => 'Vlad Tymoshenko',
                'email' => 'vlad@ukr.net',
                'password' => \Hash::make('12345678')
            ],
            [
                'name' => 'Rostik',
                'email' => 'ros@ukr.net',
                'password' => \Hash::make('12345678')
            ],
            [
                'name' => 'Illya',
                'email' => 'Illya@ukr.net',
                'password' => \Hash::make('12345678')
            ],
        ];

        foreach ($roles as $role) {
            if (!Role::where('name', '=', $role['name'])->first()) {
                Role::create([
                    'name' => $role['name'],
                ]);
            }
        }

        foreach ($users as $user) {
            if (!User::where('email', '=', $user['email'])->first()) {
                $a = User::create([
                    'name' => $user['name'],
                    'email' => $user['email'],
                    'password' => $user['password'],
                ]);
                $role = Role::where('name', '=', 'admin')->first();
                $a->roles()->sync($user['email'] == 'vlad@ukr.net' ? $role->id : $role->id + 1);
            }
        }
    }
}
