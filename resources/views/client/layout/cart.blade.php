@include('client.layout.head')
@include('client.layout.banner')
@include('client.layout.menu')
<style>
body {
font-family: Arial;
color: #211a1a;
font-size: 0.9em;
}

#shopping-cart {
margin: 40px;
}

#product-grid {
margin: 40px;
}

#shopping-cart table {
width: 100%;
background-color: #F0F0F0;
}

#shopping-cart table td {
background-color: #FFFFFF;
font-size: 18px;
}

.txt-heading {
color: #211a1a;
border-bottom: 1px solid #E0E0E0;
overflow: auto;
}

#btnEmpty {
background-color: #ffffff;
border: #d00000 1px solid;
padding: 5px 10px;
color: #d00000;
float: right;
text-decoration: none;
border-radius: 3px;
margin: 10px 0px;
}

.btnAddAction {
  padding: 5px 10px;
  margin-left: 5px;
  background-color: #efefef;
  border: #E0E0E0 1px solid;
  color: #211a1a;
  float: right;
  text-decoration: none;
  border-radius: 3px;
  cursor: pointer;
}

#product-grid .txt-heading {
margin-bottom: 18px;
}

.product-item {
float: left;
background: #ffffff;
margin: 30px 30px 0px 0px;
border: #E0E0E0 1px solid;
}

.product-image {
height: 155px;
width: 250px;
background-color: #FFF;
}

.clear-float {
clear: both;
}

.demo-input-box {
border-radius: 2px;
border: #CCC 1px solid;
padding: 2px 1px;
}

.tbl-cart {
font-size: 15px;
}

.tbl-cart th {
font-weight: normal;
font-size: 22px;
}

.product-title {
margin-bottom: 20px;
}

.product-price {
float:left;
}

.cart-action {
float: right;
}

.product-quantity {
  padding: 5px 10px;
  border-radius: 3px;
  border: #E0E0E0 1px solid;
}

.product-tile-footer {
  padding:15px 15px 0px 15px;
  overflow: auto;
}

.cart-item-image {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  border: #E0E0E0 1px solid;
  padding: 5px;
  vertical-align: middle;
  margin-right: 15px;
}
.no-records {
text-align: center;
clear: both;
margin: 38px 0px;
}
</style>
<BODY>
  <form action="/checkout" method="post">
    <!-- @csrf -->
    <input type="hidden" name="_token" value="<?php echo csrf_token()?>">
  <div id="shopping-cart">
    <div class="txt-heading" style="font-weight:bold; font-size:28px;">Shopping Cart</div>
    <table class="tbl-cart" cellpadding="10" cellspacing="1">
      <tbody>
        <tr>
          <th style="text-align:center;">No.</th>
          <th style="text-align:center;" width="10%">Image</th>
          <th style="text-align:center;">Product Name</th>
          <th style="text-align:center;" width="10%">Price</th>
          <th style="text-align:center;" width="5%">Quantity</th>
          <th style="text-align:center;" width="5%">Remove</th>
          <th style="text-align:center;" width="10%">Total</th>
        </tr>
        @php
        $add=0.00;
        @endphp
        @php
        $no=1;
        @endphp
        <form action="/checkout" method="post">
        <!-- @csrf -->
        <input type="hidden" name="_token" value="<?php echo csrf_token()?>">
        @foreach ($res as $val)
				<tr>
          <td style="text-align:center;">{{$no}}</td>
  				<td style="text-align:center;"><img src="{{asset('upload/'.$val->product_img)}}" class="cart-item-image" /></td>
  				<td style="text-align:center;">{{$val->product_nm}}</td>
          <td style="text-align:center;">{{$val->product_price}}</td>
  				<td style="text-align:center;">{{$val->qty}}</td>
  				<td  style="text-align:center;"><a href='/cart/{{$val->id}}' ><i class="fa fa-trash"></i></a></td>
  				<td align="center" colspan="2">{{$val->product_price * $val->qty}}</td>
        </tr>
        @php
        $add=$add + $val->product_price * $val->qty;
        @endphp
        @php
        $no++;
        @endphp
        @endforeach
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td colspan="2" style="text-align:center;">Grand Total</td>
          <td align="center" colspan="2"><strong>{{$add}}</strong></td>
        </tr>
        <tr>
          <td colspan="2" style="text-align:center;">Address</td>
          <td><textarea name='address'>{{$address[0]->address}}</textarea></td>
          <td><input type="submit" value="Checkout" class="mybtn"></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>

  </form>
@if ($no==1)
  <div class="no-records">Your Cart is Empty</div>
  </div>
@endif
</BODY>
</HTML>
