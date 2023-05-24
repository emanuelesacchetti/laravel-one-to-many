@extends('layouts.back')

@section('content')

<div class="container">
    <div class="row">
        <div class="col my-3 p-4 border">
            <img src="{{ $project->cover_img }}" class="img-fluid" alt="{{ $project->title }}">
            <h2>{{ $project->title }}</h2>
            <h5>Creato il: {{ $project->date }}</h5>
            <p>{{ $project->content }}</p>
        </div>
    </div>
</div>
@endsection