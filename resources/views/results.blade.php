@extends('welcome')
@section('content')
    <div class="row">
        <div class="col-4 mt-5 pt-5">
            <div class="row">
                <div class="col">
                    <?php dump($faceData); ?>

                    <h5>{{ $faceData['faces']['0']['attributes']['gender']['value'] }}</h5>
                    <h5>{{ $faceData['faces']['0']['attributes']['age']['value'] }}</h5>
                    <h5>{{ $faceData['faces']['0']['attributes']['ethnicity']['value'] }}</h5>
                    <h5>{{ $faceData['faces']['0']['attributes']['gender']['value'] }}</h5>

                </div>
            </div>


        </div>
    </div>
@endsection
