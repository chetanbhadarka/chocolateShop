@extends('admin.layout.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Dashboard
    <small>Control panel</small>
  </h1>

</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <!-- general form elements -->
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Product</h3>
  </div>
        <!-- /.box-header -->
        <!-- form start -->
    <form role="form" action="/admin/updateproduct/" method="post"  enctype="multipart/form-data">
    <!-- @csrf -->
    <input type="hidden" name="_token" value="<?php echo csrf_token()?>">
     <div class="box-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Category : </label>
        <select type="text" name="cat" class="form-control" >
                @foreach($res as $val)
                  
                @if($val->cat_id === $res[0]->p_cat)
                  <option value="{{$val->p_cat}}" selected>{{$val->cat_nm}}</option>
                  @else
                  <option value="{{$val->p_cat}}">{{$val->cat_nm}}</option>
                  @endif

                @endforeach
              </select>
            </div>
        </div>
        <input type="hidden" value="{{ $res[0]->p_id }}" name="p_id" class="form-control">
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Product Name : </label>
            <input type="text" value="{{$res[0]->p_nm}}" name="pnm" class="form-control" required>
          </div>
        </div>

        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Description : </label>
              <textarea name="desc"  rows="6"	class="form-control">{{$res[0]->p_desc}}</textarea>
          </div>
        </div>

        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Product Price : </label>
              <input type="text" value="{{$res[0]->p_price}}" name="price" class="form-control" required>
          </div>
        </div>

        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Product Image : </label>
              <input type="file" name="img" class="form-control">
          </div>
        </div>


        <div class="box-footer">
          <center><button type="submit" class="btn btn-primary">Update</button></center>
        </div>
    </form>
</div>
</div>
</section>
</div>
@endsection
