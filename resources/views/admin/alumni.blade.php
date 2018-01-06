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
              @php $no=1;$id=0; @endphp
              @foreach($alumni as $data)
              <tr>
                <td>{{$no}}</td>
                <td>{{$data['nama']}}</td>
                <td>{{$data['nis']}}</td>
                <td>{{$data['alamat']}}</td>
                <td>{{$data['telp']}}</td>
                <td>{{$data['email']}}</td>
                <td><button type="button" class="vie" get="{{$no-1}}" class="btn btn-primary bg-blue" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye"></i></button></td>
              </tr>
              @php $no++; @endphp
              @endforeach
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
              <form method="POST" action="{{ route('toUpdate') }}" enctype="multipart/form-data" class="form-horizontal">
              {{ csrf_field() }}
                <div class="box-body">
                  <div class="form-group">
                    <div class="col-sm-12">
                      <img class="img-responsive" id="foto" src="" alt="Foto Profil">
                    </div>
                  </div>
                  <input type="text" value="" name="id" id="id" hidden>
                  <!--
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label for="exampleInputEmail1">Username</label>
                      <input type="text" value="" class="form-control"  placeholder="Masukan Username..">
                    </div>
                  </div>
                  -->
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label for="exampleInputEmail1">Nama Sekarang</label>
                      <input name="nama" id="nama" type="text" class="form-control" value="" placeholder="Masukan Nama Sekarang..">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label for="exampleInputEmail1">Nama Waktu Sekolah</label>
                      <input name="namas" id="namas" type="text" class="form-control" value="" placeholder="Masukan Nama Waktu Sekolah..">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label for="exampleInputEmail1">Nama Panggilan</label>
                      <input type="text" name="namap" id="namap" class="form-control" value="" placeholder="Masukan Nama Panggilan..">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label for="exampleInputEmail1">Tempat Lahir</label>
                      <input type="text" name="tpl" id="tpl" class="form-control" value="" placeholder="Masukan Tempat Lahir..">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label>Tanggal Lahir</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" value="" name="tgl" class="form-control pull-right" id="datepicker">
                      </div>
                    </div>
                      <!-- /.input group -->
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label for="exampleInputEmail1">Nomor Induk Siswa</label>
                      <input type="text" name="nis" id="nis" class="form-control" value="" placeholder="Masukan NIS..">
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
                        <input type="text" name="mulai" value="" class="form-control pull-right" id="mulai">
                      </div>
                    </div>  
                      <!-- /.input group -->
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label>Masa Sekolah</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="lulus" value="" class="form-control pull-right" id="lulus">
                      </div>
                    </div>  
                      <!-- /.input group -->
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label for="exampleInputEmail1">Alamat Rumah</label>
                      <textarea name="alamat" id="alamat" class="form-control" value="" placeholder="Masukan Alamat Rumah..." row="3"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label for="exampleInputEmail1">Nomor Handphone</label>
                      <input type="tel" name="telp" id="telp" class="form-control" value="" placeholder="Masukan Nomor Hp..">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" value="" name="email" id="email" class="form-control" placeholder="Masukan Email..">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label for="exampleInputEmail1">Pekerjaan</label>
                      <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="" placeholder="Masukan Pekerjaan..">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label for="exampleInputEmail1">Organisasi</label>
                      <input type="text" class="form-control" value="" name="org" id="org" placeholder="Masukan Organisasi..">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label for="exampleInputEmail1">Jabatan</label>
                      <input type="text" class="form-control" value="" name="jabatan" id="jabatan" placeholder="Masukan Jabatan..">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label for="exampleInputEmail1">Alamat Kantor</label>
                      <textarea  class="form-control" value="" name="alamat_org" id="alamat_org" placeholder="Masukan Alamat Kantor..." row="3"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label for="exampleInputEmail1">Telp/Fax</label>
                      <input type="tel" class="form-control" value="" name="telp_org" id="telp_org" placeholder="Masukan Telp/Fax..">
                    </div>
                  </div>
                </div>
              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
            </form>
        </div>
    </div>
</div>
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript">
    var obj = {!! json_encode($alumni) !!};
    //console.log(obj[]);
    $(".vie" ).click(function() {
      $("#nama").val(obj[$(this).attr("get")]['nama']);
      $("#namas").val(obj[$(this).attr("get")]['nama_sekolah']);
      $("#namap").val(obj[$(this).attr("get")]['nama_panggilan']);
      $("#tpl").val(obj[$(this).attr("get")]['tempat_lahir']);
      $("#datepicker").val(obj[$(this).attr("get")]['tanggal_lahir']);
      $("#nis").val(obj[$(this).attr("get")]['nis']);
      $("#mulai").val(obj[$(this).attr("get")]['mulai']);
      $("#lulus").val(obj[$(this).attr("get")]['lulus']);
      $("#alamat").val(obj[$(this).attr("get")]['alamat']);
      $("#telp").val(obj[$(this).attr("get")]['telp']);
      $("#email").val(obj[$(this).attr("get")]['email']);
      $("#pekerjaan").val(obj[$(this).attr("get")]['pekerjaan']);
      $("#org").val(obj[$(this).attr("get")]['organisasi']);
      $("#jabatan").val(obj[$(this).attr("get")]['jabatan']);
      $("#alamat_org").val(obj[$(this).attr("get")]['alamat_org']);
      $("#telp_org").val(obj[$(this).attr("get")]['telp_org']);
      $("#id").val(obj[$(this).attr("get")]['id']);
      $('#foto').attr("src","{{asset('img/foto')}}/"+obj[$(this).attr('get')]['foto']);
    });
</script>
@stop
