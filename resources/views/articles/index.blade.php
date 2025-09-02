@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Daftar Catatan</h1>

    <!-- Search Form -->
    <form id="search-form" action="{{ route('articles.search') }}" method="GET" class="position-relative mb-3">
        <input type="text" id="search-input" name="q" class="form-control" placeholder="Cari artikel..." value="{{ request('q') }}" autocomplete="off">
        <div id="search-results" class="list-group position-absolute w-100" style="z-index: 1000;"></div>
    </form>

    <!-- List of Articles -->
    <div class="list-group">
        @forelse($articles as $article)
            <a href="{{ route('articles.show', $article->id) }}" class="list-group-item list-group-item-action">
                <h5>{{ $article->title }}</h5>
                <p class="mb-1 text-muted">{{ Str::limit($article->content, 100) }}</p>
            </a>
        @empty
            <p class="mt-3"><em>Tidak ada artikel.</em></p>
        @endforelse
    </div>
@endsection

@section('scripts')
<script>
document.getElementById('search-input').addEventListener('input', function() {
    let query = this.value;
    let resultsDiv = document.getElementById('search-results');

    if(query.length < 1){
        resultsDiv.innerHTML = '';
        return;
    }

    fetch(`{{ route('articles.search') }}?q=${query}`, {
        headers: { 'X-Requested-With': 'XMLHttpRequest' }
    })
    .then(res => res.json())
    .then(data => {
        let html = '';
        if(data.length){
            data.forEach(item => {
                html += `<a href="/articles/${item.id}" class="list-group-item list-group-item-action">${item.title}</a>`;
            });
        } else {
            html = '<p class="list-group-item"><em>Tidak ada hasil ditemukan</em></p>';
        }
        resultsDiv.innerHTML = html;
    });
});
</script>
@endsection
