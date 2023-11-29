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
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Product List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Category</th>
                  <th>Image</th>
                  <th>Update</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $co =1;
                      foreach ($res as $val) {
                        echo '<tr class="gradex">
                                <td style="text-align:center;">'.$co.'</td>
                                <td style="text-align:center;">'.$val->p_nm.'</td>
                                <td style="text-align:center;">'.$val->cat_nm.'</td>
                                <td style="text-align:center;"><img src="'?>{{asset("upload/".$val->p_img)}}<?php echo '" width="60" /></td>
                                <td style="text-align:center;" class="id"><a href="/admin/editproduct/'.$val->p_id.'"><i class="fa fa-edit" ></i></a></td>
                                <td style="text-align:center;" class="id"><a onclick="return rp();" href="/admin/deteteproduct/'.$val->p_id.'"><i class="fa fa-trash" ></i></a></td>
                            </tr>';
                        $co++;
                      }
                    ?>
                </tbody>
            
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
</div>
</div>
</div>
@endsection