<link rel="stylesheet" href="{{ asset('css/showBook.css') }}">
@extends('layout')
@section('content')
    <div class="infosNewBook">
        <h1> <button onclick=""><</button> Les Informations de Livre </h1>
        {{-- th>title</th>
        <th>author</th>
        <th>Category</th>
        <th>Date</th>
        <th>out of stock</th>
        <th>total</th> --}}
        <div class="showInfosBook">
            <table border="2" style="width: 80%;textAlign:center">
                <tr>
                    <th class="textInfoShow">Nom livre </th>
                    <th>
                        <h3>{{ $book->title }}</h3>
                    </th>
                </tr>
                <tr>
                    <th class="textInfoShow">Auteur livre </th>
                    <th>
                        <h3>{{ $book->author }}</h3>
                    </th>
                </tr>
                <tr>
                    <th class="textInfoShow">Description </th>
                    <th>
                        <h3>{{ $book->description }}</h3>
                    </th>
                </tr>
                <tr>
                    <th class="textInfoShow">Catégory </th>
                    <th>
                        <h3>{{ $book->genre }}</h3>
                    </th>
                </tr>
                <tr>
                    <th class="textInfoShow">Quantity </th>
                    <th>
                        <h3>{{ $book->stock }}</h3>
                    </th>
                </tr>
                <tr>
                    <th class="textInfoShow">la date </th>
                    <th>
                        <h3>{{ $book->date }}</h3>
                    </th>
                </tr>
            </table>
            <a href={{ route('books.edit', $book->id) }}>
                <button class="editBTN"> Modifier les Informations</button>
            </a>
            <form action="{{ route('books.destroy', $book->id) }}" method='post'>
                @csrf
                @method('DELETE')
                <button type="submit" class="editBTN suppBTN">suppremier le livre</button>
            </form>

        </div>
    </div>
@endsection
