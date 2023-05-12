
<link rel="stylesheet" href="{{ asset('css/createBook.css') }}">
@extends('layout')
@section('content')
    

<div class="infosNewBook">
    <h1>Les Informations de Livre :</h1>
    {{-- th>title</th>
        <th>author</th>
        <th>Category</th>
        <th>Date</th>
        <th>out of stock</th>
        <th>total</th> --}}
    <div class="formInfosBook">
        <form action="{{route('books.store')}}" method="POST" >
            @csrf
            <table>
                <tr>
                    <th class="textInfo">Nom livre </th>
                    <th><input type="text" id="fname" name="title"
                            placeholder="Entree Nom de livre">
                    </th>
                </tr>
                <tr>
                    <th class="textInfo">Auteur livre </th>
                    <th>
                        <input type="text" id="fname" name="author"
                            placeholder="Entree author de livre">
                    </th>
                </tr>
                <tr>
                    <th class="textInfo">Description </th>
                    <th><input type="text" id="fname" name="description"
                            placeholder="Entree description de livre">
                    </th>
                </tr>
                <tr>
                    <th class="textInfo">Catégory </th>
                    <th>
                        {{-- <input type="text" id="fname" name="category"
                            placeholder="Entree Catégory de livre"> --}}
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
                    </th>
                </tr>
                <tr>
                    <th class="textInfo">Quantity </th>
                    <th><input type="text" id="fname" name="quantity"
                            placeholder="Entree Number de livre">
                    </th>
                </tr>
                <tr>
                    <th class="textInfo">la date  </th>
                    <th><input type="date" id="fname" name="date"
                            placeholder="Entree La date de lancement ">
                    </th>
                </tr>
            </table>
            <button class="addBTN" type="submit" >Add Livres</button>
        </form>
    </div>
</div>
@endsection