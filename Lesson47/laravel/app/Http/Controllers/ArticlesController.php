<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Tag;

class ArticlesController extends Controller
{

    public function index() {
        if (request('tag')) { 
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        } else {
            $articles = Article::latest()->get();
        }
        
        return view('articles.index', ['articles'=>$articles]);
    }

    public function show(Article $article) {
        // $article = Article::find($article->id);

        return view('articles.show', ['article'=>$article]); 
    }


    public function create() {
        $tags = Tag::all();
        return view('articles.create', ['tags'=>$tags]);
    }

    

    public function store() { 

        // dd(request()->all());
        // single tag vs tags[]
        $this->validateArticle();

        // request(['title', 'excerpt', 'body']) => return 
        // [
        //         'title' => request('title'),
        //         'excerpt' => request('excerpt'),
        //         'body' => request('body'),
        // ];

        // 1. First we create an Article in articles table
        $article = new Article(request(['title', 'excerpt', 'body'])); // [
                                                            //     'title' => request('title'),
                                                            //     'excerpt' => request('excerpt'),
                                                            //     'body' => request('body'),
                                                            //     'tags' => request('tags'),
                                                            // ]
        $article->user_id = 1; // hardcoded needs Auth to get authenticated user_id
        // auth()->user()->id

        // we have everything filled in to create article
        $article->save();

        // 2. We attache ( create records in pivot table article_tag)

        $article->tags()->attach(request('tags')); // show in tinker


        // Article::create($this->validateArticle()); 


        return redirect( route('articles.show', $article));
    }

    public function edit($article) {

        $article = Article::findOrFail($article);

        return view('articles.edit', ['article'=>$article]);
        
    }

    public function update(Article $article) { 

        $article->update($this->validateArticle());

        return redirect( route('articles.show', $article) );
        
    }

    private function validateArticle() {
        return request()->validate([
            'title' => 'required|min:3',
            'excerpt' => 'required',
            'body' => ['required', 'max:255'],
            'tags' => 'exists:tags,id'
        ]);
    }
}
