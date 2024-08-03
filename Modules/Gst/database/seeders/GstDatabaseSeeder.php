<?php

namespace Modules\Gst\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Gst\Models\Gst;

class GstDatabaseSeeder extends Seeder
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
         * Gsts Seed
         * ------------------
         */

        // DB::table('gsts')->truncate();
        // echo "Truncate: gsts \n";

        Gst::factory()->count(20)->create();
        $rows = Gst::all();
        echo " Insert: gsts \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
