<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruit;


class OpdrachtController extends Controller
{
    public function show()
    {
        $name = "Julian";
        $fruits = Fruit::all();

        return view('opdracht', compact('name', 'fruits'));

    }
}
