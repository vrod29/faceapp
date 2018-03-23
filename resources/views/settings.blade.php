@extends('master')

@section('content')
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-8">
        <div class="card">

          <div class="card-header">
            <h6>Change User Settings</h6>
            <div class="card-body">
              <form action="updateSettings" method="post">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Change Name</label>
                      <input name="name"  class="form-control mb-3"  aria-describedby="nameHelp" placeholder="Enter name" value="{{ $userSettings->name }}">
                    <label for="exampleInputEmail1">Change Email</label>
                      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{ $userSettings->email }}">
                  </div>
                  <button class="btn btn-primary" type="button" name="button">Reset Password</button>
                  <br />
                  <button id="submitSettings" type="submit" class="btn btn-primary">Submit</button>
              </form>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
