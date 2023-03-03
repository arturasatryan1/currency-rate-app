<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class MonoBankApi
{
    /**
     * @return mixed
     */
    public static function fetchCurrency()
    {
        $response = Http::get('https://api.monobank.ua/bank/currency');
        return $response->json();
    }
}
