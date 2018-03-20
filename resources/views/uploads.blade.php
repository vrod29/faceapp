@extends('welcome')

@section('content')
  <div class="container top_section">
    <div class="row">
      <div class="col-6 image_container text-center">
        <div class="image_upload pt-3">
          <div class="">
            <img src="http://placehold.it/478X478" alt="">
          </div>
        </div>
        <div class="input-group py-3 px-4 upload_button align-center">
          <input type="text" class="form-control" placeholder="Image URL" aria-label=""  aria-describedby="basic-addon1">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">Go</button>
          </div>
        </div>
        </div>
        <div class="col-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Results</h5>
              <hr>
              @if (!empty($faceData))


                <ul class="list-group list-group-flush">
                    <?php dump($faceData); ?>
                    <li class="list-group-item"><strong>Age:{{ $faceData['faces']['0']['attributes']['age']['value'] }}</strong></li>
                    <li class="list-group-item"><strong>Gender:{{ $faceData['faces']['0']['attributes']['gender']['value'] }}</strong></li>
                    <li class="list-group-item"><strong>Smiling</strong></li>
                     @endif
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
