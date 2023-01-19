<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsCategoriesController extends Controller
{
    public function index(int $id)
    {
        // echo "<pre>";
        //     var_dump($this->getNewsCategory($id));
        // echo "</pre>";
        // exit;
        
        return view('category.index', ['category_news' => $this->getNewsCategory($id)]);
    }
}
