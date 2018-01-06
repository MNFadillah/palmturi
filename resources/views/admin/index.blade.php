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
            <h3>{{$ja}}</h3>

            <p>Jumlah Alumni</p>
          </div>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
          <a href="{{URL::to('/adm/alumni')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-md-4">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>{{$jb}}</h3>

            <p>Jumlah Berita</p>
          </div>
          <div class="icon">
            <i class="fa fa-newspaper-o"></i>
          </div>
          <a href="{{URL::to('/adm/berita')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Menunggu Persetujuan</h3>
            <span class="label label-success">{{$jn}} Alumni Baru</span>
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
                @foreach($alumni as $data)
                <tr>
                  <td><img src="{{asset('img/foto')}}/{{ $data['foto'] }}" class="img-circle" style="max-width:50px;max-height:50px;" alt="User Image"></td>
                  <td>{{ $data['nama'] }}</td>
                  <td>{{ $data['telp'] }}</td>
                  <td>{{ substr($data['lulus'],0,4) }}</td>
                  <td>
                    <form method="POST" action="{{ route('approve') }}" enctype="multipart/form-data" class="form-horizontal">
                    {{ csrf_field() }}
                      <input name="id" id="id" type="hidden" class="form-control" value="{{ $data['id'] }}">
                      <a href=""><button type="submit" class="btn btn-primary bg-green"><i class="fa fa-check"></i></button></a>
                    </form>
                  <td>  
                    <form action="{{action('AdmAlumniController@destroy', $data['id'])}}" method="post">
                    {{csrf_field()}}
                      <a>
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-primary  bg-red" type="submit"><i class="fa fa-trash"></i></button>
                      </a>
                    </form>
                  </td>
                </tr>
                @endforeach

                </tbody>
              </table>
            </div>
            <!-- /.table-responsive -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer clearfix">
            <a href="{{URL::to('/adm/alumni')}}" class="btn btn-sm btn-default btn-flat pull-right">Lihat Semua</a>
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
