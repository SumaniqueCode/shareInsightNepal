<?php

namespace App\Http\Middleware;

use App\Models\User\Index;
use App\Models\User\LiveMarket;
use Closure;
use Goutte\Client;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DataLoader
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $indexDetails = [];
        $indexValues = [];

        $client = new Client();
        $url = 'https://www.sharesansar.com/live-trading';
        $page = $client->request('GET', $url);

        $results = $page->filter('td')->each(function ($item) {
            return $item->text();
        });

        $rowCount = 0;
        $chunkedResults = array_chunk($results, 10); // Split the results into chunks of 10 elements

        // Delete all existing records
        LiveMarket::truncate();
        Index::truncate();

        foreach ($chunkedResults as $rowData) {
            $rowCount++;
            $model = new LiveMarket();
            $model->stockId = $rowData[0] ?? null;
            $model->symbol = $rowData[1] ?? null;
            $model->ltp = $rowData[2] ?? null;
            $model->pointChange = $rowData[3] ?? null;
            $model->percentChange = $rowData[4] ?? null;
            $model->openPrice = $rowData[5] ?? null;
            $model->highPrice = $rowData[6] ?? null;
            $model->lowPrice = $rowData[7] ?? null;
            $model->volume = $rowData[8] ?? null;
            $model->prevClosePrice = $rowData[9] ?? null;

            $model->save();
        }

        $page->filter('.mu-list')->each(function ($item) use (&$indexDetails) {
            $indexDetails[$item->filter('h4')->text()] = $item->filter('.mu-price')->text();
        });

        $indexInfo = $indexDetails;

        $page->filter('.mu-list')->each(function ($item) use (&$indexValues) {
            $indexValues[$item->filter('.mu-value')->text()] = $item->filter('.mu-percent')->text();
        });
        $indexData = $indexValues;

        $value = array_keys($indexData);
        $percent = array_filter($indexData);

        $finalIndexData = array_combine($value, $percent);

        foreach ($indexInfo as $name => $price) {
            $model = new Index();
            $model->indexName = $name ?? null;
            $model->indexPrice = $price ?? null;
            if ($finalIndexData) {
                $model->indexValue = current($value) ?? null;
                $model->indexPercent = current($percent) ?? null;
            }
            $model->save();
            array_shift($value); // Remove the first element from the $value array
            array_shift($percent); // Remove the first element from the $percent array
        }

        return $next($request);
    }
}
