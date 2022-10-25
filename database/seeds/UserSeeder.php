<?php

use App\User;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin1 = User::create([
            'name' => 'arnaf',
            'email' => 'arvinaufal@gmail.com',
            'password' => bcrypt('admin123')
        ]);

        $superadmin2 = User::create([
            'name' => 'pinan',
            'email'=> 'pinandita@gmail.com',
            'password' => bcrypt('admin123')
        ]);

        $superadmin1->assignRole('Super Admin');
        $superadmin2->assignRole('Super Admin');
    }
}
