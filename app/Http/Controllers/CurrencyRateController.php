<?php

namespace App\Http\Controllers;

use App\Helpers\MonoBankApi;

class CurrencyRateController extends Controller
{
    public function index()
    {
        $data = MonoBankApi::fetchCurrency();
        return view('app', compact('data'));
    }
}
