@extends('layout')

@section('title','Catalogo')

@section('content')

<div class="container shadow rounded bg-primary text-white">
    <h1 class="font-weight-bold text-center p-2">CATALOGO DE PRODUCTOS</h1>
    <div class="d-flex justify-content-between align-items-center">
    </div>
    <p class="fs-5 text-center text-white">
        Para cualquier información de un producto en el catalogo comunicate al numero que aparece
    </p>
    <hr>
    <div class="d-flex flex-wrap justify-content-between align-items-start">
        @forelse($catalogos as $catalogo)
            <div class="card mt-4 mb-4" style="width: 18rem;">
                @if($catalogo->img)
                <img style="height : 250px; object-fit:cover"
                src="/storage/{{ $catalogo->img}}"
                class="card-img-top"
                alt="{{$catalogo->title}}">
                @endif
                <div class="card-body text-dark">
                    <h5 class="card-title">
                        {{ $catalogo->title}}
                    </h5>
                    <a class="btn btn-primary"
                        href="{{ route('catalogos.show', $catalogo) }}"> Ver más...
                    </a>
                </div>
            </div>
        @empty
        <div class="card mb-4">
            <div class="card-body">
               <small class="text-danger"> No hay productos en el catalogo para mostrar </small> 
            </div>
        </div>
        @endforelse
       </div>
        <div class="mt-4">
            {{$catalogos->links()}}
        </div>
        @auth
        <div class="p-3 text-center">
        <a class="btn btn-dark" href="{{ route('catalogos.create')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 17 17">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" fill="#000"/>
            </svg>
            Crear producto
        </a>  
        </div>
        @endauth
</div>

@endsection