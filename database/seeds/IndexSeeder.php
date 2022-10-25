<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class IndexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $superAdmin = Role::create([
            'name' => 'Super Admin',
        ]);

        $admin = Role::create([
            'name' => 'Admin',
        ]);

        $user = Role::create([
            'name' => 'User',
        ]);

        $permission = Permission::create([
            'name' => 'see_product',
        ]);

        $admin->givePermissionTo($permission);
        $user->givePermissionTo($permission);

        $permission = Permission::create([
            'name' => 'create_product',
        ]);

        $admin->givePermissionTo($permission);

        $permission = Permission::create([
            'name' => 'edit_product',
        ]);

        $admin->givePermissionTo($permission);

        $permission = Permission::create([
            'name' => 'delete_product',
        ]);

        $admin->givePermissionTo($permission);

        $data   = [
            'name'      => 'supra',
            'email'     => 'supra@mail.com',
            'password'  => Hash::make('12345678')
        ];

        $user = User::create($data);

        $user->syncRoles('Super Admin');

        $data   = [
            'name'      => $faker->name,
            'email'     => 'admin@mail.com',
            'password'  => Hash::make('12345678')
        ];

        $user = User::create($data);

        $user->syncRoles('Admin');

        $data   = [
            'name'      => $faker->name,
            'email'     => 'user@mail.com',
            'password'  => Hash::make('12345678')
        ];

        $userData = User::create($data);

        $userData->syncRoles('User');
    }
}
