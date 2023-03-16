<?php

namespace App\Http\Controllers;

// use App\Models\CategoryNews;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class CategoryNewsController extends Controller
{
    public function index(int $id)
    {
        // dd(Category::with('news')->find($id));
        return view(' category.index', ['category_news' => Category::with('news')
        ->find($id)
        // ->paginate(5)
        // ->withPath('/category')
    ]);
        // return view(' category.index', ['category_news' => CategoryNews::getCategoryNews($id)]);
    }
}
