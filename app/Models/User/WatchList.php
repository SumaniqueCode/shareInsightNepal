<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WatchList extends Model
{
    use HasFactory;

    protected $table = 'watchlists';
    protected $fillable=[
        'symbolName',
        'userId'
        
    ];
}
