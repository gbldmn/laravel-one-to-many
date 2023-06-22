@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $project->title }}</h1>
    <p>{{ $project->content }}</p>
    <p>{{ $project->slug }}</p>
    <img src="{{ asset('storage/' . $project->cover_image) }}" alt="">
</div>
@endsection