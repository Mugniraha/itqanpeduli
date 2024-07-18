<?php

namespace App\Http\Controllers;

use App\Models\ArticleCategory;
use Illuminate\Http\Request;

class ArticleCategoryController extends Controller
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

    public function edit(ArticleCategory $articleCategory)
    {
        return view('admin.konten.webUtama.editkatblog', compact('articleCategory'));
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
