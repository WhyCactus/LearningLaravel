<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List-books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Home</h1>
    <div class="container">
        <a href="{{ route('book.create') }}"><button type="button" class="btn btn-primary">Add</button></a>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Thumbnail</th>
                    <th scope="col">Author</th>
                    <th scope="col">Publisher</th>
                    <th scope="col">Publication</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Category</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <th scope="row">{{ $book->id }}</th>
                        <td>{{ $book->title }}</td>
                        <td><img src="{{ $book->thumbnail }}" width="100" alt=""></td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->publicsher }}</td>
                        <td>{{ $book->publication }}</td>
                        <td>{{ $book->price }}</td>
                        <td>{{ $book->quantity }}</td>
                        <td>{{ $book->cate_name }}</td>
                        <td>
                            {{-- <a href="{{ route('page.book-detail', $book->id) }}"><button type="button"
                                    class="btn btn-success">Detail</button></a> --}}
                            <a href="{{ route('book.edit', $book->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('book.destroy', $book->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
