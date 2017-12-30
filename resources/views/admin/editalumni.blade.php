@extends('admin.template')
@section('content')
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-offset-2   col-md-8">
        <div class="box box-info">
          <div class="box-header">
            <h3 class="box-title with-border">Form Alumni
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
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-12">
                    <img class="img-responsive" src="{{asset('admin/img/user-160x160.jpg')}}" alt="Foto Profil">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control"  placeholder="Masukan Username..">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control"  placeholder="Masukan Password..">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="exampleInputEmail1">Nama Sekarang</label>
                    <input type="text" class="form-control"  placeholder="Masukan Nama Sekarang..">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="exampleInputEmail1">Nama Waktu Sekolah</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama Waktu Sekolah..">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="exampleInputEmail1">Nama Panggilan</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama Panggilan..">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="exampleInputEmail1">Tempat Lahir</label>
                    <input type="text" class="form-control" placeholder="Masukan Tempat Lahir..">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label>Tanggal Lahir</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="datepicker">
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="exampleInputEmail1">Nomor Induk Siswa</label>
                    <input type="text" class="form-control" placeholder="Masukan NIS..">
                  </div>
                </div>
                <!-- Date range -->
                <div class="form-group">
                  <div class="col-sm-12">
                    <label>Masa Sekolah</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="reservation">
                    </div>
                  </div>  
                    <!-- /.input group -->
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="exampleInputEmail1">Alamat Rumah</label>
                    <textarea  class="form-control" placeholder="Masukan Alamat Rumah..." row="3"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="exampleInputEmail1">Nomor Handphone</label>
                    <input type="tel" class="form-control" placeholder="Masukan Nomor Hp..">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" placeholder="Masukan Email..">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="exampleInputEmail1">Pekerjaan</label>
                    <input type="text" class="form-control" placeholder="Masukan Pekerjaan..">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="exampleInputEmail1">Organisasi</label>
                    <input type="text" class="form-control" placeholder="Masukan Organisasi..">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="exampleInputEmail1">Jabatan</label>
                    <input type="text" class="form-control" placeholder="Masukan Jabatan..">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="exampleInputEmail1">Alamat Kantor</label>
                    <textarea  class="form-control" placeholder="Masukan Alamat Kantor..." row="3"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="exampleInputEmail1">Telp/Fax</label>
                    <input type="tel" class="form-control" placeholder="Masukan Telp/Fax..">
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
      <!-- /.col-->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
@stop
