<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Silber\Bouncer\BouncerFacade as Bouncer;

class BouncerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles
        Bouncer::role()->firstOrCreate([
            'name' => 'client',
            'title' => 'Client',
        ]);

        Bouncer::role()->firstOrCreate([
            'name' => 'testeur',
            'title' => 'Testeur',
        ]);

        // Define abilities
        Bouncer::ability()->firstOrCreate([
            'name' => 'create-products',
            'title' => 'Create Products',
        ]);

        Bouncer::ability()->firstOrCreate([
            'name' => 'test-products',
            'title' => 'Test Products',
        ]);

        // Assign abilities to roles
        Bouncer::allow('client')->to('create-products');
        Bouncer::allow('testeur')->to('test-products');
    }
}

