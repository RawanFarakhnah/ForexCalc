<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class CurrencyService
{
   protected $apiKey;
   protected $baseUrl;

   public function __construct()
   {
      
      $this->apiKey = config('services.exchange_rate.key');
      $this->baseUrl = 'https://v6.exchangerate-api.com/v6';

      if(!$this->apiKey)
      {
         $this->baseUrl = 'https://api.exchangerate-api.com/v4/latest';
      }
   }

   public function getLatestRates($base = 'USD')
   {
      $base = strtoupper($base);
      
      if($this->apiKey)
      {
         $url = "{$this->baseUrl}/{$this->apiKey}/latest/{$base}";
      }
      else 
      {
         $url = "{$this->baseUrl}/{$base}";
      }

      $response = Http::get($url);
      
      if($response->successful())
      {
         $data = $response->json();
         // Normalize response format
         if(isset($data['conversion_rates']))
         {
            //Paid API response 
            return [
               'base' => $data['base_code'] ?? $baseCurrency,
               'date' => $data['time_last_update_utc'] ?? '',
               'rates' => $data['conversion_rates']
            ];
         }
         elseif (isset($data['rates'])) 
         {
             //Free  API response 
             return [
                'base' => $data['base'] ?? $baseCurrency,
                'date' => $data['date'] ?? '',
                'rates' => $data['rates']
             ];
         }
      }

      return null;
   }
   
}