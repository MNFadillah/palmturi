@extends('admin.template')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Palmturi
      <small>Dashboard</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-offset-2 col-md-4">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>150</h3>

            <p>Jumlah Alumni</p>
          </div>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-md-4">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>53</h3>

            <p>Jumlah Berita</p>
          </div>
          <div class="icon">
            <i class="fa fa-newspaper-o"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Menunggu Persetujuan</h3>
            <span class="label label-success">8 Alumni Baru</span>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="table-responsive">
              <table class="table no-margin">
                <thead>
                <tr>
                  <th></th>
                  <th>Nama</th>
                  <th>Handphone</th>
                  <th>Angkatan</th>
                  <th>Terima</th>
                  <th>Tolak</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td><img src="{{asset('admin/img/user-160x160.jpg')}}" class="img-circle" style="max-width:50px;max-height:50px;" alt="User Image"></td>
                  <td>Rifardi Taufiq Yufananda</td>
                  <td>08999233474</td>
                  <td>2017</td>
                  <td><a href="#"><button class="btn btn-primary bg-green"><i class="fa fa-check"></i></button></a>
                  <td>  <a><button class="btn btn-primary  bg-red"><i class="fa fa-trash"></i></button></td></a></td>
                </tr>


                </tbody>
              </table>
            </div>
            <!-- /.table-responsive -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer clearfix">
            <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">Lihat Semua</a>
          </div>
          <!-- /.box-footer -->
        </div>
      </div>
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
@stop
