@extends('admin.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar la noticia</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.index') }}"> Back</a>
            </div>
        </div>
    </div>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form  action="{{ route('admin.update', $result->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="text-dark pt-3">
            <label for="titleNews" class="form-label"> Titulo de la noticia </label>
            <input type="text" name="title" class="form-control" id="title" value="{{$result->title}}">
        </div>
        <div class="text-dark pt-3">
            <label for="titleNews" class="form-label"> Subtitulo de la noticia </label>
            <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{$result->subtitle}}">
        </div>
        <div class="text-dark mb-4 pt-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
            <textarea class="form-control" name="description" id="description" rows="3">{{$result->description}}</textarea>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Categoria:</strong>
                <select name="categories_id" class="form-select" id="categories">
                    @foreach ($categories as $category)
                    @if ($category->id == $result->categories_id)
                        <option value="{{$category->id}}" selected>{{ $category->categories }}</option>
                    @else
                        <option value="{{$category->id}}">{{ $category->categories }}</option>
                    @endif
                @endforeach
                </select>
            </div>
        </div>


        <div class="text-dark mb-4 pt-3">
            <label for="formFile" class="form-label">Imagen de la noticia</label>
            <input class="form-control" name="image" type="file" id="image" placeholder="Arrastre Archivo">
            <img class="pt-4" id="preview" style="width:30%;" src="{{url('storage/imgs/'.$result->image)}}">
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Publicar</button>
        </div>
    </form>
@endsection