<?php

namespace App\Http\Controllers;

use App\Models\Category_Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;

class BookController extends Controller
{
    public function listbook()
    {
        // $high_books = DB::table('books')
        //     ->orderBy('price')
        //     ->limit(5)
        //     ->get();
        // $low_books = DB::table('books')
        //     ->orderByDesc('price')
        //     ->limit(5)
        //     ->get();
        // return view('list-book', compact('high_books', 'low_books'));
    }

    public function bookdetail($id)
    {
        $books = DB::table('books')
            ->where('id', $id)
            ->first();
        return view('book-detail', compact('books'));
    }

    public function index()
    {
        $books = DB::table('books')
            ->join('categories_book', 'category_id', '=', 'categories_book.id')
            ->select('books.*', 'cate_name')
            ->orderBy('id')
            ->get();
        return view('index', compact('books'));
    }

    public function create()
    {
        $categories_book = DB::table('categories_book')->get();
        return view('create', compact('categories_book'));
    }

    public function store(request $request)
    {
        // $data = $request->except('image');

        // if ($request->hasFile('image')) {
        //     $path = $request->file('image')->storage('images');
        // }
        // $data['image'] = $path;

        // Post::query()->create($data);

        // return redirect()->route('book.index');

        // dd($request->all());
        $data = [
            'title' => $request['title'],
            'author' => $request['author'],
            'thumbnail' => $request['thumbnail'],
            'publicsher' => $request['publicsher'],
            'publication' => $request['publication'],
            'price' => $request['price'],
            'quantity' => $request['quantity'],
            'category_id' => $request['category_id'],
        ];
        dd($data);
    }

    public function destroy($id)
    {
        DB::table('books')->delete($id);
        return redirect()->route('book.index');
    }

    // public function edit($id)
    // {
    //     $book = DB::table('books')
    //         ->where('id', $id)
    //         ->first();
    //     dd($book);
    //     $categories = DB::table('categories')->get();
    //     return view('book.edit', compact('book', 'categories'));
    // }

    public function edit(Request $request, Book $book)
    {
        $categories = Category_Book::all();
        return view('edit', compact('book', 'categories'));
    }

    public function update(Request $request, Book $book)
    {
        $data = $request->except('image');

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images');
            Storage::delete($book->image);
            $data['image'] = $path;
        }

        $book->update($data);

        return redirect()->route('book.index')->with('message', 'Cập nhật thành công');
    }

    //Xoá dữ liệu
    public function delete(Book $book)
    {
        Storage::delete($book->image);
        $book->delete();
        return redirect()->route('book.index')->with('Xoá thành công');
    }
}
