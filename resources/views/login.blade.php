@extends('master')
@section('content')
    


<div class="container">
    <div class="row">
        <div class="col-sm-offset-4">
            <form>
                <fieldset>
                  <legend>Legend</legend>
                  <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </fieldset>
              </form>
        </div>

    </div>

</div>
  
  

@endsection