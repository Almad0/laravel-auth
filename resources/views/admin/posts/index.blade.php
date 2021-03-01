@extends('layouts.dashboard')


@section('content')
  <h1>Qua ci sono i post presi dalla tabella Posts</h1>

  <table>
    <thead>
      <th>ID</th>
      <th>Titolo</th>
      <th>Testo</th>
      <th>Azioni possibili</th>
    </thead>
    <tbody>
      @foreach ($posts as $value)
        <tr>
          <td>{{$value -> id}}</td>
          <td>{{$value -> title}}</td>
          <td>{{$value -> body}}</td>
          <td>
            <a href="#">Guarda</a>
            <a href="#">Modifica</a>
            <form action="#" method="post">
              @csrf
              @method('delete')
              <button type="submit" name="button">Elimina</button>
            </form>

          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
