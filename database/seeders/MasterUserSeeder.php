<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class MasterUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'user_id' => "admin",
            'level' => 1,
            'created_by' => 'admin',
            'updated_by' => 'admin',
            'password' => bcrypt('admin')
        ],
        [
            'user_id' => "user",
            'level' => 2,
            'created_by' => 'admin',
            'updated_by' => 'admin',
            'password' => bcrypt('user')
        ]);
    }
}
