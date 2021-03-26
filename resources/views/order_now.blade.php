@extends('master')
@section('content')
  <!-- Fetch data from database to make slides -->
  <div class="custom-product"> 
    <div class="col-sm-10">
    <table class="table">
 
    <tbody>
      <tr>
        <td>Amount</td>
        <td>{{$total}} Tsh.</td>
       
      </tr>
      <tr>
        <td>Tax</td>
        <td>0 Tsh.</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>2000 Tsh</td>
        
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>{{$total + 2000}} Tsh.</td>

      </tr>
    </tbody>
  </table>
  <div>
  <form action="/order_place" method="POST">
  @csrf
  <div class="form-group">
    <textarea name ="address" placeholder="Enter your Address" class="form-control" id="email"></textarea><br><br>
  </div>
  <div class="form-group">
    <label for="pwd">Payment Method:</label><br><br>
    <input type="radio" value="cash" name="payment"><span>Mobile Payment:</span><br><br>
    <input type="radio" value="cash" name="payment"><span>Electronic Bank Transfer:</span><br><br>
    <input type="radio" value="cash" name="payment"><span>Payment On Delivery:</span><br><br>
  </div>
  <button type="submit" class="btn btn-default">Order Now</button>
</form>
  </div>
    </div>
</div>
@endsection