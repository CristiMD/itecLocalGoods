<?php

namespace App\Http\Controllers;

use App\Subcategory;
use Illuminate\Http\Request;

class SubCategoriesController extends Controller
{
    
    /**
     * All categories.
     *
     * @return void
     */
    public function index()
    {
        return Subcategory::all();
    }

    /**
     * Create Subcategory.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $subcategory = Subcategory::create($request->all());

        return response()->json($Subcategory);
    }

    public function show(Subcategory $subcategory)
    {
        return $subcategory;
    }

    /**
     * Update Subcategory.
     *
     * @return void
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        $subcategory->update($request->all());

        return response()->json($subcategory);
    }

    /**
     * Delete Subcategory.
     *
     * @return void
     */
    public function delete(Subcategory $subcategory)
    {
        $subcategory->delete();

        return response()->json(null, 204);
    }
}
