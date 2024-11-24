<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    public function home()
    {
        //Hiển thị 8 bài viết mới nhất
        $posts = DB::table('posts')
            ->orderByDesc('id')
            ->limit(8)
            ->get();
        //Hiển thị ra View
        return view('home', compact('posts'));
    }

    //Hiển thị danh sách bài viết theo danh mục categories
    public function list($id)
    {
        $posts = DB::table('posts')
            ->where('category_id', $id)
            ->get();
        return view('list-post', compact('posts'));
    }

    //Hiển thị chi tiết bài viết
    public function detail($id)
    {
        $posts = DB::table('posts')
            ->where('id', $id)
            ->first();
        return view('detail', compact('posts'));
    }

    public function test()
    {
        // Lấy toàn bộ dữ liệu
        $posts = Post::all();

        $posts = Post::query()
            ->lastest('id')
            ->limit(10)
            ->get();

        $posts = Post::query()
            ->where('category_id', 1)
            ->get();
        return $posts;
    }

    public function index()
    {
        //sử dụng phân trang
        $posts = Post::query()->paginate(8);

        return view('list-post', compact('posts'));
    }
}

