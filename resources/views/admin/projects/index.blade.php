@extends('layouts.admin')

@section('content')

    <h1>Lista progetti:</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Data</th>
            <th scope="col">Slug</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($projects as $project)
            <tr>
                <th scope="row">{{ $project->id }}</th>
                <td>{{ $project->name }}</td>
                <td>{{ $project->description }}</td>
                <td>{{ $project->date }}</td>
                <td>{{ $project->slug }}</td>
            </tr>
            @endforeach

        </tbody>
    </table>

@endsection