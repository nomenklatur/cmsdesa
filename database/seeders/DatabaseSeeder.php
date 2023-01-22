<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Article::factory(10)->create();

        DB::table('users')->insert([
            'name' => 'Awang Candra',
            'email' => 'adminpertama@desa.com',
            'password' => Hash::make('admin123')
        ]);

        DB::table('users')->insert([
            'name' => 'Arif',
            'email' => 'adminkedua@desa.com',
            'password' => Hash::make('admin123')
        ]);

        DB::table('users')->insert([
            'name' => 'Fatta Rizqina',
            'email' => 'adminketiga@desa.com',
            'password' => Hash::make('admin123')
        ]);
    }
}
