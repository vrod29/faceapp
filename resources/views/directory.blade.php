@extends('master')

@section('content')
  <div class="container">
    <h1 class="my-4 text-center text-lg-left">Image Directory</h1>
    <div class="row text-center text-lg-left">
        @foreach ($userImages as $img)
            <div class="col-lg-3 col-md-4 col-xs-6">
              <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="{{ $img->image_url }}" alt="">
              </a>
            </div>
        @endforeach



    </div>



  </div>

@endsection
