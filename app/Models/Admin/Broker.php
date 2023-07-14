<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Broker extends Model
{
    use HasFactory;
    protected $fillable= [
        'brokerId',
        'brokerName',
        'brokerPhone',
        'brokerAddress',
        'brokerTms'
    ];
}
