@extends('layouts.app')

@section('content')
    <h1 class="container">tabella personale</h1>
   
    <div class="container">
        <a class="btn btn-primary my-3 " href="{{ route('project.create')}}">crea post</a>
        <div class="row">
                @foreach ($projects as $elem)
                <div class="col-2">
                    <div class="card">
                        <div class="card-body">
                        <a href="{{ route('project.show', $elem) }}"> 
                                <h4 class="card-title">{{$elem->title}} </h4>
                        </a>
                            
                            <p class="card-text">{{ $elem->content }}</p>
                            <a class="btn btn-warning" href="{{ route('project.edit', $elem ) }}">Modifica</a>
                            <form action="{{ route('project.destroy', $elem) }}" method="POST">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">elimina</button>
                    </form> 
                        </div>
                    </div>
                </div>

                @endforeach
        </div>
    </div> 
@endsection  