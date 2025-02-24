<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = [
            [
                'name' => 'Marika Gloeckler',
                'email' => 'marika@gmail.com',
                'profile_photo' => 'employee-photos/marika.png',
                'position' => 'General Manager',
                'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,",
                'is_active' => true
            ],
            [
<<<<<<< HEAD
                'name' => 'Jiri Panek',
                'email' => 'Jiri@gmail.com',
                'profile_photo' => 'employee-photos/jiri.png',
                'position' => 'Product Account Manager',
=======
                'name' => 'Tude Swadharma',
                'email' => 'tude@gmail.com',
                'profile_photo' => 'employee-photos/marika.png',
                'position' => 'Business Developer Manager',
>>>>>>> 8bb4c43b877eae3f52c8d84d69ea1b2c8d532118
                'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,",
                'is_active' => true
            ],
            [
<<<<<<< HEAD
                'name' => 'Tude Swadharma',
                'email' => 'tude@gmail.com',
                'profile_photo' => 'employee-photos/tude.png',
                'position' => 'Business Developer Manager',
=======
                'name' => 'Jiri Panek',
                'email' => 'Jiri@gmail.com',
                'profile_photo' => 'employee-photos/marika.png',
                'position' => 'Product Account Manager',
>>>>>>> 8bb4c43b877eae3f52c8d84d69ea1b2c8d532118
                'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,",
                'is_active' => true
            ],
            [
                'name' => 'Putu Norbert',
                'email' => 'putu@gmail.com',
<<<<<<< HEAD
                'profile_photo' => 'employee-photos/norbert.png',
=======
                'profile_photo' => 'employee-photos/marika.png',
>>>>>>> 8bb4c43b877eae3f52c8d84d69ea1b2c8d532118
                'position' => 'Contracting Manager',
                'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,",
                'is_active' => true
            ],

        ];

        foreach ($employees as $employee) {
            Employee::create($employee);
        }
    }
}
