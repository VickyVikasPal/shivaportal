<?php

namespace Modules\Td\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Td\Models\Td;

class TdDatabaseSeeder extends Seeder
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
         * Tds Seed
         * ------------------
         */

        // DB::table('tds')->truncate();
        // echo "Truncate: tds \n";

        Td::factory()->count(20)->create();
        $rows = Td::all();
        echo " Insert: tds \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
