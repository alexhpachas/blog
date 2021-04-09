<?php

namespace Database\Seeders;

use App\Models\Categoria;

use App\Models\Tag;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

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
        Storage::deleteDirectory('posts');
        Storage::makeDirectory('posts');
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        Categoria::factory(11)->create();
        Tag::factory(15)->create();
        $this->call(PostSeeder::class);
        

        

    }
}
