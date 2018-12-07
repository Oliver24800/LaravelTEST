@extends('layouts.master')

@section('header')



  @include('header')

@endsection

@section('content')


    {{--<img class="myVideo fade" style="margin-top: 45px; opacity: 0.5;" src="{{ asset("img/black.jpg") }}" >--}}

    {{--video background test voor later gebruik want maybe later gebruiken dont deletus dis--}}

    <video autoplay muted loop id="myVideo" style="margin-top: 40px;" class="gray">
        <source src="{{ asset("video/bg_Large.mp4") }}" type="video/mp4">
    </video>

    {{--inlog dingdong--}}

    <div class="modal-content zoom2" style="position: absolute; bottom: 10px; padding: 25px; margin: 70px; margin-bottom: 300px; background-color: #1e1e1e; ">
        <form action="{{URL::to('/logs')}}">
            <h1 style="margin-top: 0px;">Welcome!</h1>
            <label style="font-size: 25px; margin-left: 20px">Email </label><br>
            <input type="text" name="email" placeholder="email@email.com" required style="margin-left: 10px">
            <label style="font-size: 25px; margin-left: 20px">Password </label><br>
            <input type="password" name="password" placeholder="Password123" required style="margin-left: 10px">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <button class="button2">Login</button><br><br>
            <label style="font-size: 20px; margin-left: 20px">Don't have a account yet? <a style="color: #d25400" href="http://localhost:8888/2018-2019/periode2.1/BAP/LaravelTEST/public/opleidingen">Sign up here!</a>  </label><br>


        </form>
    </div>






    @endsection