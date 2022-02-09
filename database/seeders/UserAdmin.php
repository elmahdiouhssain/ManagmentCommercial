<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::create([
            'name' => 'Ahmad ali', 
            'email' => 'admin@admin.com',
            'password' => bcrypt('passpass')
        ]);
    }
}
