<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsStoreRequest;
use App\Http\Requests\NewsUpdateRequest;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_news = News::all()->map(function ($value, $key) {
            $value->body = Str::limit(strip_tags($value->body), 50);
            return $value;
        });

        return view('admin.news.index', [
            'all_news' => $all_news
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(
            'admin.news.create',
            [
                'categories' => Category::all()->filter(function ($value, $key) {
                    return is_null($value->deleted_at);
                })
            ]

        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  News $news
     * @return \Illuminate\Http\Response
     */
    public function store(NewsStoreRequest $request)
    {

        $statusCategory = News::create($request->validated());
        if ($statusCategory) {
            return redirect()->route('admin.news.index')->with('success', 'Новость создана');
        }
        return back()->with('error', 'Не удалось создать запись');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view(
            'admin.news.edit',
            [
                'news' => $news,
                'categories' => Category::all()->filter(function ($value, $key) {
                    return is_null($value->deleted_at);
                })
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  NewsUpdateRequest $request
     * @param  News $news
     * @return \Illuminate\Http\Response
     */
    public function update(NewsUpdateRequest $request, News $news)
    {
        $statusNews = $news->fill($request->validated())->save();

        if ($statusNews) {
            $cats =  $request->category;
            $news->categories()->sync($cats);

            return redirect()->route('admin.news.index')->with('success', 'Новость обновлена');
        }
        return back()->with('error', 'Не удалось обновить запись');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, News $news)
    {
        if ($request->ajax()) {
            try {
                $news->delete();
            } catch (\Exception $e) {
                report($e);
            }
        }
    }
}
