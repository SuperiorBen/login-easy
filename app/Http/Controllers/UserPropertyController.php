<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\ShowProperties;

class UserPropertyController extends Controller
{
    public function testProps(){
        ShowProperties::dispatch('Hola sockets');
    }
}
