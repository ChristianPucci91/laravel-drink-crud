@extends('layouts.main-layout')

@section('content')

  <h1>Aggiungi un nuovo drink!</h1>

  <form action="{{ route('drink-store')}}" method="POST">

    @csrf
    @method('POST')

    <label for="name">Name: </label>
    <input type="text" name="name">

    <br>

    <label for="gradation">Gradation: </label>
    <input type="text" name="gradation">

    <br>

    <label for="price">Price: </label>
    <input type="text" name="price">

    <br>

    <input type="submit" value="Salva">

  </form>

@endsection
