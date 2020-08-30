<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Stage extends Controller
{
    /**
     * Show the home page.
     *
     * @return View
     */
    public function __invoke()
    {
        return view('stage');
    }
}