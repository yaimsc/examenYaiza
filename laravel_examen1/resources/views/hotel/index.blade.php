@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Hoteles de 1ª</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Direccion</th>
      <th>Categoria</th>
      <th>Antiguedad</th>
    </tr>
    @foreach($hotels as $hotel)
    <tr>
      @if($hotel->completo == 1)
        <td style="color: red">{{$hotel->id}}</td>
        <td style="color: red">{{$hotel->nombre}}</td>
        <td style="color: red">{{$hotel->direccion}}</td>
        <td style="color: red">{{$hotel->categoria}}</td>
        <td style="color: red">{{$hotel->antiguedad}}</td>
      @else
        <td>{{$hotel->id}}</td>
        <td>{{$hotel->nombre}}</td>
        <td>{{$hotel->direccion}}</td>
        <td>{{$hotel->categoria}}</td>
        <td>{{$hotel->antiguedad}}</td>
      @endif
    </tr>
    @endforeach

  </table>

@endsection
