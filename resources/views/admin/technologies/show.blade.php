@php
    use App\Functions\Helper;
@endphp

@extends('layouts.admin')

@section('content')
<div class="container p-3">
    <div class="card p-5">
        <h1>{{ $technology->name }}</h1>
        <p>Data ultimo aggiornamento: {{ Helper::formatDate($technology->date_updated) }}</p>
        <p>Ultima Versione: v-{{ $technology->version }} min</p>
        <p>{{ $technology->description }}</p>
        <a href="{{route('admin.technologies.index')}}" class="btn btn-primary">Torna indietro</a>
    </div>
</div>

@endsection