<?php

namespace App\Http\Middleware;

use App\Models\Admin\PageViews;
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
        $pageViews = PageViews::latest()->first(); // Retrieve the last record from the PageViews table

    if (!$pageViews) {
        // If no record exists in the database, create a new one
        $pageViews = new PageViews();
        $pageViews->pageViews = 1;
    } else {
        // If a record exists, update the pageViews property
        
        $currentDate = now()->format('Y-m-d');

        if (!$pageViews || substr($pageViews->created_at, 0, 10) !== $currentDate) {
            //creates new data in new date
            $pageViews = new PageViews();
            $pageViews->pageViews = 1;
        } else {
            // If the date matches, increment the pageViews property
            $pageViews->pageViews++;
        }
    
    }

    $pageViews->save();

        return $next($request);
    }
}
