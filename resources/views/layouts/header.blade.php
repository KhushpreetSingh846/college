@extends('layouts.homepage')

@section('header')
    <div class="hamburger"><button id="btn" onclick="myfun()"> ☰ </button>
        <nav id="navi">
            <ul>
                <li> <a href ="#"> Home </a> </li>
                <li> <a href ="#"> Tests </a> </li>
                <li> <a href ="#"> Packages </a> </li>
                <li> <a href ="#"> About </a></li>
                <li> <a href ="#"> Services </a></li>
                <li> <a href ="#"> Login </a></li>
                <li> <a href ="#"> Register </a></li>
            </ul>
        </nav>
    </div>
    <div class="container header">
        <div class="row ">
            <h2 class=" col-3 my-3 "><span class="bg-danger p-1">Smart</span><span class="mycolor p-1">Lab</span></h2>
            <ul class="col-9">
                <li><a href="">Home</a></li>
                <li><a href="">Test</a></li>
                <li><a href="">Packages</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Services</a></li>
                <li><a href=""><span class="mycolor p-1 text-white">Login</span></a></li>
                <li><a href=""><span class="p-1 bg-warning text-white">Register</span></a></li>
            </ul>
        </div>
    </div>
@endsection