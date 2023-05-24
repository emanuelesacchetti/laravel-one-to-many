@extends('layouts.back')

@section('content')
    <h3>Modifica questo progetto</h3>
    <form action="{{ route('admin.projects.update', ['project'=> $project->slug]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
            @error('title')
                <div class='invalid-feedback'>{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="cover_img" class="form-label">URL dell'immagine di copertina</label>
            <input type="text" class="form-control @error('cover_img') is-invalid @enderror" id="cover_img" name="cover_img">
            @error('cover_img')
                <div class='invalid-feedback'>{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Data di creazione</label>
            <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date">
            @error('date')
                <div class='invalid-feedback'>{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Descizione</label>
            <textarea class="form-control @error('content') is-invalid @enderror" id="content" rows="3" name="content"></textarea>
            @error('content')
                <div class='invalid-feedback'>{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-primary" type="submit">Conferma modifica</button>
    </form>

@endsection