<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;

class ArticlesController extends Controller
{
    public function view_all(){
        return view('article.all')
            ->with('articles',Articles::all());
    }
    public function view_article($id){
        return view('article.view')
            ->with('article',Articles::findOrFail($id));
    }
    public function view_last(){
        $article_id = (string)Articles::latest()->first()->id;
        return $this->view_article($article_id);
    }
    public function create(FormBuilder $formBuilder){
        $form = $formBuilder->create(\App\Forms\ArticleForm::class,[
           'method'=>'POST',
           'url' => route('article.store'),
        ]);
        return view('article.create', compact('form'));
    }

    public function store(Request $request){
        $articles = new Articles();
        $form_data = $request->all();
        extract($form_data, EXTR_OVERWRITE);
        $articles->title = $title;
        $articles->description = $description;
        $articles->article_text = $article_text;
        $articles->save();
        return redirect('/');
    }
}
