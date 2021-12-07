@extends('layout')

@section('title','Crear producto')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                @include('partials.validation-errors')
                <form class="bg-white shadow rounded py-3 px-4"  
                      method="POST" action="{{ route('catalogos.store')}}" enctype="multipart/form-data">
                      <h1 class="text-center text-dark display-4">Nuevo producto</h1>
                      <hr>
                    @include('catalogos._form',['btnText' => 'Guardar'])
                </form>
            </div>
        </div>
    </div>
    
@endsection