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
        $all_news = News::orderBy('id', 'desc')
            ->with('categories')
            ->paginate(5)
            ->withPath('/news');
        // dd($all_news);

        return view('news.index', ['all_news' => $all_news]);
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
