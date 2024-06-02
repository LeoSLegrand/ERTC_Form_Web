<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Silber\Bouncer\BouncerFacade as Bouncer;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Create the default admin user
         $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin@password'),
        ]);

        // Assign the admin role to the default user
        Bouncer::assign('admin')->to($admin);


        // // Create the default client user
        //  $client = User::create([
        //     'name' => 'Client',
        //     'email' => 'client@mail.com',
        //     'password' => Hash::make('client@password'),
        // ]);

        // // Assign the client role to the default user
        // Bouncer::assign('client')->to($client);

        
        // // Create the default testeur user
        // $testeur = User::create([
        //     'name' => 'Testeur',
        //     'email' => 'testeur@mail.com',
        //     'password' => Hash::make('testeur@password'),
        // ]);

        // // Assign the testeur role to the default testeur
        // Bouncer::assign('testeur')->to($testeur);
    }
}
