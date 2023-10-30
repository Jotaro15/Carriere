<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concession;

class ConcessionController extends Controller
{
    public function index (int $id) {
        $concession = Concession::find($id);
        return view("concession",['concession'->$concession]);
    }

    public function showall (){

        $concessions = Concession::all();
        return view("allconcessions", ['concessions' => $concessions]);
    }


    public function ShowFormCreate (){

        return view('concession.create');
    }

    public function create()
    {
        return view('create');
    }
}