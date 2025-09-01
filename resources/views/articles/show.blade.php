@extends('layouts.app')

@section('content')
<div class="row">
    <!-- Sidebar -->
    <div class="col-md-3 d-none d-md-block">
        <div class="card mb-4">
            <div class="card-header">
                📖 Daftar Isi
            </div>
            <div class="card-body">
    @if(!empty($toc))
        @foreach($toc as $title => $headings)
            <p><strong>{{ $title }}</strong></p>
            <ul class="list-unstyled">
                @foreach($headings as $item)
                    <li class="ms-3">
                        @if($item['article_id'] === $article->id)
                            <!-- scroll ke subjudul di artikel yang sama -->
                            <a href="#{{ $item['id'] }}">{{ $item['text'] }}</a>
                        @else
                            <!-- link ke artikel lain -->
                            <a href="{{ route('articles.show', $item['article_id']) }}#{{ $item['id'] }}">{{ $item['text'] }}</a>
                        @endif
                    </li>
                @endforeach
            </ul>
        @endforeach
    @else
        <p><em>Tidak ada subjudul</em></p>
    @endif
    </div>
</div>

        <div class="card">
    <div class="card-header">
        📚 Info Catatan
    </div>
    <div class="card-body">
        <p><strong>Judul:</strong> {{ $article->title }}</p>
        <p><strong>Dibuat:</strong> {{ $article->created_at->format('d M Y') }}</p>
        <p><strong>Update:</strong> {{ $article->updated_at->format('d M Y') }}</p>
        <p><strong>Penulis:</strong> {{ $article->author ?? 'Tidak diketahui' }}</p>
        <p><strong>Kategori:</strong> Teknologi</p>
    </div>
</div>

    </div>

    <!-- Konten Utama -->
    <div class="col-md-9">
    <h1 class="mb-3">{{ $article->title }}</h1>
    <p class="text-muted">
        Ditulis oleh <strong>{{ $article->author ?? 'Tidak diketahui' }}</strong> 
        pada {{ $article->created_at->format('d F Y') }}
    </p>
    <hr>

    <div class="article-content" style="text-align: justify; line-height: 1.8;">
        {!! $content !!}
    </div>

    <hr>

    <!-- Tombol Kembali + Hapus -->
    <div class="d-flex gap-2">
        <a href="{{ route('articles.index') }}" class="btn btn-outline-primary">← Kembali ke Daftar Catatan</a>

        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus artikel ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Hapus Catatan</button>
        </form>
    </div>
</div>

@endsection
