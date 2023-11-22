@extends('user/layout/layout')
@section('content')

    @if(session('success'))
        <div class="alert alert-success mt-1">
            <span>{{ session('success') }}</span>
        </div>
    @endif

    @error('symbol')
        <div class="alert alert-danger mt-1">
            <span>{{ $message }}</span>
        </div>
    @enderror

    <?php
    use App\Models\User\LiveMarket;
    use App\Models\User\WatchList;

    $watchLists = WatchList::where('userId', Auth::user()->id)->get();
    ?>

<section class="watchlist mt-1 row">
    <div class="col-sm-12">
    <h2>Watchlist</h1>
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Symbol</th>
                <th scope="col">LTP</th>
                <th scope="col">Point Change</th>
                <th scope="col">%Change</th>
                <th scope="col">Open</th>
                <th scope="col">High</th>
                <th scope="col">Low</th>
                <th scope="col">Volume</th>
                <th scope="col">Prev.Close</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
            @foreach ($watchLists as $watchList)
                <?php
                $liveMarket = LiveMarket::where('symbol', $watchList->symbolName)->first();
                ?>
                <tr class="border border-2 border-light {{ $liveMarket && $liveMarket->pointChange > 0 ? 'table-success' : ($liveMarket && $liveMarket->pointChange < 0 ? 'table-danger' : 'table-primary') }}">
                    <td>{{ $i }}</td>
                    <td><a class="liveSymbolName" href="/search/{{$watchList->symbolName}}">{{ $watchList->symbolName }}</a></td>
                    @if ($liveMarket)
                        <td>{{ $liveMarket->ltp }}</td>
                        <td>{{ $liveMarket->pointChange }}</td>
                        <td>{{ $liveMarket->percentChange }}</td>
                        <td>{{ $liveMarket->openPrice }}</td>
                        <td>{{ $liveMarket->highPrice }}</td>
                        <td>{{ $liveMarket->lowPrice }}</td>
                        <td>{{ $liveMarket->volume }}</td>
                        <td>{{ $liveMarket->prevClosePrice }}</td>
                    @else
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    @endif
                    <td>
                        <a class="bg-primary p-1 ps-3 pe-3 rounded" href="/deleteWatchlistStock/{{$watchList->symbolName}}">Delete</a>
                    </td>
                </tr>
                <?php $i++; ?>
            @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection
