@extends('layout')

@section('title','Servicios')

@section('content')
<div class=" container  bg-primary text-white shadow rounded">
    
        <h1 class = "fw-bolder text-center p-2" > SERVICIOS </h1>

    <div class="row">
        <div class="col-3">
            <p class="fs-5 fw-bold">INFRAESTRUCTURA</p>
            <hr>
            <ul class="list-group list-group-numbered">
                <li class="list-group-item  fw-bold"> Infraestructura Urbana </li>
                <li class="list-group-item  fw-bold"> Alumbrado Público </li>
                <li class="list-group-item  fw-bold"> Obras Públicas </li>
                <li class="list-group-item  fw-bold"> Sector electrico </li>
                <li class="list-group-item  fw-bold"> Sector mecanico </li>
            </ul>
            <hr>
            <p class="fs-5 fw-bold">DESARROLLO SUSTENTABLE</p>
            <ul class="list-group list-group-numbered">
                <li class="list-group-item fw-bold"> Abastecimiento de agua </li>
                <li class="list-group-item fw-bold"> Plantas de energia solar </li>
                <li class="list-group-item fw-bold"> Agricultura ecologica </li>
            </ul>
        </div>

        <div class="col mt-2 mb-2">
        <div class="d-flex justify-content-between align-items-center">
        @isset($category)
        <div>
            <h2 class = "font-weight-bold text-center mb-0">{{ $category->name }}</h2>
            <a href="{{ route('projects.index')}}" class="btn btn-dark mt-1">Regresar</a>
        </div>
        @else
            <h2 class = "font-weight-bold text-center mb-0">Proyectos </h2>        
        @endisset
    
            @auth
            <a  class="btn btn-dark" href="{{route('projects.create')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 17 17">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" fill="#000"/>
                </svg>
                Crear proyecto
            </a>
            @endauth
        </div>
        <hr>
        <p class="fs-5 fst-italic">Contamos con los servicios para la realización de sus obras. Estos son los proyectos que se han realizado</p>
        <div class="d-flex flex-wrap justify-content-between align-items-start">
            @forelse ($projects as $project)
            <div class="card mb-3" style="width: 18rem;">
                     @if($project->img)
                     <img style="height : 250px; object-fit:cover"
                     src="/storage/{{ $project->img}}" 
                     class="card-img-top"
                      alt="{{$project->title}}">
                     @endif
                     <div class="card-body text-dark">
                        <h5 class="card-title">
                        {{ $project->title }}
                        </h5>
                    <p class="card-subtitle"> {{ $project->created_at->format('d/m/Y')}}</p>
                    <p class="card-text text-truncate">{{ $project->description }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a class="btn btn-primary"
                        href="{{ route('projects.show', $project)}}"> Ver más...
                        </a>
                        @if ($project->category_id)
                        <a href="{{ route('categories.show', $project->category) }}" 
                            class="badge bg-dark"
                            >{{ $project->category->name }}</a>
                        @endif
                    </div>
                </div>
            </div>
            @empty
            <div class="card">
                <div class="card-body">
                   <small class="fw-bolder text-danger"> No hay proyectos para mostrar </small>
                </div>
            </div>
            @endforelse
            </div>
            <div class="mt-4">
                {{ $projects->links()}}
            </div>
        </div>
        </div>

    <div class="p-5 text-center justify-content-center">
        <a class="btn btn-dark" href="{{route('contactanos')}}"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cursor-fill" viewBox="0 0 18 18">
                <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
            </svg>
            Cotiza tu proyecto
        </a>
    </div>

</div>    
@endsection