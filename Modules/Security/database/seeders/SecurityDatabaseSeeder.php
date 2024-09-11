<?php

namespace Modules\Security\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Security\Models\Security;

class SecurityDatabaseSeeder extends Seeder
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
         * Securities Seed
         * ------------------
         */

        // DB::table('securities')->truncate();
        // echo "Truncate: securities \n";

        Security::factory()->count(20)->create();
        $rows = Security::all();
        echo " Insert: securities \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
