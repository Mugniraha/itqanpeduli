<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Kategori;
use Illuminate\Http\Request;

class articleCategoryController extends Controller
{
    /**
     * Display a listing of the categories.
     */
    public function index()
    {
        $articleCategories = ArticleCategory::all();
        return view('admin.konten.webUtama.katblog', compact('articleCategories'));
    }

    /**
     * Show the form for creating a new category.
     */
    public function create()
    {
        return view('admin.konten.webUtama.inputkatblog');
    }

    /**
     * Store a newly created category in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:article_categories',
        ]);

        ArticleCategory::create($request->all());

        return redirect()->route('articleCategory.index')->with('success', 'Category created successfully.');
    }

    public function edit($id)
    {
        $article = ArticleCategory::findOrFail($id);
        $articleCategories = ArticleCategory::all(); // Misalnya Anda ingin semua kategori
        return view('admin.konten.webUtama.editkatblog', compact('article', 'articleCategories'));
    }
    

    /**
     * Update the specified category in storage.
     */
    public function update(Request $request, ArticleCategory $articleCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:article_categories,name,' . $articleCategory->id,
        ]);

        $articleCategory->update($request->all());

        return redirect()->route('articleCategory.index')->with('success', 'Article Categorie updated successfully.');
    }

    /**
     * Remove the specified category from storage.
     */
    public function destroy(ArticleCategory $articleCategory)
    {
        $articleCategory->delete();
        return redirect()->route('articleCategory.index')->with('success', 'Article Categorie deleted successfully.');
    }
}
