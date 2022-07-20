@extends('admin.layout')
 
@section('content')

    <div class="row pt-5 pb-5">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-danger" href="{{ route('admin.create') }}"> Crear nueva noticia</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
        @foreach ($results as $result)
        <div class="container">
            <div class="row">
                <div class="col-lg-4 pt-5">
                    <div class="card h-100 w-100 shadow">
                    <img class="card-img-top" src="{{asset('storage/imgs/'.$result->image)}}" :alt="title">
                        <div class="card-body">
                            <h5 class="card-t-f card-title">{{$result->title}}</h5>
                            <p class="card-d-f card-text">{{$result->subtitle}}</p>
                        </div>                  
                        <div class="ps-3 pb-3">
                            <form action="{{ route('admin.destroy',$result->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-primary" href="{{ route('admin.show',$result->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('admin.edit',$result->id) }}">Edit</a>
                                <button type="submit" class="btn btn-primary">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
      
@endsection