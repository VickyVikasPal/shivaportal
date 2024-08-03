<?php

namespace Modules\Incometax\Console\Commands;

use Illuminate\Console\Command;

class IncometaxCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:IncometaxCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Incometax Command description';

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
