<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Drink;

class DrinkController extends Controller
{
    public function index() {

      $drinks = Drink::all();
      return view('pages.drink-index', compact('drinks'));

    }

    public function show($id) {

     $drink = Drink::findOrFail($id);
     return view('pages.drink-show', compact('drink'));

    }

    public function create() {

     return view('pages.drink-create');

    }

    public function store(Request $request) {

     Drink::create($request -> all());
     return redirect() -> route('drink-index');

    }

    public function edit($id) {

     $drink = Drink::findOrFail($id);
     return view('pages.drink-edit',compact('drink'));

    }

    public function update(Request $request, $id) {

      $drink = Drink::findOrFail($id);
      $drink -> update($request -> all());
      return redirect() -> route('drink-show', $drink -> id);

    }

    public function delete($id) {

      $drink = Drink::findOrFail($id);
      $drink -> delete();
      return redirect() -> route('drink-index');
    }
}
