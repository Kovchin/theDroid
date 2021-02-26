<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {

        $response = Http::get('www.yandex.ru');
//        $response = Http::get('https://api.vk.com/method/database.getCountries?v=5.52&client_id=7753552&access_token=0f44bd620f44bd620f44bd62ef0f32f23200f440f44bd626f5becb7f95116f26ebbac02&lang=ru&need_all=1&count=1000');

        dd($response);

//        Storage::disk('local')->put('Countries.json', $response);
    }
}
