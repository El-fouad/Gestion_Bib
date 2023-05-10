<link rel="stylesheet" href="{{ asset('css/findBook.css') }}">
@extends('layout')
@section('content')
<div class="chercherBook">
    <form action="">
        <input type="text" placeholder="Nom de Livre ...">
        <input type="submit" value='Cherche'>
    </form>
</div>
@endsection


