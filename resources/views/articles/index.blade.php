@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Daftar Catatan</h1>
    <form action="{{ route('articles.index') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari artikel..." value="{{ request('search') }}">
            <button class="btn btn-primary" type="submit">Cari</button>
        </div>
    </form>
    <div class="list-group">
        @foreach($articles as $article)
            <a href="{{ route('articles.show', $article->id) }}" class="list-group-item list-group-item-action">
                <h5>{{ $article->title }}</h5>
                <p class="mb-1 text-muted">{{ Str::limit($article->content, 100) }}</p>
            </a>
        @endforeach
    </div>
@endsection
