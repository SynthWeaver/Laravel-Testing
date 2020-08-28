<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ShowHome extends Controller
{
    /**
     * Show the home page.
     *
     * @return View
     */
    public function __invoke()
    {
        $user = DB::select('select * from user');
        return view('home', ["phpWerkt" => "php werkt nu ook, en de database ook als hier tim staat:" . $user[0]->name]);
    }
}