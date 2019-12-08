<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

/* About questions 4 and 5, I decided to use the library Guzzle because with it I can be sure the request will send it and also the library has the support to handle many requests and the security to take the correct responses from the page.
I added a try-catch method to be sure the page will not crash if some of the answers is not correct.
About question 5, I think the best way to garantee an answer or guarantee the system is sending a request is using the libraries and tools that we can use with laravel because you can have a strong system, more efficient and also the code is cleaner and faster to write. */

class SendPost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:sendPost';

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

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $client = new Client();

        try {
            $client->request('POST', 'https://atomic.incfile.com/fakepost',['connect_timeout' => 5]);
        } catch (RequestException $e) {
            
            echo "The page no answers";
        }  
    }
}
