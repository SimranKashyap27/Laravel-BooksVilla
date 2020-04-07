@extends('layouts.master')

@section('content')
<br><br>
<div class="container" style="background-color:white;">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Book name</th>
        <th>Quantity</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Nichelle Clarke Crime Thrillers</td>
        <td>1</td>
        <td>12</td>
      </tr>
      <tr>
        <td>The Greatness Guide</td>
        <td>1</td>
        <td>24</td>
      </tr>
      <tr>
        <td></td>
        <td><b>Total: </b></td>
        <td><b>24</b></td>
      </tr>
    </tbody>
  </table>
  <center><button style="padding: 14px 40px; border-radius:12px; background-color:green; margin-left:95px; color:white" onclick="myFunction()">Pay Now</button></center>
  <script>
function myFunction() {
  alert("Order Placed Succesfully!");
}
</script>
</div>
@endsection