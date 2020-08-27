<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ShowHome extends Controller
{
    /**
     * Show the home page.
     *
     * @return View
     */
    public function __invoke()
    {
        return view('home', ["phpWerkt" => "php werkt nu ook"]);
    }
}