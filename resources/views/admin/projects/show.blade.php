@extends('layouts.admin')

@section('content')

    <h1 class="mt-2">{{ $project->name }}</h1>

    <ul>
        <li>{{ $project->description }}</li>
        <li>{{ $project->date }}</li>
        <li>{{ $project->slug }}</li>

        <a href="{{ route("admin.projects.index") }}">Torna alla lista</a>
    </ul>

@endsection