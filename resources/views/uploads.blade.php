@section('content')
<div class="row">
    <div class="col">
        <form class="" action="getFaceAppResults" method="post">
            @csrf
            <div class="input-group mb-3">
                <input class="form-control" type="text" name="imageUrl" value="">
                <button type="submit" class="btn btn-primary" name="button">Submit</button>
            </div>
        </form>


    </div>
</div>


@endsection
