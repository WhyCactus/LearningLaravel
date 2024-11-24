@extends('admin.layout')

@section('title', 'Danh sách bài viết')

@section('content')

    <div class="m-5">
        <table class="table">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>
                        <a href="#" class="btn btn-primary">Thêm</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($post as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->title }}</td>
                        <td>
                            <img src="{{ $p->thumbnail }}" width="50px" alt="">
                        </td>
                        <td>{{ $p->description }}</td>
                        <td>{{ $p->category_id }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{ post->link() }} --}}
    </div>

@endsection
