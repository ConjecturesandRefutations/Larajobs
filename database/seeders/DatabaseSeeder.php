<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(10)->create();

         Listing::create([
            'title' => 'CEO',
            'tags' => 'laravel, javascript',
            'company' => 'AlfCo',
            'location' => 'Delhi',
            'email' => 'alfie@alfco.com',
            'website' => 'alfie.com',
            'description' => 'lorem ipsum'
        ]);

        Listing::create([
            'title' => 'Engineer',
            'tags' => 'Engineering',
            'company' => 'AlfCo',
            'location' => 'Paris',
            'email' => 'bob@alfco.com',
            'website' => 'bob.com',
            'description' => 'lorem ipsum again'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
