@extends('master') @section('content')
<div class="row">
    <div class="col">
        <form action="updateSettings" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Change Name</label>
                <input name="name"  class="form-control"  aria-describedby="nameHelp" placeholder="Enter name" value="{{ $userSettings->name }}">
                <label for="exampleInputEmail1">Change Email</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{ $userSettings->email }}">

            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
