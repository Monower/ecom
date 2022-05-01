@extends('master')
@section('content')
    


<div class="container custom-login">
    <div class="row">
        <div class="col-sm-offset-4">
            <form action="register" method="POST">
                @csrf
                <fieldset>
                  <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">User Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" placeholder="Enter username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
                    <input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-primary">Register</button>
                </fieldset>
              </form>
        </div>

    </div>

</div>
  
  

@endsection