<?php

namespace Modules\Mca\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Mca\Models\Mca;

class McaDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        /*
         * Mcas Seed
         * ------------------
         */

        // DB::table('mcas')->truncate();
        // echo "Truncate: mcas \n";

        Mca::factory()->count(20)->create();
        $rows = Mca::all();
        echo " Insert: mcas \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
