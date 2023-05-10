<h1>helloo</h1>
@foreach ($books as $book)
    <div>{{ $book['title'] }}</div>
@endforeach
@dd($books)