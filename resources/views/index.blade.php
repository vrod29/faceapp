@extends('welcome')

@section('title')
  FaceApp
@endsection

@section('content')
    <header id="home-section">
      <div class="dark-overlay">
        <div id="top" class="jumbotron">
          <div class="container">
            <h1 class="display-1">Face App</h1>
            <p class="display-4">WHO ARE YOU?</p>
            <p class="lead">What do your pictures say about you?</p>
            <p class="lead">Share your best shots with your friends and the rest of the world instantly.</p>
            <a href="/register" class="btn btn-lg btn-primary">Register</a>
          </div>
        </div>
      </div>
    </header>
@endsection
