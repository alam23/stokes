<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        User::create([
            'name' => "Newtella",
            'email' => "newtella@stokes.com",
            'password' => bcrypt('password'), // secret
            'role' => "admin"
        ]);

        User::create([
            'name' => "Henry Diaz",
            'email' => "hdiaz@stokes.com",
            'password' => bcrypt('password'), // secret
            'role' => "doctor"
        ]);

        User::create([
            'name' => "Shaun Murphy",
            'email' => "smurphy@stokes.com",
            'password' => bcrypt('password'), 
            'role' => "doctor"
        ]);

        User::create([
            'name' => "Neil Melendez",
            'email' => "nmelendez@stokes.com",
            'password' => bcrypt('password'), 
            'role' => "doctor"
        ]);

        User::create([
            'name' => "Claire Brown",
            'email' => "cbrown@stokes.com",
            'password' => bcrypt('password'), 
            'role' => "doctor"
        ]);

        User::create([
            'name' => "Jared Kalu",
            'email' => "jkalu@stokes.com",
            'password' => bcrypt('password'), 
            'role' => "doctor"
        ]);

        User::create([
            'name' => "Marcus Andrews",
            'email' => "mandrews@stokes.com",
            'password' => bcrypt('password'), 
            'role' => "doctor"
        ]);

        User::create([
            'name' => "Aaron Glassman",
            'email' => "aglassman@stokes.com",
            'password' => bcrypt('password'), 
            'role' => "doctor"
        ]);

        User::create([
            'name' => "Gregory House",
            'email' => "ghouse@stokes.com",
            'password' => bcrypt('password'), 
            'role' => "doctor"
        ]);

        User::create([
            'name' => "James Wilson",
            'email' => "jwilson@stokes.com",
            'password' => bcrypt('password'), 
            'role' => "doctor"
        ]);

        User::create([
            'name' => "Eric Foreman",
            'email' => "eforeman@stokes.com",
            'password' => bcrypt('password'), 
            'role' => "doctor"
        ]);

        User::create([
            'name' => "Jessica Adams",
            'email' => "jpalomino@stokes.com",
            'password' => bcrypt('password'), 
            'role' => "doctor"
        ]);

        User::create([
            'name' => "Miguel Zarate",
            'email' => "mzarate@stokes.com",
            'password' => bcrypt('password'), 
            'role' => "doctor"
        ]);

        User::create([
            'name' => "Carlos Jimenez",
            'email' => "cjimenez@stokes.com",
            'password' => bcrypt('password'), 
            'role' => "doctor"
        ]);

        User::create([
            'name' => "Andres Casas",
            'email' => "acasas@stokes.com",
            'password' => bcrypt('password'), 
            'role' => "doctor"
        ]);

        User::create([
            'name' => "Monica Alcantara",
            'email' => "malcantara@stokes.com",
            'password' => bcrypt('password'), 
            'role' => "doctor"
        ]);


        User::create([
            'name' => "Dorian Oliveros",
            'email' => "doliveros@stokes.com",
            'password' => bcrypt('password'), // secret
            'role' => "patient"
        ]);
    }

}
