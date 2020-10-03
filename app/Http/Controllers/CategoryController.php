<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return 'Category';
    }

    public function showCategory($category)
    {
        return $category;
    }
}
