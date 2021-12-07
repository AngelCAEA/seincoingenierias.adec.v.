@extends('layout')
@section('title','Editar proyecto')

@section('content')
<div class="container mt-2 mb-2 p-2 rounded-lg">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            @include('partials.validation-errors')

                <form class="bg-white shadow rounded py-3 px-4" 
                    method="POST" action="{{ route('projects.update', $project)}}" enctype="multipart/form-data">
                        <h1 class="text-center text-dark display-4">Editar proyecto</h1>
                        <hr>
                        @method('PATCH')
                        @include('projects._form',['btnText'=>'Actualizar'])
                </form>
        </div>
    </div>
</div> 
@endsection