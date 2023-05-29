<link rel="stylesheet" href="{{ asset('css/category.css') }}">
@extends('layouts.app')
@section('content')

<div class="category">
    <h1>categorys :</h1>
    <div class="categorysCard">
        <div class="categoryCard">
            @foreach ($genre as $cate)
            <div class="card" onclick="location.href='category/filter/{{$cate}}'">
                <div class="cate_text">
                    <h1>{{$cate}}</h1>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>
@endsection