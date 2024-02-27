<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruit;


class FruitController extends Controller
{
    public function getFruits()
    {
        return "I have no fruits !";
    }

    public function getAllFruits(){
        $fruits = Fruit::all();
        // dd ($fruits);
        return view('fruits', compact('fruits'));
    }
}
