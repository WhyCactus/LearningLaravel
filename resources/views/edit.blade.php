<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="{{ route('book.update') }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="" value="{{ $post->title }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Thumbnail</label>
                <img src="{{ storage::url($post->image) }}" width="60" alt="">
                <input type="text" name="thumbnail" class="form-control" id="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Publisher</label>
                <input type="text" name="publicsher" class="form-control" id=""
                    value="{{ $post->publicsher }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Publication</label>
                <input type="text" name="publication" class="form-control" id=""
                    value="{{ $post->publication }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Price</label>
                <input type="number" name="price" step="0.1" class="form-control" id=""
                    value="{{ $post->price }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Quantity</label>
                <input type="number" name="quantity" class="form-control" id="" value="{{ $post->quantity }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Category name</label>
                <select type="text" name="category_id" class="form-control" id="">
                    @foreach ($categories_book as $cate)
                        <option value="{{ $cate->id }}" @if{{ $cate->id == $post->category_id }} selected @endif>
                            {{ $cate->cate_name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Edit</button>
                <a href="{{ route('book.index') }}" class="btn btn-primary">List</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>