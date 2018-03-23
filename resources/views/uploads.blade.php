@extends('master')

@section('content')
  <div class="container top_section mt-3">
    <div class="row">
      <div class="col-xs-12 col-lg-6 image_container text-center mb-3">
            <div class="pt-3">
                    <img id="singleImageUpload" class="image_upload" src="{{ $img or 'http://placehold.it/478X478' }}" alt="">
            </div>
            <form class="" action="getFaceAppResults" method="post">
                @csrf
                <div class="input-group py-3 px-4 upload_button align-center">
                  <input id="urlInput" name="imageUrl" type="text" class="form-control" placeholder="Image URL" aria-label=""  aria-describedby="basic-addon1">
                  <div class="input-group-append">
                    <button id="submitButton" class="btn btn-primary" type="submit">Go</button>
                  </div>
                </div>
            </form>
        </div>
        <div class="col-xs-12 col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Results</h5>
              <hr>

              @if (!empty($faceData['faces']))
                <ul class="list-group list-group-flush">
                    <?php dump($faceData); ?>
                    <li class="list-group-item"><strong>Age: {{ $faceData['faces']['0']['attributes']['age']['value'] }}</strong></li>
                    <li class="list-group-item"><strong>Gender: {{ $faceData['faces']['0']['attributes']['gender']['value'] }}</strong></li>
                    <li class="list-group-item"><strong>Sadness percentage: {{ $faceData['faces']['0']['attributes']['emotion']['sadness'] }}</strong></li>
                    <li class="list-group-item"><strong>Neutral emotion percentage: {{ $faceData['faces']['0']['attributes']['emotion']['neutral'] }}</strong></li>
                    <li class="list-group-item"><strong>Disgust percentage: {{ $faceData['faces']['0']['attributes']['emotion']['disgust'] }}</strong></li>
                    <li class="list-group-item"><strong>Anger percentage: {{ $faceData['faces']['0']['attributes']['emotion']['anger'] }}</strong></li>
                    <li class="list-group-item"><strong>Surprise percentage: {{ $faceData['faces']['0']['attributes']['emotion']['surprise'] }}</strong></li>
                    <li class="list-group-item"><strong>Fear percentage: {{ $faceData['faces']['0']['attributes']['emotion']['fear'] }}</strong></li>
                    <li class="list-group-item"><strong>Happiness percentage: {{ $faceData['faces']['0']['attributes']['emotion']['happiness'] }}</strong></li>

                    @else
                        <h5>Please Enter a URL leading to an image of a face.</h5>
                @endif


                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>


@endsection

@section('javascript')

@endsection
