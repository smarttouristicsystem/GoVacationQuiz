<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assistance;

class AssistanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $assistances = [
            [
                'name' => 'Major Accounts', 
                'description' => 'Major Accounts, Hotel Partnership, or Strategic Collaboration', 
            ],
            [
                'name' => 'Roundtrips', 
                'description' => 'Roundtrips, Tailor-Made Products, and Enhancing Destination Offerings', 
            ],
            [
                'name' => 'Partnership', 
                'description' => 'Partnership, New Collaboration, and Connectivity', 
            ],
            [
                'name' => 'Hotel Contracts', 
                'description' => 'Hotel Contracts, Portfolio, and Special Offers', 
            ],
            
        ];

        foreach ($assistances as $assistence) {
            Assistance::create($assistence);
        }
    }
}
