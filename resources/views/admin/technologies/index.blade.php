@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="text-center my-5">Lista tecnologie</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome Tecnologie</th>
            <th scope="col">Ultimo aggiornamento</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($technologies as $technology)
                <tr>
                    <td>{{ $technology->id }}</td>
                    <td>{{ $technology->name }}</td>
                    <td>Tipo: {{ $technology->date_updated }} </td>
                    <td> X </td>
                </tr>
            @endforeach


        </tbody>
    </table>
    {{$technologies->links()}}
</div>

@endsection

@section('title')
    | Lista tecnologie
@endsection

