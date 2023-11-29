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
              <h3 class="box-title">Feedback List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th style="text-align:center;">No</th>
                    <th style="text-align:center;">User Name</th>
                    <th style="text-align:center;">Email</th>
                    <th style="text-align:center;">Subject</th>
                    <th style="text-align:center;">Message</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $co =1;
                      foreach ($res as $val) {
                        echo '<tr class="gradex">
                          <td style="text-align:center;">'.$co.'</td>
                          <td style="text-align:center;">'.$val->name.'</td>
                          <td style="text-align:center;">'.$val->email.'</td>
                          <td style="text-align:center;">'.$val->subject.'</td>
                          <td style="text-align:center;">'.$val->msg.'</td>
                          
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