<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Resources\Category as CategoryResource;
use App\Http\Resources\CategoryCollection;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        new SaveStats();
        return new CategoryCollection(Category::paginate());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        new SaveStats();
        return new CategoryResource($category);
    }
}
