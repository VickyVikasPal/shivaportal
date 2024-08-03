<?php

namespace Modules\Client\Console\Commands;

use Illuminate\Console\Command;

class ClientCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:ClientCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Client Command description';

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
