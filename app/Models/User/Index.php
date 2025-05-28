<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    use HasFactory;
    protected $table = 'indices';
    protected $fillable=[
        'indexName',
        'indexPrice',
        'indexValue',
        'indexPercent'
    ];
}
