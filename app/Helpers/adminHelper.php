<?php
// app/helpers.php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

function admincheck()
{
    if (Auth::check() && Auth::user()->isRole == 'admin') {
        return 1;
    } else {
        return 0;
    }
}

?>
