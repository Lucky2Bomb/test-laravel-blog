<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getCategoriesForNewPost()
    {
        $categories = Category::orderBy('title')->get();
        return view('pages.new-post', [
            'categories' => $categories
        ]);
    }

    public function submit(PostRequest $req)
    {
        $allcount_posts = Post::count();
        $category_id = $req->category_id;
        $title = $req->title;
        $description = $req->description;
        $text = $req->text;
        $post = DB::table('posts')->insert([
            'category_id' => $category_id,
            'title' => $title,
            'slug' => 'post-' . ($allcount_posts + 1),
            'description' => $description,
            'text' => "<p>$text</p>",
        ]);
        $currentCategory = Category::where('id', $category_id)->first();
        $category_slug = $currentCategory->slug;
        $post_slug = 'post-' . ($allcount_posts + 1);
        return redirect("/category/$category_slug/$post_slug");
    }
}
