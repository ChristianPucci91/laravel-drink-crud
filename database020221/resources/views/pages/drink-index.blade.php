@extends('layouts.main-layout')

@section('content')

  <h1>Drinks: <a href="{{ route('drink-create')}}">Aggiungi un nuovo Drink!</a></h1>

  @foreach ($drinks as $drink)

    <div class="box">
      <div class="name">

        <a href="{{ route('drink-show', $drink -> id )}}">
          <p>

            {{ $drink -> name }}

          </p>
        </a>

      </div>
      <div class="link">

        <a href="{{ route('drink-edit', $drink -> id )}}">EDIT</a>
        <a href="{{ route('drink-delete', $drink -> id )}}">DELETE</a>

      </div>

    </div>


  @endforeach

@endsection
