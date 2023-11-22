<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageViews extends Model
{
    use HasFactory;
    protected $fillable= [
        'pageViews'
    ];
}
