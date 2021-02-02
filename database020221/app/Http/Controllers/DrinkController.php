<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Drink;

class DrinkController extends Controller
{
    public function index() {

      $drinks = Drink::all();
      dd($drinks);

    }
}
