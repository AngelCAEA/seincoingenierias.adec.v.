@csrf
<div class="form-group">
<label for="title"> Titulo del proyecto </label>
    <input class="form-control border-0 bg-light shadow-sm"
    id="title"
    type="text"
     name="title" 
     value="{{old('title',$project->title) }}">
</div>
<div class="form-group">
<label for="url"> url del proyecto </label>
    <input class="form-control border-0 bg-light shadow-sm"
    id="url"
    type="text" 
    name="url"
     value="{{ old('url',$project->url) }}">
</div>
<div class="form-group">
    <label for="category_id">Categoría del Proyecto</label>
    <select 
        name="category_id" 
        id="category_id" 
        class="form-control border-0 bg-light shadow-sm">
        <option value="">Seleccione</option>
        @foreach ($categories as $id => $name )
            <option value="{{ $id }}"
                @if ($id == old('category_id', $project->category_id)) selected @endif 
            >{{ $name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
<label for="description">Descripcion del proyecto </label>
    <textarea class="form-control border-0 bg-light shadow-sm" 
        name="description">
        {{ old('description',$project->description) }}
    </textarea>
</div>
<div class="form-group">
<label for="status"> Status del proyecto </label>
    <input class="form-control border-0 bg-light shadow-sm"
    id="status" 
    type="text"
    name="status"
    value="{{old('status',$project->status) }}">
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
<a class="btn btn-danger" href="{{ route('projects.index')}}">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 17 17">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
    </svg>
    Cancelar 
</a>
</div>