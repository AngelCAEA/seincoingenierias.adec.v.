@extends('layout')

@section('title','Crear proyecto')

@section('content')

<div class="container mt-2 mb-2 p-2">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            
            @include('partials.validation-errors')

            <form class="bg-white shadow rounded py-3 px-4" 
            method="POST" action="{{ route('projects.store')}}" enctype="multipart/form-data">
            <h1 class="text-center text-dark display-4">Nuevo proyecto</h1>
            <hr>
            @include('projects._form',['btnText'=>'Guardar'])
            </form>
        </div>
    </div>
</div>
@endsection