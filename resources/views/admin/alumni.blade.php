@extends('admin.template')
@section('content')
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Daftar Alumni Terdaftar</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th style="width:5%">No</th>
                <th style="width:25%">Nama</th>
                <th style="width:15%">NIS</th>
                <th style="width:25%">Alamat</th>
                <th style="width:10%">Handphone</th>
                <th style="width:15%">Email</th>
                <th style="width:5%">Action</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>1</td>
                <td>Rifardi Taufiq Yufananda</td>
                <td>15340132843</td>
                <td>Banyu Urip Kidul 4 No.15</td>
                <td>089999999999</td>
                <td>rifardity@gmail.com</td>
                <td><button type="button" class="btn btn-primary bg-blue" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye"></i></button></td>
              </tr>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>
    <!-- /.row -->

  </section>
  <!-- /.content -->
</div>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Data Alumni</h4>
            </div>
            <div class="modal-body">
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
              </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Edit</button>
            </div>
        </div>
    </div>
</div>
@stop
