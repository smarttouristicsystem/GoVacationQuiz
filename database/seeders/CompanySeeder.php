<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = [
            [
                'company_name' => 'GoVacation Indonesia', 
                'abv' => 'GVI', 
                'company_logo'=> 'company-logos/logo-govac.png',
                'company_branch' => 'Indonesia',
                'description' => 'lorem ipsum dolor',
            ],
            [
                'company_name' => 'GoVacation Singapore', 
                'abv' => 'GVS',
                'company_logo'=> 'company-logos/logo-govac.png', 
                'company_branch' => 'Singapore',
                'description' => 'lorem ipsum dolor',
            ],
            [
                'company_name' => 'GoVacation Vietnam', 
                'abv' => 'GVV',
                'company_logo'=> 'company-logos/logo-govac.png',
                'company_branch' => 'Vietnam',
                'description' => 'lorem ipsum dolor',
            ],
            [
                'company_name' => 'GoVacation Cambodia', 
                'abv' => 'GVC',
                'company_logo'=> 'company-logos/logo-govac.png',
                'company_branch' => 'Cambodia', 
                'description' => 'lorem ipsum dolor',
            ],
            [
                'company_name' => 'GoVacation Thailand', 
                'abv' => 'GVT',
                'company_logo'=> 'company-logos/logo-govac.png', 
                'company_branch' => 'Thailand',
                'description' => 'lorem ipsum dolor',
            ],
        ];

        foreach ($companies as $company) {
            Company::create($company);
        }
    }
}
