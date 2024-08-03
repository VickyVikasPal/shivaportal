<?php

namespace Modules\Client\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Client\Models\Client;

class ClientDatabaseSeeder extends Seeder
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
         * Clients Seed
         * ------------------
         */

        // DB::table('clients')->truncate();
        // echo "Truncate: clients \n";

        Client::factory()->count(20)->create();
        $rows = Client::all();
        echo " Insert: clients \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
