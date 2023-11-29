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
              <h3 class="box-title">Category</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/admin/updatecategory/{{$res[0]->cat_id}}" enctype="multipart/form-data" method="POST">
            <!-- @csrf -->
            <input type="hidden" name="_token" value="<?php echo csrf_token()?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1"> Category Name</label>
                  <input type="text" value="{{$res[0]->cat_nm}}" class="form-control" id="exampleInputEmail1" name="cat_nm" placeholder="Enter Name" required>
                </div>
              </div>
              <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Category Image : </label>
                  <input type="file" name="img" class="form-control">
              </div>
            </div>
              <div class="box-footer">
                <center><button type="submit" class="btn btn-primary" >Update</button></center>
              </div>
            </form>
          </div>
          <!-- /.box -->
      </div>
      <!-- /.row -->
    </section>

    <!-- /.content -->
  </div>
  @endsection
