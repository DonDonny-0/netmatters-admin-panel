<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);

        $companies = Company::factory(10)->create();

        foreach ($companies as $company) {
            Employee::factory(10)->create([
                'company_id' => $company->id,
            ]);
        }
    }
}
