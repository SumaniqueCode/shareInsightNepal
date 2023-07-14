<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function addToPortfolio(Request $request)
    {
        $portfoli = new Portfolio;

        // Insert the symbol into the database
        $portfoli->stockName = $request->stockName;
        $portfoli->buyingPrice = $request->buyingPrice;
        $portfoli->stockUnit = $request->stockUnit;
        $portfoli->save();

        // Return a response or redirect as needed
        return redirect()->back()->with('success', 'Stock added to portfolio successfully.');
    }

    public function updatePortfolio(Request $request, string $id)
    {
        $portfoli = Portfolio::find($id);

        // Insert the symbol into the database
        $portfoli->stockName = $request->stockName;
        $portfoli->buyingPrice = $request->buyingPrice;
        $portfoli->stockUnit = $request->stockUnit;
        $portfoli->save();

        // Return a response or redirect as needed
        return redirect()->back()->with('success', 'Portfolio updated successfully.');
    }

    public function deletePortfolioStock(string $id)
    {
        $portfolio = Portfolio::where('id', $id)->first();
       $portfolio->delete();

        // Return a response or redirect as needed
        return redirect()->back()->with('success', 'Portfolio deleted successfully.');
    }
}
