<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assistance;
use App\Models\Employee;

class AssistanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employee = Employee::all();
        $assistances = [
            [
                'name' => 'Major Accounts',
                'description' => 'Major Accounts, Hotel Partnership, or Strategic Collaboration',
                'employee_id' => $employee->first()->id
            ],
            [
                'name' => 'Roundtrips',
                'description' => 'Roundtrips, Tailor-Made Products, and Enhancing Destination Offerings',
                'employee_id' => $employee->skip(1)->first()->id
            ],
            [
                'name' => 'Partnership',
                'description' => 'Partnership, New Collaboration, and Connectivity',
                'employee_id' => $employee->skip(2)->first()->id
            ],
            [
                'name' => 'Hotel Contracts',
                'description' => 'Hotel Contracts, Portfolio, and Special Offers',
                'employee_id' => $employee->skip(3)->first()->id
            ],

        ];

        foreach ($assistances as $assistence) {
            Assistance::create($assistence);
        }
    }
}
