<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiveMarket extends Model
{
    use HasFactory;
    protected $table = 'livemarkets';
    protected $fillable=[
        'stockId',
        'symbol',
        'ltp',
        'pointChange',
        'percentChange',
        'openPrice',
        'highPrice',
        'lowPrice',
        'volume',
        'prevClosePrice'
        
    ];
}
