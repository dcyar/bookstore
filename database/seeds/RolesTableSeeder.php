<?php

use App\Entities\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
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
                'name' => 'Admin'
            ],
            [
                'name' => 'User'
            ]
        ];

        foreach ($roles as $role) {
            Role::create([
                'name' => $role['name']
            ]);
        }
    }
}
