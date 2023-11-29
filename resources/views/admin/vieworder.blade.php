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
              <h3 class="box-title">Order List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>User Name</th>
                  <th>Product Name</th>
                  <th>Image</th>
                  <th>price</th>
                  <th>Quantity</th>
                  <th>Total Amt.</th>
                  <th>Accept</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $co =1;
                      foreach ($res as $val) {
                        echo '<tr class="gradex">
                                <td style="text-align:center;">'.$co.'</td>
                                <td style="text-align:center;">'.$val->username.'</td>
                                <td style="text-align:center;">'.$val->product_nm.'</td>
                                <td style="text-align:center;"><img src="'?>{{asset("upload/".$val->product_img)}}<?php echo '" width="60" /></td>
                                <td style="text-align:center;">'.$val->product_price.'</td>
                                <td style="text-align:center;">'.$val->qty.'</td>
                                <td style="text-align:center;">'.$val->product_price * $val->qty.'</td>';
                                echo '<td style="text-align:center;" class="id"><a href="/admin/acceptorder/'.$val->id.'"><i class="fa fa-check" ></i></a></td>';
                                
                                echo '<td style="text-align:center;" class="id"><a onclick="return rp();" href="/admin/deleteorder/'.$val->id.'"><i class="fa fa-trash" ></i></a></td>
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