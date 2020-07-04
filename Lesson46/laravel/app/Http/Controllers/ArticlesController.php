<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Tag;

class ArticlesController extends Controller
{
    // actions ( methods/funciton od class ArticlesController)
    public function index() {
        if (request('tag')) { 
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        } else {
            $articles = Article::latest()->get();
        }
        
        return view('articles.index', ['articles'=>$articles]);
    }

    // action
    // route model binding 
    public function show(Article $article) {
        return view('articles.show', ['article'=>$article]); // "articles/show.blade.php"
    }

    // action
    public function create() {
        return view('articles.create');
    }

    // here create form request comes

    public function store() { // ( $_REQUEST => $_POST ) -> class Request 
        // dd($request->all());
        // dd(request('title')); // if (isset($_POST['title])) { return $_POST['title] }
        // dd(request()->all());
        // dd(request('fasdfasdf') );


        //`title`, `excerpt`, `body`
        // auto redirect back with errors ( in blade temalte in variable $errors)

        // $validatedAttributes = request()->validate([
        //     'title' => 'required|min:3',
        //     'excerpt' => 'required',
        //     'body' => ['required', 'max:255']
        // ]); 
        

        // // $validatedAttributes = [
        //     'title'=>request('title'),
        //     'excerpt' =>request('excerpt'),
        //     'body' =>request('body')
        // ]

        // $article = new Article(); // we create new record in database table "articles" 
        // $article->title = request('title');
        // $article->excerpt = request('excerpt');
        // $article->body = request('body');

        // $article->save(); // applicate in database to store the record

        // mass assignment

        Article::create(
                request()->validate([
                    'title' => 'required|min:3',
                    'excerpt' => 'required',
                    'body' => ['required', 'max:255']
                ])
            ); // Need to be: Article::create($this->validateArticle());

        return redirect('/articles');
    }

    public function edit($article) { // Route model binding need to be applied

        $article = Article::findOrFail($article);

        return view('articles.edit', ['article'=>$article]);
        
    }

    public function update(Article $article) { 

        // $article = object ( select * from articles where id=2) return Article()

        // $article = instance of Article class (not a number!!!)

        // $article = Article::findOrFail($article); // we move to route model binding

        // $validatedAttributes = request()->validate([
        //     'title' => 'required|min:3',
        //     'excerpt' => 'required',
        //     'body' => ['required', 'max:255']
        // ]); 

        // 1st way

        // $article  = Article::find($article->id ); // must be number
        // $article->title = request('title');
        // $article->excerpt = request('excerpt');
        // $article->body = request('body');

        // $article->save(); // applicate in database to store the record


        // 2nd way
        // update() from Laravel model

        $article->update($this->validateArticle());


        return redirect( route('articles.show', $article) );
        
    }

    private function validateArticle() {
        return request()->validate([
            'title' => 'required|min:3',
            'excerpt' => 'required',
            'body' => ['required', 'max:255']
        ]);
        /** 
         * [
         *  'title' => request('title'), // validated
         *  'excerpt' => request('excerpt'), // validated
         *  'body' => request('body'), //
         * ]
        */
    }
}
