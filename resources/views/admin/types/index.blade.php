@extends('layouts.admin')

@section('content')
<div class="container">

    {{-- stampo l'alert solo se esiste la variabile di sessione inviata dal metodo destroy del controller --}}
    @if (session('deleted'))
    <div class="alert alert-success" role="alert">
        {{ session('deleted') }}
    </div>
    @endif

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
                    <td>
                        @include('admin.partials.form-delete',[
                            'route' => route('admin.types.destroy', $type),
                            'message' => 'Sei sicuro di voler eliminare questo tipo?',
                        ])
                    </td>
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

