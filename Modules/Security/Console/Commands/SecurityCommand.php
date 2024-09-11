<?php

namespace Modules\Security\Console\Commands;

use Illuminate\Console\Command;

class SecurityCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:SecurityCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Security Command description';

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
