<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    
    /**
     * All categories.
     *
     * @return void
     */
    public function index()
    {
        return Category::all();
    }

    /**
     * Create category.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $Subcategory = Category::create($request->all());

        return response()->json($article);
    }
    /**
     * Subcategories for every category.
     *
     * @return void
     */
    public function subcats(Request $request,$categoryId)
    {
        $subcats = SubCategory::where('category_id', '=', $categoryId)->get();

        return response()->json($subcats);
    }

    /**
     * Show category.
     *
     * @return void
     */
    public function show(Category $category)
    {
        return $category;
    }

    /**
     * Update category.
     *
     * @return void
     */
    public function update(Request $request, Category $category)
    {
        $category->update($request->all());

        return response()->json($category);
    }

    /**
     * Delete category.
     *
     * @return void
     */
    public function delete(Article $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }
}
