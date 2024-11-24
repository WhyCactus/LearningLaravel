<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::query()
            ->paginate(8);
        return view("admin.post.index", compact("post"));
    }
}
