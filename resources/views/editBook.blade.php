
<link rel="stylesheet" href="{{ asset('css/createBook.css') }}">
@extends('layout')
@section('content')
    

<div class="infosNewBook">
    <h1>Les Informations de Livre :</h1>
    <div class="formInfosBook">
        <form action="{{route('books.update',$book->id)}}" method="post" >
            @csrf
            @method('PUT')
            <table>
                <tr>
                    <th class="textInfo">Nom livre </th>
                    <th><input value={{$book->title}} type="text" id="fname" name="title"
                            placeholder="Entree Nom de livre">
                    </th>
                </tr>
                <tr>
                    <th class="textInfo">Auteur livre </th>
                    <th>
                        <input value={{$book->author}} type="text" id="fname" name="author"
                            placeholder="Entree author de livre">
                    </th>
                </tr>
                <tr>
                    <th class="textInfo">Description </th>
                    <th><input value={{$book->description}} type="text" id="fname" name="description"
                            placeholder="Entree description de livre">
                    </th>
                </tr>
                <tr>
                    <th class="textInfo">Catégory </th>
                    <th><input value={{$book->genre}} type="text" id="fname" name="genre"
                            placeholder="Entree Catégory de livre">
                    </th>
                </tr>
                <tr>
                    <th class="textInfo">Quantity </th>
                    <th><input value={{$book->stock}} type="text" id="fname" name="stock"
                            placeholder="Entree Number de livre">
                    </th>
                </tr>
                <tr>
                    <th class="textInfo">la date  </th>
                    <th>
                        <input value={{$book->date}} type="date" id="fname" name="date"
                            placeholder="Entree La date de lancement ">
                    </th>
                </tr>
            </table>
            <button class="addBTN" type="submit" >Modifier </button>
        </form>
    </div>
</div>
@endsection