@extends('layout')

@section('title','Servicios | '.$project->title)

@section('content')

<div class="container">
    <div class=" row p-3">
        <h1 class="text-center">{{ $project->title}}</h1>
        <div class="col">
            @if ($project->img)
                <img src="/storage/{{$project->img}}" class="img-fluid shadow rounded" alt="{{$project->title}}">
            @endif
        </div>
        <div class="col">
        <div class="d-flex justify-content-between align-items-center">
            <a  href="{{ route('projects.index')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                </svg>
                Regresar
            </a>
        @auth
        <div class="d-grid gap-2 d-md-block">
            <a class="btn btn-light" href="{{ route('projects.edit', $project)}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                </svg>
                Editar
            </a>
            <a class="btn btn-danger" href="#" onclick="document.getElementById('delete-project').submit()">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                </svg>
                Eliminar
            </a>
        </div>    
            <form method="POST" class="d-none" id="delete-project" action="{{ route('projects.destroy', $project)}}">
                @csrf @method('DELETE')
            </form>
        @endauth
        </div>
        <hr>
        <h3 class="fw-bold">DESCRIPCIÓN</h3>
        @if ($project->category_id)
            <a href="{{ route('categories.show', $project->category) }}" 
            class="badge bg-dark mt-2"
            >{{ $project->category->name }}</a>
        @endif
        <p>{{$project->description}}</p>

        <p>ESTADO DE LA OBRA : <small class="text-success">{{$project->status}}</small></p>
    </div>
  </div>
</div>
@endsection
