<?php

namespace Binomedev\ClientsManager\Commands;

use Illuminate\Console\Command;

class ClientsManagerCommand extends Command
{
    public $signature = 'showcase-clients';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
