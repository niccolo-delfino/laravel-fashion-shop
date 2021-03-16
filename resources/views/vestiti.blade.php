@extends('layouts.app')
@section('title','vestiti')

@section('content')
<h1>Pagina vestiti</h1>
<p>
  @foreach($dresses as $dress)
  <ul>
    <h2>id vestito: {{$dress -> id}}</h2>
    <li>{{$dress -> modello}}</li>
    <li>{{$dress -> colore}}</li>
    <li>{{$dress -> stagione}}</li>
  </ul>
  @endforeach
</p>
@endsection
