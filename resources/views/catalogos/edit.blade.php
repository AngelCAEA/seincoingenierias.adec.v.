@extends('layout')

@section('title','Editar producto')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            @include('partials.validation-errors')
            <form class="bg-white shadow rounded py-3 px-4"
                method="POST" action="{{ route('catalogos.update', $catalogo)}}"
                enctype="multipart/form-data">
                <h1 class="text-center text-dark display-4">Editar producto</h1>
                <hr>
                @method('PATCH')
                @include('catalogos._form',['btnText' => 'Actualizar'])
            </form>
        </div>
    </div>
</div>
@endsection