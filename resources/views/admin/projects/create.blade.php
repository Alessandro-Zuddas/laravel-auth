@extends('layouts.admin')

@section('content')

    <h1 class="my-2">Crea un nuovo progetto:</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route("admin.projects.store") }}" method="POST">

        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nome progetto:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Inserisci il nome">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione progetto:</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Inserisci la descrizione"></textarea>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Data di creazione:</label>
            <input type="date" class="form-control" id="date" name="date" placeholder="Inserisci la data di creazione">
        </div>

        <button type="submit" class="btn btn-success">Crea</button>
        <a href="{{ route("admin.projects.index") }}" class="btn btn-secondary">Indietro</a>
    </form>

@endsection