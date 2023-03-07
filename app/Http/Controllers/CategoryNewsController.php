<?php

namespace App\Http\Controllers;

use App\Models\CategoryNews;
use Illuminate\Http\Request;

class CategoryNewsController extends Controller
{
    public function index(int $id)
    {
        return view('category.index', ['category_news' => CategoryNews::getCategoryNews($id)]);
    }
}
