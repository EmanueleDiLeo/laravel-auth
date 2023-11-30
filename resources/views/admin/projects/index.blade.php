@extends('layouts.admin')

@section('content')
<div class="container">

    {{-- stampo l'alert solo se esiste la variabile di sessione inviata dal metodo destroy del controller --}}
    @if (session('deleted'))
    <div class="alert alert-success" role="alert">
        {{ session('deleted') }}
    </div>
    @endif

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
                    <td>
                        @include('admin.partials.form-delete',[
                            'route' => route('admin.projects.destroy', $project),
                            'message' => 'Sei sicuro di voler eliminare questo progetto?',
                        ])
                    </td>
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

