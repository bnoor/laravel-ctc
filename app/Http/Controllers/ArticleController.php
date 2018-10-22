<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
        // return DB::table('articles')->get();
        $articles = Article::all();
        return view("articles.index", ['articles' => $articles]);
    }

    public function store()
    {
        Article::insert([
            'name' => 'Salut',
            'body' => 'lorem ipsum',
            'user_id' => 1,
            'published_at' => Carbon::now(),
        ]);
    }

    public function update()
    {
        Article::where('id', 1)
                ->update(['name' => 'updated']);
    }

    public function destroy()
    {
        Article::where('id', 1)->delete();
    }
}
