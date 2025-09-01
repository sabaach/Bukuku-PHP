@extends('layouts.app')

@section('content')
    <h2>Tambah Catatan Baru</h2>
    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Subjudul (Heading)</label>
            <input type="text" name="heading" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Konten</label>
            <textarea name="content" rows="6" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Author</label>
            <input type="text" name="author" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
