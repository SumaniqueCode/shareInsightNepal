<?php
// app/helpers.php

use App\Models\User\Index;
use Goutte\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

function indexData()
{
        $indexDetails = [];
        $indexValues = [];

        $client = new Client();
        $url = 'https://www.sharesansar.com/live-trading';
        $page = $client->request('GET', $url);

        // Index::truncate();

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
}

?>
