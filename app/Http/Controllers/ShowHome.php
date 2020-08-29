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
        $this->insert("mees");
        $this->update("mees", "rik");
        $this->delete("rik");

        $user = DB::select('select * from user');
        return view('home', ["phpWerkt" => "php werkt nu ook, en de database ook als hier tim staat:" . $user[0]->name]);
    }

    private function insert($name){
        DB::insert('insert into user (name) values (?)', [$name]);
    }

    private function select($name){
        DB::insert('insert into user (name) values (?)', [$name]);
    }

    private function update($oldName, $newName){
        DB::update('update user set name = ? where name = ?', [$newName, $oldName]);
    }

    private function delete($name){
        DB::delete('delete from user where name = ?',[$name]);
    }


}