<?php

namespace Database\Seeders;

use App\Models\Company_branch;
use Illuminate\Database\Seeder;

class SeederCompany_branch extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company_branch::factory(10)->create();
    }
}
