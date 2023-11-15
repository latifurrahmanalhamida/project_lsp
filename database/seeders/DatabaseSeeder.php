<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'M Latifur',
            'email' => 'rahmanalhamida@gmail.com',
            'password' => bcrypt('latifur21'),
            'prodi' => 'D3-MI PSDKU Kediri',
            'nim' => '2131730075',
            'tgl' => '2023-11-14', 
        ]);
    }
}
