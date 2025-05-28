<?php
// app/helpers.php

use App\Models\User\LiveMarket;
use Goutte\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

function liveMarketData()
{
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
}

?>
