<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {
        // get data from a database
        $pizzas = [
            ['type' => 'hawaiian', 'base' => 'cheesy crust'],
            ['type' => 'volcano', 'base' => 'garlic crust'],
            ['type' => 'veg supreme', 'base' => 'thin & crispy']
        ];

        $name = request('name');
        $age = request('age');
        return view('pizzas', [
            'pizzas' => $pizzas,
            'name' => $name,
            'age' => $age,
        ]);
    }

    public function show($id)
    {
        // use $id variable to query db for record
        return view('details', ['id' => $id]);
    }
}
