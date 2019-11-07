<?php

use Illuminate\Database\Seeder;
use App\Company;
use App\Customer;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        factory(Company::class, 5)->create();
        factory(Customer::class, 10)->create();
    }
}
