<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\CurrencyService;

class CurrencyController extends Controller
{
    protected $currencyService;
    
    public function __construct(CurrencyService $currencyService)
    {
        $this->currencyService = $currencyService;
    }

     /**
       * Homepage with currency overview and quick converter
      */
     public function index()
     {
        $majorCurrencies = ['USD', 'EUR', 'GBP', 'JPY', 'CAD', 'AUD', 'CHF', 'CNY'];
        $ratesData = $this->currencyService->getLatestRates();
        
        $major_rates = [];

        if ($ratesData && isset($ratesData['rates'])) {
           foreach ($majorCurrencies as $code) {
               $major_rates[$code] = $ratesData['rates'][$code] ?? 0;
           }
        }

        $baseCurrency = $ratesData['base'] ?? 'USD';
        $lastUpdated  = $ratesData['date'] ?? '';

        return view('index', [
        'majorRates'   => $major_rates,
        'baseCurrency' => $baseCurrency,
        'lastUpdated'  => $lastUpdated,
        ]);
     } 
    
     /**
      * Currency converter page
      */
     public function converter()
     {
       return view('converter');
     } 
     
}
