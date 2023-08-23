<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(20)->create();

        User::create([
            'name'=>'asmuransyah',
            'email'=>'asmuransyah@mail.com',
            'email_verified_at'=>now(),
            'role'=>'admin',
            'phone' => '62809182736',
            'bio' => 'flutter dev',
            'password'=>Hash::make('123456789')
        ]);

        User::create([
            'name'=>'Super Admin',
            'email'=>'superadmin@mail.com',
            'email_verified_at'=>now(),
            'role'=>'superadmin',
            'phone' => '6280900988',
            'bio' => 'laravel dev',
            'password'=>Hash::make('123456789')
        ]);
    }
}
