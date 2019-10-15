<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function homepage(Request $request)
    {
        $posts = Post::when($request->search, function($query) use($request) {
                        $search = $request->search;

                        return $query->where('title', 'like', "%$search%")
                            ->orWhere('body', 'like', "%$search%");
                    })->with('tags', 'category', 'user')
                    ->withCount('comments')
                    ->published()
                    ->orderBy('created_at', 'desc')
                    ->simplePaginate(3);

        $categories = Category::all();

        return view('pages.homepage', get_defined_vars());
    }

    public function post($post_id)
    {
        $post = Post::find($post_id);
        $comments = Comment::where('post_id', $post_id)
                    ->orderBy('created_at', 'desc')
                    ->get();
        $tag_ids = $post->tags;
        $relatedPosts = Post::whereHas('tags', function($q) use ($tag_ids) {
                            $q->whereIn('tags.id', $tag_ids);
                        })
                        ->orWhere('category_id', $post->category->id)
                        ->orderBy('created_at', 'desc')
                        ->take(3)
                        ->get();
        if ($relatedPosts == null) {
            $relatedPosts = Post::all()->orderBy('created_at', 'desc')->take(3)->get();
        }

        return view('pages.article', get_defined_vars());
    }

    public function category($category_id)
    {
        $category = Category::find($category_id);
        $posts = Post::where('category_id', $category_id)
                    ->with('tags', 'category', 'user')
                    ->withCount('comments')
                    ->orderBy('created_at', 'desc')
                    ->published()
                    ->get();

        return view('pages.categories', get_defined_vars());
    }

}
