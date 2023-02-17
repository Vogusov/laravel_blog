<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryNews extends Model
{
    use HasFactory;

    public static function getCategoryNews(int $id) {
        $all_news_id = DB::table('category_news')->where('category_id', '=', $id)->get('news_id');
        // dd($all_news_id);
        $category_news = [];
        foreach ($all_news_id as $news_id) {
            // dd($news_id->news_id);
            $category_news[] = DB::table('news')->find($news_id->news_id);
            // dd($category_news);
        }
        return $category_news;
    }
}
