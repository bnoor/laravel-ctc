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
        $search = request('search');

        $articles = Article::recherche($search)->with('user')->paginate(10);
        return view("articles.index", ['articles' => $articles]);
    }

 public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        request()->validate([
            'name' => 'required|min:4|unique:articles',
            'published_at' => 'required',
            'body' => 'required',
        ]);
        Article::create(request()->all() + ['user_id' => 1]);
        return redirect()->route('articles.index');
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
