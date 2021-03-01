@extends('layouts.app')


@section('content')
  <h1>Post che può vedere solo chi non è loggato</h1>

  @foreach ($posts as $value)
  <div class="card">
    <h2>{{$value -> title}}</h2>
    <p>{{$value -> body}}</p>
  </div>
  @endforeach

@endsection
