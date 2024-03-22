@extends('layouts.basic')

@section('title', 'Index view | All movies')



@section('content')

<h1>All Movies</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Title</th>

        <th scope="col">Registra</th>
        <th scope="col">Data</th>
        <th scope="col">Genere</th>
        <th scope="col">Descrizione</th>

      </tr>
    </thead>

    <tbody>
        @foreach ($movies as $element )
        <tr>
          <td>{{$element->title}}</td>
          <td>{{$element->regista}}</td>
          <td>{{$element->data}}</td>
          <td>{{$element->genere}}</td>
          <td>{{$element->descrizione}}</td>

        </tr>
        @endforeach


    </tbody>
  </table>


@endsection
