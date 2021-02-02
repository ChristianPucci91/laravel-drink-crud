@extends('layouts.main-layout')

@section('content')

  <h1>Modifica questo drink!</h1>

  <form action="{{ route('drink-update', $drink -> id)}}" method="POST">

    @csrf
    @method('POST')

    <label for="name">Name: </label>
    <input type="text" name="name" value="{{ $drink -> name}}">

    <br>

    <label for="gradation">Gradation: </label>
    <input type="text" name="gradation" value="{{ $drink -> gradation}}">

    <br>

    <label for="price">Price: </label>
    <input type="text" name="price" value="{{ $drink -> price}}">

    <br>

    <input class="button" type="submit" value="Aggiorna">

  </form>

@endsection
