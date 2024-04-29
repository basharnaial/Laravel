<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function createArticle(Request $request){
        $aricle = Article::create([
            "title" => "SE vs game Dev",
            "body" => "please keep going"
        ]);
        return $aricle;
    }

    function getArticles(){
    $articles = Article::all();
    return $articles;

    }

    function getArticle($id){
        $article = Article::find($id);
        return $article;
    }

    function deleteArticle($id){
        $article = Article::find($id);
        $article->delete();
        return "article " . $article->id . " has been deleted";
    }


    function updateArticle(Request $request, $id){
        $article = Article::find($id);
        $article->title = $request->input("title");
        $article->body = $request->input("body");
        $article->save();
        return $article;
    }

}
