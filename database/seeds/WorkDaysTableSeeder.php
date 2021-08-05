<?php

use Illuminate\Database\Seeder;
use App\WorkDay;

class WorkDaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<7; ++$i){
            WorkDay::create([
                'day' => $i,
                'active' => ($i==3),
                'morning_start' => ($i == 3 ? '07:00:00' : '05:00:00'),
                'morning_end' => ($i == 3 ? '09:30:00' : '05:00:00'),
                'afternoon_start' => ($i == 3 ? '15:00:00' : '13:00:00'),
                'afternoon_end' => ($i == 3 ? '18:00:00' : '13:00:00'),
                'user_id' => 2 //Medico (UsersTableSeeder)
            ]);
        }

        for($i=0; $i<7; ++$i){
            WorkDay::create([
                'day' => $i,
                'active' => ($i==0),
                'morning_start' => ($i == 0 ? '05:30:00' : '05:00:00'),
                'morning_end' => ($i == 0 ? '09:30:00' : '05:00:00'),
                'afternoon_start' => ($i == 0 ? '19:00:00' : '13:00:00'),
                'afternoon_end' => ($i == 0 ? '20:30:00' : '13:00:00'),
                'user_id' => 3 //Medico (UsersTableSeeder)
            ]);
        }

        for($i=0; $i<7; ++$i){
            WorkDay::create([
                'day' => $i,
                'active' => ($i==0),
                'morning_start' => ($i == 0 ? '09:30:00' : '05:00:00'),
                'morning_end' => ($i == 0 ? '11:30:00' : '05:00:00'),
                'afternoon_start' => ($i == 0 ? '13:00:00' : '13:00:00'),
                'afternoon_end' => ($i == 0 ? '16:30:00' : '13:00:00'),
                'user_id' => 7 //Medico (UsersTableSeeder)
            ]);
        }

        for($i=0; $i<7; ++$i){
            WorkDay::create([
                'day' => $i,
                'active' => ($i==1),
                'morning_start' => ($i == 1 ? '05:30:00' : '05:00:00'),
                'morning_end' => ($i == 1 ? '8:00:00' : '05:00:00'),
                'afternoon_start' => ($i == 1 ? '16:00:00' : '13:00:00'),
                'afternoon_end' => ($i == 1 ? '19:00:00' : '13:00:00'),
                'user_id' => 4 //Medico (UsersTableSeeder)
            ]);
        }

        for($i=0; $i<7; ++$i){
            WorkDay::create([
                'day' => $i,
                'active' => ($i==1),
                'morning_start' => ($i == 1 ? '09:30:00' : '05:00:00'),
                'morning_end' => ($i == 1 ? '11:30:00' : '05:00:00'),
                'afternoon_start' => ($i == 1 ? '19:00:00' : '13:00:00'),
                'afternoon_end' => ($i == 1 ? '22:30:00' : '13:00:00'),
                'user_id' => 11 //Medico (UsersTableSeeder)
            ]);
        }

        for($i=0; $i<7; ++$i){
            WorkDay::create([
                'day' => $i,
                'active' => ($i==2),
                'morning_start' => ($i == 2 ? '05:30:00' : '05:00:00'),
                'morning_end' => ($i == 2 ? '08:30:00' : '05:00:00'),
                'afternoon_start' => ($i == 2 ? '15:30:00' : '13:00:00'),
                'afternoon_end' => ($i == 2 ? '18:30:00' : '13:00:00'),
                'user_id' => 6 //Medico (UsersTableSeeder)
            ]);
        }

        for($i=0; $i<7; ++$i){
            WorkDay::create([
                'day' => $i,
                'active' => ($i==2),
                'morning_start' => ($i == 2 ? '08:30:00' : '05:00:00'),
                'morning_end' => ($i == 2 ? '11:30:00' : '05:00:00'),
                'afternoon_start' => ($i == 2 ? '18:00:00' : '13:00:00'),
                'afternoon_end' => ($i == 2 ? '20:30:00' : '13:00:00'),
                'user_id' => 8 //Medico (UsersTableSeeder)
            ]);
        }

        for($i=0; $i<7; ++$i){
            WorkDay::create([
                'day' => $i,
                'active' => ($i==3),
                'morning_start' => ($i == 3 ? '09:30:00' : '05:00:00'),
                'morning_end' => ($i == 3 ? '11:30:00' : '05:00:00'),
                'afternoon_start' => ($i == 3 ? '16:00:00' : '13:00:00'),
                'afternoon_end' => ($i == 3 ? '19:30:00' : '13:00:00'),
                'user_id' => 9 //Medico (UsersTableSeeder)
            ]);
        }

        for($i=0; $i<7; ++$i){
            WorkDay::create([
                'day' => $i,
                'active' => ($i==3),
                'morning_start' => ($i == 3 ? '05:30:00' : '05:00:00'),
                'morning_end' => ($i == 3 ? '07:30:00' : '05:00:00'),
                'afternoon_start' => ($i == 3 ? '19:30:00' : '13:00:00'),
                'afternoon_end' => ($i == 3 ? '23:30:00' : '13:00:00'),
                'user_id' => 10 //Medico (UsersTableSeeder)
            ]);
        }

        for($i=0; $i<7; ++$i){
            WorkDay::create([
                'day' => $i,
                'active' => ($i==4),
                'morning_start' => ($i == 4 ? '05:30:00' : '05:00:00'),
                'morning_end' => ($i == 4 ? '09:00:00' : '05:00:00'),
                'afternoon_start' => ($i == 4 ? '13:00:00' : '13:00:00'),
                'afternoon_end' => ($i == 4 ? '15:30:00' : '13:00:00'),
                'user_id' => 14 //Medico (UsersTableSeeder)
            ]);
        }

        for($i=0; $i<7; ++$i){
            WorkDay::create([
                'day' => $i,
                'active' => ($i==4),
                'morning_start' => ($i == 4 ? '09:30:00' : '05:00:00'),
                'morning_end' => ($i == 4 ? '11:00:00' : '05:00:00'),
                'afternoon_start' => ($i == 4 ? '15:00:00' : '13:00:00'),
                'afternoon_end' => ($i == 4 ? '18:30:00' : '13:00:00'),
                'user_id' => 13 //Medico (UsersTableSeeder)
            ]);
        }

        for($i=0; $i<7; ++$i){
            WorkDay::create([
                'day' => $i,
                'active' => ($i==5),
                'morning_start' => ($i == 5 ? '06:00:00' : '05:00:00'),
                'morning_end' => ($i == 5 ? '09:00:00' : '05:00:00'),
                'afternoon_start' => ($i == 5 ? '13:00:00' : '13:00:00'),
                'afternoon_end' => ($i == 5 ? '15:30:00' : '13:00:00'),
                'user_id' => 12 //Medico (UsersTableSeeder)
            ]);
        }

        for($i=0; $i<7; ++$i){
            WorkDay::create([
                'day' => $i,
                'active' => ($i==5),
                'morning_start' => ($i == 5 ? '09:00:00' : '05:00:00'),
                'morning_end' => ($i == 5 ? '11:30:00' : '05:00:00'),
                'afternoon_start' => ($i == 5 ? '15:30:00' : '13:00:00'),
                'afternoon_end' => ($i == 5 ? '16:30:00' : '13:00:00'),
                'user_id' => 5 //Medico (UsersTableSeeder)
            ]);
        }

        for($i=0; $i<7; ++$i){
            WorkDay::create([
                'day' => $i,
                'active' => ($i==6),
                'morning_start' => ($i == 6 ? '06:00:00' : '05:00:00'),
                'morning_end' => ($i == 6 ? '08:30:00' : '05:00:00'),
                'afternoon_start' => ($i == 6 ? '13:00:00' : '13:00:00'),
                'afternoon_end' => ($i == 6 ? '15:00:00' : '13:00:00'),
                'user_id' => 16 //Medico (UsersTableSeeder)
            ]);
        }

        for($i=0; $i<7; ++$i){
            WorkDay::create([
                'day' => $i,
                'active' => ($i==6),
                'morning_start' => ($i == 6 ? '08:30:00' : '05:00:00'),
                'morning_end' => ($i == 6 ? '11:30:00' : '05:00:00'),
                'afternoon_start' => ($i == 6 ? '15:00:00' : '13:00:00'),
                'afternoon_end' => ($i == 6 ? '17:30:00' : '13:00:00'),
                'user_id' => 15 //Medico (UsersTableSeeder)
            ]);
        }
    }
}
