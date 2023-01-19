<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private $sections = [
        [
            'name' => 'categories',
            'route' => 'admin.categories.index'
        ],
        [
            'name' => 'news',
            'route' => 'admin.news.index'
        ]
    ];

    public function getSections()
    {
        return $this->sections;
    }

    public function index()
    {
        return view('admin.index', ['sections' => $this->getSections()]); 
    }
}
