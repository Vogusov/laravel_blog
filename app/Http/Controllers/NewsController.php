<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Показ списка всех новостей с их описанием
     */
    public function index()
    {
        return view('news.index', ['all_news' => News::all()]);
    }


    /**
     * Показ страницы с одной новостью
     */
    public function showOneNews(int $id)
    {
        return view(
            'news.show',
            [
                'one_news_data' =>  News::where('id', $id)->whereNull('deleted_at')->first()
            ]
        );
    }
}
