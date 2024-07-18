<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        // $articleCategories = ArticleCategory::all();
        $articles = Article::with('articleCategory')->get();
        return view('admin.konten.webUtama.blog', compact('articles'));
    }

    public function create()
    {
        $articleCategories = ArticleCategory::all();
        return view('admin.konten.webUtama.inputblog', compact('articleCategories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string',
            'category_id' => 'required|integer',
            'photo' => 'nullable|image',
            'content' => 'required|string',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('articles', 'public');
        }

        Article::create($data);

        return redirect()->route('article.index')->with('success', 'Article created successfully.');
    }

    public function edit(Article $article)
    {
        $articleCategories = ArticleCategory::all();
        return view('admin.konten.webUtama.editblog', compact('article', 'articleCategories'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string',
            'category_id' => 'required|exists:article_categories,id',
            'photo' => 'nullable|image',
            'content' => 'required|string',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            if ($article->photo) {
                Storage::delete('public/' . $article->photo);
            }
            $data['photo'] = $request->file('photo')->store('articles', 'public');
        }

        $article->update($data);

        return redirect()->route('article.index')->with('success', 'Article updated successfully.');
    }

    public function destroy(Article $article)
    {
        if ($article->photo) {
            Storage::delete('public/' . $article->photo);
        }
        $article->delete();
        return redirect()->route('article.index')->with('success', 'Article deleted successfully.');
    }
}

