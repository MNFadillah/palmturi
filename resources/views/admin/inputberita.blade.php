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
            <h3 class="box-title with-border">Form Berita
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
                    <label for="exampleInputEmail1">Judul</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Judul">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label>Minimal</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Pendidikan</option>
                      <option>Info</option>
                      <option>Info</option>
                      <option>Info</option>
                      <option>Info</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="exampleInputFile">Masukan Foto</label>
                    <input type="text" readonly="" class="form-control" placeholder="Browse...">
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Masukan Foto Untuk Berita</p>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="exampleInputFile">Kontent Berita</label>
                      <textarea id="editor1" name="editor1" rows="10" cols="80">
                        Masukan Konten Dari Berita
                      </textarea>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="#"><button type="submit" class="btn btn-info bg-blue pull-right">Publikasikan</button></a>
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
@section('js')
<script>
  $(function () {
    CKEDITOR.replace('editor1');
  });
</script>
@stop
