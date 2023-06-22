@extends('layouts.app')

@section('content')

<div class="container">
    <h2>modifica card</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $elem)
                <li>{{$elem}}</li>
            @endforeach
        </ul>
    </div>
    @endif
            <div class="row justify-content-center">
                <div class="col-7">
                    <form action="{{ route('project.update', $project ) }}" method="POST" enctype="multipart/form-data">
                     
                      @csrf
                      @method('PUT')
    
                        <div>
                            <label for="title">Titolo</label>
                            <input class="form-control" @error('title') is-invalid  @enderror type="text" id="title" name="title" value="{{ old('title') ?? $project->title }}" >
                             @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                     
                        <div>
                            <label for="content">Content</label>
                            <textarea class="form-control" @error('content') is-invalid  @enderror name="content" id="content" rows="10">{{ old('content') ?? $project->content }}</textarea>
                             @error('content')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror 
                        </div>

                        <div>
                            <label for="slug">Slug</label>
                            <input class="form-control" @error('slug') is-invalid  @enderror type="text" id="slug" name="slug" value="{{ old('slug') ?? $project->slug }}" >
                             @error('slug')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="project-cover-image" class="form-label">Cover image</label>
                            <input type="file" class="form-control" name="cover_image" id="project-cover-image" placeholder="" aria-describeby="fileHelpId">
                        </div>


                        <div class="mb-3">
                            <label for="project-types" class="form-label">types</label>
                              <select class="form-select form-select-lg" @error ('type_id') is-ivalid @enderror name="type_id" id="project-types">
                                <option value="">scegli una categoria</option>
                                @foreach($types as $elem)
                                    <option value="{{$elem->id}}" {{ old('type_id', $project->type_id) == $elem->id ? 'selected' : '' }} >{{ $elem->name }}</option>
                                @endforeach
                                
                              </select> 
                              <div> 
                                @error ('type_id')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                              </div> 
                        </div>
                 
                        <button class="btn btn-success" type="submit">Salva modifiche</button>
                    </form>
                </div>
            </div>
        </div>
    </div>







@endsection