<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        ///Render a list a resource
        if(request('tag')){
            $articles = Tag::where('name',request('tag'))->firstOrFail()->articles;
        } else {
            $articles = Article::latest()->get();
        }
        
        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        //Show a single resource
        // $article = Article::find($id); //Article:: where('id',1)->first()
        return view('articles.show', ['article' => $article]);
    }

    public function create() {
        //Shows a view to create a new resource
        return view('articles.create', [
            'tags' => Tag::all()
        ]);
    }

    public function store() {
        //Persist the new resource

        // Article::create($this->validateArticle());
        $this->validateArticle();
        $article = new Article(request(['title','excerpt','body']));
        $article->user_id = 1;
        $article->save();
        $article->tags()->attach(request('tags')); //çok ilişkili tabloda insert ara tabloya
        
        /*Article::create(request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]));*/

        /*$validatedAttributes =  request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
        Article::create($validatedAttributes);*/

        /*Article::create([
            'title' => request('title'),
            'excerpt' => request('excerpt'),
            'body' => request('body'),
        ]);*/

        /*$article = new Article();
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();*/

        // return redirect('/articles');
        return redirect(route('articles.index'));
    }

    public function edit(Article $article) {
        //Show a view to edit an existing resource

        //return view('articles.edit',['article'=>$article]); same thing down
        return view('articles.edit',compact('article'));
    }

    public function update(Article $article) {
        //Persist the edited resource

        Article::update($this->validateArticle());
        // return redirect('/articles/'.$article->id); //instead use route
        // return redirect(route('articles.show', $article));
        return redirect($article->path());

    }

    public function destroy() {
        //Delete the resource 
    }

    protected function validateArticle() {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'tags' => 'exists:tags,id'
        ]);
    }
}
