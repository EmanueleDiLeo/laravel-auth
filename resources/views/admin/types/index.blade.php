@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="text-center my-5">Lista Tipi</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome Tipo</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    <td>{{ $type->id }}</td>
                    <td>{{ $type->name }}</td>
                    <td> X </td>
                </tr>
            @endforeach


        </tbody>
    </table>
    {{$types->links()}}
</div>

@endsection

@section('title')
    | Lista Tipi
@endsection

