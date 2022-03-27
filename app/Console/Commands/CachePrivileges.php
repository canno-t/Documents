<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use App\Models\AccountTypes;

class CachePrivileges extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Cache:Accounts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Cache::flush();
        $all = AccountTypes::all();
        // $all->each(function($item, $key){
        //     print($item);
        // });
        print_r($all[1]['attributes']);
        
        //Cache::forever()
    }
}
