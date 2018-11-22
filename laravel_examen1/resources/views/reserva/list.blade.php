@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Reserva</h2>

  <h3>Cliente: {{$cliente->nombre}} / {{$cliente->apellido}}</h3>
  <h3>NIF: {{$cliente->nif}} </h3>

  <h3>Ha realizado las siguientes reservas:</h3>

  <table>

    <tr>
      <th>Hotel</th>
      <th>Fecha</th>
      <th>Numero de habitaciones</th>
    </tr>
    @foreach($cliente->hotels as $hotel)
    <tr>
      <td>{{$hotel->nombre}}</td>
      <td>{{date('d-m-Y', strtotime($hotel->pivot->fecha))}}</td>
      <td>{{$hotel->pivot->numhabitaciones}}</td>
    </tr>
    @endforeach

  </table>
@endsection
