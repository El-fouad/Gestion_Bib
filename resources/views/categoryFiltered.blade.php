<link rel="stylesheet" href="{{ asset('css/category.css') }}">
<!-- Latest compiled and minified CSS -->
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> --}}

@extends('layouts.app')
@section('content')
    <div class="fielterBooks">
        <form action='{{route('books.category')}}' method="post">
            @csrf
            {{-- <input type="text" name="category" placeholder="fielter les livres avec categorie..."> --}}
            <select name="category" id="fname" id="">
                <option value="Roman ">Roman </option>
                <option value="Essai ">Essai </option>
                <option value="Poésie ">Poésie </option>
                <option value="Théâtre ">Théâtre </option>
                <option value="Biographie ">Biographie </option>
                <option value="Autobiographie">Autobiographie</option>
                <option value="Histoire ">Histoire </option>
                <option value="Policier">Policier</option>
                <option value="fantaisie">fantaisie</option>
            </select>
            <input type="submit" value='Filter'>
        </form>
    </div>
    <div class="zoneBooks">
        <div class="books">
            <table class="table caption-top">
                <tr>
                    <th></th>
                    <th>title</th>
                    <th>author</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>total</th>
                </tr>
                <?php $ind = 0?>
                @foreach ($books as $book)
                <tr class="bookInfo" onclick="location.href='../../books/{{ $book['id']}}'">
                    <td class="outOfStock">{{$ind+=1}}</td>
                            <td>{{ $book['title']}}</td>
                            <td>{{ $book['author']}}</td>
                            <td>{{ $book['genre']}}</td>
                            <td>{{ $book['date']}}</td>
                            <td>{{ $book['stock']}}</td>
                </tr>
                @endforeach
            </table>
            {{$books->links()}}
        </div>
    </div>
@endsection
