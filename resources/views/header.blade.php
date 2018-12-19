@extends('layouts.master')

@section('header')



    <ul>
        <strong> <a href="http://localhost:8888/2018-2019/periode2.1/BAP/LaravelTEST/public/"><img class="fade" src="{{ asset("img/orange.png") }}" alt="ScargoReviews" style="width: 5em; margin-left: 400px; margin-top: 10px"></a>
            <a href="../public" class="btn btn-default"><li class="fade"><button  class="button">Login</button></li></a>
            <li class="fade"><img src="{{ asset("img/search.png") }}" alt="ScargoReviews" style="width :25px; margin-left: 10px;margin-top: 10px"></li>
            <li class="fade"><a href="http://localhost:8888/2018-2019/periode2.1/BAP/LaravelTEST/public/review">Reviews</a></li>
            <li class="fade"><a href="#news">News</a></li>
            <li class="fade"><a href="#console">Console</a></li>
            <li class="fade"><a href="#pc">PC</a></li>
        </strong>
    </ul>

    <style>
        body {
            background-color: #333333;
        }
    </style>

@endsection