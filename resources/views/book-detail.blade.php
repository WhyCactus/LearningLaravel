<div>
    <h3>{{ $books->title }}</h3>
    <img src="{{ $books->thumbnail }}" width="250" alt="">
    <h4>Author: {{ $books->author }}</h4>
    <h4>Publisher: {{ $books->publicsher }}</h4>
    <h4>Publication: {{ $books->publication }}</h4>
    <h4>Price: {{ $books->price }}</h4>
    <h4>Quantity: {{ $books->quantity }}</h4>
</div>
