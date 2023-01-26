@extends('layouts.admin')

@section('content')

  <div class="row align-items-center">
    <div class="col">    
      <h1>Lista progetti:</h1>
    </div>
    <div class="col text-end px-5">
      <a href="{{ route("admin.projects.create") }}" class="btn btn-success"><i class="fa-solid fa-plus"></i></a>
    </div>
  </div>

  @if (session("message"))
    <div class="alert alert-success">
      {{ session("message") }}
    </div>
  @endif

  <table class="table">
      <thead>
        <tr class="text-center">
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Descrizione</th>
          <th scope="col">Data</th>
          <th scope="col">Slug</th>
          <th scope="col">Actions</th>
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
            
            {{-- Actions buttons --}}
            <td class="text-center">
              <a href="{{ route("admin.projects.show", $project->id) }}" class="btn btn-primary mt-1"><i class="fa-solid fa-eye"></i></a>
              <a href="{{ route("admin.projects.edit", $project->id) }}" class="btn btn-warning mt-1"><i class="fa-solid fa-pen"></i></a>
              <a href="{{ route("admin.projects.destroy", $project->id) }}" class="btn btn-danger mt-1"><i class="fa-solid fa-trash"></i></a>
            </td>
            {{-- /Actions buttons --}}
          </tr>
          @endforeach

      </tbody>
  </table>

@endsection