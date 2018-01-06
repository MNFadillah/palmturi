@extends('admin.template')
@section('content')
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-6">
        <div class="box box-info">
          <div class="box-header">
            <h3 class="box-title with-border">Edit Profil Administrator
            </h3>
            <!-- tools box -->
            <div class="pull-right box-tools">
              <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
            </div>
            <!-- /. tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body pad">
            <form class="form-horizontal" action="{{route('profile')}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="exampleInputEmail1">Email</label>
                    <input name="email" value="{{$data['email']}}" type="email" class="form-control" placeholder="Masukan Email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="exampleInputEmail1">Nama Admin</label>
                    <input name="nama" value="{{$data['nama']}}" type="text" class="form-control"  placeholder="Masukan Nama">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <img class="img-responsive" src="{{asset('admin/img')}}/{{$data['foto']}}" alt="Foto Berita">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="exampleInputFile">Masukan Foto</label>
                    <input type="text" readonly="" class="form-control" placeholder="Browse...">
                    <input type="file" name="foto" id="exampleInputFile">
                    <p class="help-block">Masukan Foto Untuk Berita</p>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="#"><button type="submit" class="btn btn-info bg-blue pull-right">Simpan</button></a>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="box box-info">
          <div class="box-header">
            <h3 class="box-title with-border">Ubah Password
            </h3>
            <!-- tools box -->
            <div class="pull-right box-tools">
              <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
            </div>
            <!-- /. tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body pad">
            <form class="form-horizontal" action="{{route('password')}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="exampleInputEmail1">Password Lama</label>
                    <input type="password" name="password" class="form-control"  placeholder="Masukan Password Lama">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="exampleInputEmail1">Password Baru</label>
                    <input type="password" name="newpass" class="form-control"  placeholder="Masukan Password Baru">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="exampleInputEmail1">Ulangi Password Baru</label>
                    <input type="password" name="cpass" class="form-control"  placeholder="Masukan Password Baru">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="#"><button type="submit" class="btn btn-info bg-blue pull-right">Ubah Password</button></a>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
      </div>
      <!-- /.col-->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
@stop
