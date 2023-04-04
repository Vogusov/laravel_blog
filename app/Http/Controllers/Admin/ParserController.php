<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Contracts\ParserContract;
use Illuminate\Http\Request;


class ParserController extends Controller
{
    public function __invoke(Request $request, ParserContract $service)
    {
        // $service = new ParserService();
        dd($service->getParsedList('https://www.kinopoisk.ru/news.rss'));
    }
}
