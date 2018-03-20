@extends('welcome')

@section('content')
  <div class="container top_section mt-3">
    <div class="row">
      <div class="col-xs-12 col-lg-6 image_container text-center mb-3">
            <div class="pt-3">
                <img class="image_upload" src="http://placehold.it/478X478" alt="">
            </div>
            <form class="" action="getFaceAppResults" method="post">
                @csrf
                <div class="input-group py-3 px-4 upload_button align-center">
                  <input name="imageUrl" type="text" class="form-control" placeholder="Image URL" aria-label=""  aria-describedby="basic-addon1">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Go</button>
                  </div>
                </div>
            </form>
        </div>
        <div class="col-xs-12 col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Results</h5>
              <hr>
              @if (!empty($faceData))
                <ul class="list-group list-group-flush">
                    <?php dump($faceData); ?>
                    <li class="list-group-item"><strong>Age: {{ $faceData['faces']['0']['attributes']['age']['value'] }}</strong></li>
                    <li class="list-group-item"><strong>Gender: {{ $faceData['faces']['0']['attributes']['gender']['value'] }}</strong></li>
                    <li class="list-group-item"><strong>Smiling</strong></li>
                     @endif
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>


@endsection
