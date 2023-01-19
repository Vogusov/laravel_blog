<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Показ списка всех новостей с их описанием
     */
    public function index()
    {
        return view('news.index', ['all_news' => $this->getNews()]);
    }


    /**
     * Показ страницы с одной новостью
     */
    public function showOneNews(int $id)
    {
        return view('news.show', ['one_news_data' => $this->getOneNews($id)]);
    }
}
