<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateAdCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ad:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new Ad command. It has flags, -band is creating band ad with random fields, -artist is creating artisat ad';

    public function handle()
    {
        $this->info('New Ad created successfully');
    }
}
