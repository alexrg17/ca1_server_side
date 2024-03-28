<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'post_id' => 'required|exists:posts,id',
        ]);
    
        $article = new Article();
        $article->title = $validatedData['title'];
        $article->content = $validatedData['content'];
        $article->post_id = $validatedData['post_id'];
        $article->save();
    
        // Redirect to the home page
        return redirect('/')->with('success', 'Article created successfully!');
    }
    
    public function createArticle($postId)
    {
        session(['GBvariable' => $postId]);
         return view('blog/Article');
    }

    public function showarticle($postid){
        
        $Articles=Article::where('post_id',$postid)->get();
        return view('blog/showarticle',['articles'=>$Articles]);
    }
    
}
