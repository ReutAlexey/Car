<?php

namespace App\Http\Controllers\TestTaskControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function showSearchForm()
    {
        return view('showSearchForm');
    }
}
