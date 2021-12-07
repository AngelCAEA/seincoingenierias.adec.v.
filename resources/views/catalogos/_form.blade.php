@csrf
<div class="form-group">
<label for="title">Titulo del producto</label>
    <input class="form-control border-0 bg-light shadow-sm"
    id="title" 
    type="text" 
    name="title" 
    value="{{ old('title',$catalogo->title) }}">
</div>
<div class="form-group">
<label for="url">url del producto</label>
    <input class="form-control border-0 bg-light shadow-sm"
    id="url" 
    type="text"
    name="url" 
    value="{{ old('url',$catalogo->url) }}">
</div>
<div class="form-group">
<label for="description">Descripcion del producto </label>
    <textarea class="form-control border-0 bg-light shadow-sm"
    id="description" 
    name="description">{{ old('description',$catalogo->description) }}</textarea>
</div>
<div class="mb-3">
    <label class="form-label" for="formFile"> Imagen </label>
        <input class="form-control"
        id="formFile" 
        type="file" 
        name="img">
</div>
<div class="btn-group" role="group" aria-label="Basic mixed styles example">
<button class="btn btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 17 17">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
    </svg> 
    {{ $btnText}}
</button>
<a class="btn btn-danger" href="{{ route('catalogos.index')}}">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 17 17">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
      </svg>
    Cancelar 
</a>
</div>