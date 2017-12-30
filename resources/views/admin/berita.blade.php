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
            <h3 class="box-title">Daftar Berita</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th style="width:5%">No</th>
                <th style="width:15%">Judul</th>
                <th style="width:10%">Kategori</th>
                <th style="width:45%">Kontent</th>
                <th style="width:15%">Image</th>
                <th style="width:5%">Tanggal Post</th>
                <th style="width:5%">Action</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>3</td>
                <td>KKN Ditunda Sampai Februari</td>
                <td>Pendidikan</td>
                <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</td>
                <td><img class="img-responsive" src="{{asset('admin/img/user-160x160.jpg')}}"></td>
                <td>28-03-2017</td>
                <td><a href="#"><button class="btn btn-info bg-blue"><i class="fa fa-pencil"></i></button></a>
                  <button type="button" class="btn btn-primary bg-red" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash"></i></button></td>
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
                <h4 class="modal-title">Konfirmasi Hapus</h4>
            </div>
            <div class="modal-body">
                <p>Apa anda yakin akan menghapus berita ini ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-primary">Hapus</button>
            </div>
        </div>
    </div>
</div>
@stop
