@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Crea una nuova card</h2>
    
            <div class="row justify-content-center">
                <div class="col-7">
                    <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                     
                      @csrf
    
                        <div>
                            <label for="title">Titolo</label>
                            <input class="form-control" @error('title') is-invalid  @enderror type="text" id="title" name="title">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                     
                        <div>
                            <label for="content">Content</label>
                            <textarea class="form-control" @error('content') is-invalid  @enderror name="content" id="content" rows="10"></textarea>
                            @error('content')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <label for="slug">Slug</label>
                            <input class="form-control" @error('slug') is-invalid  @enderror type="text" id="slug" name="slug">
                            @error('slug')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="project-cover-image" class="form-label">Cover image</label>
                            <input type="file" class="form-control" name="cover_image" id="project-cover-image" placeholder="" aria-describeby="fileHelpId">
                        </div>
                 
                        <button class="btn btn-success" type="submit">Salva</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection