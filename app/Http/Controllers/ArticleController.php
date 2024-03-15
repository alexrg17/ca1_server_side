<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'post_id' => 'required|exists:posts,id',
        ]);

        Article::create($validatedData);

        return redirect()->back()->with('success', 'Article created successfully!');
    }

    public function createArticle($postId)
    {
        session(['globalvariable' => $postId]);
        return view('blog.Article');
    }
}
