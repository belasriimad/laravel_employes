@extends('layouts.main')

@section('title')
    Employes Management System
@endsection

@section('content')
<div class="container my-5 p-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-3">
                <h2>Welcome Back </h2>
                <hr>
                @guest
                    <a href="{{route('login')}}" class="btn btn-outline-info">Login</a>
                @endguest
                @auth
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="logout_link">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-outline-danger mx-3">
                                        {{ __('Logout') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="home_page_link">
                            <a href="{{route('home')}}" class="btn btn-outline-primary">Home</a>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</div>
@endsection
