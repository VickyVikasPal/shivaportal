<?php

namespace Modules\Td\Console\Commands;

use Illuminate\Console\Command;

class TdCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:TdCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Td Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
