<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    // Menampilkan semua artikel
    public function index()
    {
        $articles = Article::latest()->get();
        return view('articles.index', compact('articles'));
    }

    // Form tambah artikel
    public function create()
    {
        return view('articles.create');
    }

    // Simpan artikel
    public function store(Request $request)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'heading' => 'nullable|string|max:255',
            'author'  => 'required|string|max:100',
            'content' => 'required',
        ]);

        $article = new Article();
        $article->title = $request->title;
        $article->heading = $request->heading;
        $article->content = $request->content;
        // $article->author = auth()->user()->name;
        $article->author = $request->author; 
        $article->save();


        return redirect()->route('articles.index')->with('success', 'Catatan berhasil ditambahkan!');
    }

    // Tampilkan artikel tertentu
    public function show(Article $article)
    {
    $content = $article->content;

    // Ambil semua artikel dengan judul sama
    $articles = Article::where('title', $article->title)->get();

    $toc = [];

    foreach ($articles as $a) {
        $headings = !empty($a->heading) ? explode('|', $a->heading) : [];
        foreach ($headings as $index => $h) {
            // id unik per subjudul per artikel
            $id = 'article-' . $a->id . '-heading-' . ($index + 1);
            $toc[$a->title][] = [
                'id' => $id,
                'text' => $h,
                'article_id' => $a->id
            ];

            // Jika artikel yang ditampilkan sama dengan $article, tambahkan heading ke content
            if ($a->id === $article->id) {
                $content = "<h3 id='{$id}'>{$h}</h3>" . $content;
            }
        }
    }

    return view('articles.show', compact('article', 'content', 'toc'));
    }

    public function search(Request $request)
    {
    $query = $request->input('q');

    $articles = Article::where('title', 'like', "%{$query}%")
                       ->orWhere('content', 'like', "%{$query}%")
                       ->get();

    if ($request->ajax()) {
        $results = [];
        foreach ($articles as $article) {
            $results[] = [
                'id' => $article->id,
                'title' => $article->title
            ];
        }
        return response()->json($results);
    }

    return view('articles.index', compact('articles'));
    }

    // Form edit artikel
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    // Update artikel
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        $article->update($request->only(['title', 'content']));

        return redirect()->route('articles.index')->with('success', 'Catatan berhasil diperbarui!');
    }

    // Hapus artikel
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Catatan berhasil dihapus!');
    }
    
}
