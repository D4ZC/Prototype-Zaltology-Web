<?php

namespace App\Http\Controllers;
use App\Item;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
