<!DOCTYPE html>
<html>
<head>
    <title>Edit Catatan</title>
</head>
<body>
    <h1>Edit Catatan</h1>

    <form action="{{ route('articles.update', $article) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Judul:</label><br>
        <input type="text" name="title" value="{{ $article->title }}"><br><br>

        <label>Konten:</label><br>
        <textarea name="content" rows="5">{{ $article->content }}</textarea><br><br>

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('articles.index') }}">Kembali</a>
</body>
</html>
