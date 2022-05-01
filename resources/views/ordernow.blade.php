@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-4">
        

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Amount</th>
        <th scope="col">Tax</th>
        <th scope="col">Delivery</th>
        <th scope="col">Total Amount</th>
      </tr>
    </thead>
    <tbody>
      <tr class="table-active">
        <th scope="row">{{$data}}</th>
        <td>0</td>
        <td>$ 10</td>
        <td>{{$data+10}}</td>
      </tr>
    </tbody>
  </table>
    <div class="container">
        

<form action="/orderplace" method="POST">
    @csrf
    <fieldset>
      <div class="form-group">
        <label for="exampleTextarea" class="form-label mt-4">Enter Your Delivery Address</label>
        <textarea class="form-control" id="exampleTextarea" rows="3" name="address"></textarea>
      </div>
      <fieldset class="form-group">
        <legend class="mt-4">Select Payment Method</legend>
        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="paymentop" id="optionsRadios1" value="cash" checked="">
            Cash on Delivery
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="paymentop" id="optionsRadios2" value="emi">
            EMI
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="paymentop" id="optionsRadios3" value="online">
            Online Payment
          </label>
        </div>
      </fieldset>

 


      <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
  </form>
  
  
    </div>
  
  
    </div>

</div>
  
  

@endsection