<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //isi table users dengan data awal masing masing 1 user untuk tiap role
        \App\Models\User::factory(500)->create([
            'role_id' => fn() => rand(1, 3)
        ]);


    }
}
