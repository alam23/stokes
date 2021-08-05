<?php

use Illuminate\Database\Seeder;
use App\Specialty;
use App\User;

class SpecialtiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specialties = [
            'Oftalmologia',
            'Pediatria',
            'Neurologia'
        ];
        $specialty1 = Specialty::create([
            'name' => 'Oftalmologia'
        ]);
        $specialty2 = Specialty::create([
            'name' => 'Pediatria'
        ]);
        $specialty3= Specialty::create([
            'name' => 'Neurologia'
        ]);

        User::find(2)->specialties()->save($specialty1);
        User::find(2)->specialties()->save($specialty2);
        User::find(3)->specialties()->save($specialty1);
        User::find(3)->specialties()->save($specialty3);
        User::find(4)->specialties()->save($specialty2);
        User::find(4)->specialties()->save($specialty3);
        User::find(5)->specialties()->save($specialty1);
        User::find(5)->specialties()->save($specialty3);
        User::find(6)->specialties()->save($specialty1);
        User::find(6)->specialties()->save($specialty2);
        User::find(7)->specialties()->save($specialty2);
        User::find(7)->specialties()->save($specialty1);               
        User::find(8)->specialties()->save($specialty1);
        User::find(8)->specialties()->save($specialty3);
        User::find(9)->specialties()->save($specialty1);
        User::find(9)->specialties()->save($specialty3);
        User::find(10)->specialties()->save($specialty1);
        User::find(10)->specialties()->save($specialty2);
        User::find(11)->specialties()->save($specialty3);
        User::find(11)->specialties()->save($specialty1);
        User::find(12)->specialties()->save($specialty3);
        User::find(12)->specialties()->save($specialty1);
        User::find(13)->specialties()->save($specialty1);
        User::find(13)->specialties()->save($specialty2);
        User::find(14)->specialties()->save($specialty1);
        User::find(14)->specialties()->save($specialty2);
        User::find(15)->specialties()->save($specialty2);
        User::find(15)->specialties()->save($specialty1);               
        User::find(16)->specialties()->save($specialty1);
        User::find(16)->specialties()->save($specialty2);      
    }
}
