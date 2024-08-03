<?php

namespace Modules\Incometax\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Incometax\Models\Incometax;

class IncometaxDatabaseSeeder extends Seeder
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
         * Incometaxes Seed
         * ------------------
         */

        // DB::table('incometaxes')->truncate();
        // echo "Truncate: incometaxes \n";

        Incometax::factory()->count(20)->create();
        $rows = Incometax::all();
        echo " Insert: incometaxes \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
