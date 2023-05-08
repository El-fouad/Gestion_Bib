<link rel="stylesheet" href="{{ asset('css/showBooks.css') }}">
<!-- Latest compiled and minified CSS -->
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> --}}

@extends('layout')
@section('content')
    <div class="fielterBooks">
        <form action="">
            <input type="text" placeholder="fielter les livres avec categorie...">
            <input type="submit" value='Fielter'>
        </form>
    </div>
    <div class="zoneBooks">
        <div class="books">
            <table class="tableBooks">
                <tr>
                    <th>title</th>
                    <th>author</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>out of stock</th>
                    <th>total</th>
                </tr>
                @foreach ($books as $book)
                <tr class="bookInfo" onclick="location.href='books/{{ $book['id']}}'">
                            <td>{{ $book['title']}}</td>
                            <td>{{ $book['author']}}</td>
                            <td>{{ $book['genre']}}</td>
                            <td>{{ $book['date']}}</td>
                            <td class="outOfStock">5</td>
                            <td>{{ $book['stock']}}</td>
                        </tr>
                @endforeach
            </table>
            {{$books->links()}}
        </div>
    </div>
@endsection
