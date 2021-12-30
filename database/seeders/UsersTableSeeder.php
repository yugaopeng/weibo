<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::factory()->count(50)->create();

        $user = User::find(1);
        $user->name = '于高鹏';
        $user->email = '18516272648@163.com';
        $user->is_admin = true;
        $user->save();
    }
}
