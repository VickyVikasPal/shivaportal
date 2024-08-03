<?php

namespace Modules\Gst\Console\Commands;

use Illuminate\Console\Command;

class GstCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:GstCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gst Command description';

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
