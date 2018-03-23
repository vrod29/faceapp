@extends('master')

@section('title')
  FaceApp
@endsection

@section('content')
    <header id="home-section">
      <div class="dark-overlay">
        <div id="top" class="jumbotron mb-0">
          <div class="container">
            <div class="row">
              <div class="col-8 col-lg-6 col-xs-12 justify-content-left">
                <div class="blog-card spring-fever">
                  <div class="title-content mt-5">
                    <h1 class="display-1 text-white">Face App</h1>
                    <div class="intro">
                      <p class="display-4 text-white">WHO ARE YOU?</p>
                    </div>
                  </div>
                  <div class="card-info">
                    <p class="lead">What do your pictures say about you?</p>
                    <p class="lead">Share your best shots with your friends and the rest of the world instantly.</p>
                    <a href="/register" class="btn btn-lg btn-primary mb-3">Register</a>
                  </div>
                  <div class="gradient-overlay"></div>
                  <div class="color-overlay"></div>
                </div><!-- /.blog-card -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
@endsection
