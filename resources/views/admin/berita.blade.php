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
              @php $no=1; @endphp
              @foreach($berita as $data)
              <tr>
                <td>{{$no}}</td>
                <td>{{$data['judul']}}</td>
                <td>{{$data['nama']}}</td>
                <td>{{substr($data['konten'],0,256)}}...</td>
                <td><img class="img-responsive" src="{{asset('img/berita')}}/{{$data['featured_image']}}"></td>
                <td>{{$data['created_at']}}</td>
                <td><a href="{{action('AdmBeritaController@edit', $data['id_berita'])}}"><button class="btn btn-info bg-blue"><i class="fa fa-pencil"></i></button></a>
                  <button type="button" get="{{$no-1}}" class="btn btn-primary bg-red hap" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash"></i></button></td>
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
                <h4 class="modal-title">Konfirmasi Hapus</h4>
            </div>
            <div class="modal-body">
                <p>Apa anda yakin akan menghapus berita ini ?</p>
            </div>
            <form action="{{action('AdmBeritaController@delete')}}" method="post">
            {{csrf_field()}}
            <div class="modal-footer">
                <input type="text" name="id" id="id" hidden>
                <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                <button type="submit" class="btn btn-primary">Hapus</button>
            </div>
            </form>
        </div>
    </div>
</div>
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript">
    var langs = {!! json_encode($berita->toArray()) !!};
    $(".hap" ).click(function() {
      $("#id").val(langs[$(this).attr("get")]['id_berita']);
    });
</script>
@stop
