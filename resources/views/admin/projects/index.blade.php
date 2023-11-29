@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="text-center my-5">Lista Progetti</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome Progetto</th>
            <th scope="col">Ultimo aggiornamento</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->name }}</td>
                    <td>Tipo: {{ $project->date_updated }} </td>
                    <td> X </td>
                </tr>
            @endforeach


        </tbody>
    </table>
    {{$projects->links()}}
</div>

@endsection

@section('title')
    | Lista Progetti
@endsection

