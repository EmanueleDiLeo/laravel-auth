@extends('layouts.admin')

@section('content')
<div class="container">

    {{-- stampo l'alert solo se esiste la variabile di sessione inviata dal metodo destroy del controller --}}
    @if (session('deleted'))
    <div class="alert alert-success" role="alert">
        {{ session('deleted') }}
    </div>
    @endif

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
                    <td>
                        @include('admin.partials.form-delete',[
                            'route' => route('admin.technologies.destroy', $technology),
                            'message' => 'Sei sicuro di voler eliminare questa tecnologia?',
                        ])
                    </td>
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

