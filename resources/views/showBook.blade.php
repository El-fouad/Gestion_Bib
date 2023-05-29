<link rel="stylesheet" href="{{ asset('css/showBook.css') }}">
@extends('layouts.app')
@section('content')
    <div class="infosNewBook">
        <h1>  Les Informations de Livre </h1>
        <div class="showInfosBook">
            <table class="table caption-top"  style="width: 80%;textAlign:center">
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
            <div class="container d-flex justify-content-around ">

                <a href={{ route('books.edit', $book->id) }}>
                    {{-- <button class="editBTN"> Modifier les Informations</button> --}}
                    <button type="button" class="btn btn-primary">Modifier</button>
                </a>
                <form action="{{ route('books.destroy', $book->id) }}" method='post'>
                    @csrf
                    @method('DELETE')
                    {{-- <button type="submit" class="editBTN suppBTN">suppremier le livre</button> --}}
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </div>

        </div>
    </div>
@endsection
