<?php

namespace App\Console\Commands;

use App\Events\CurrencyDataFetched;
use App\Helpers\MonoBankApi;
use Illuminate\Console\Command;

class FetchCurrencyData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'currency:fetch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch currency data from API and broadcast over WebSocket channel.';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $data = MonoBankApi::fetchCurrency();
        broadcast(new CurrencyDataFetched($data))->toOthers();
    }
}
