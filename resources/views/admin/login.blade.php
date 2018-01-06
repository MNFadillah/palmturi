<!DOCTYPE html>
<html>
@include('admin.head')
<body class="hold-transition login-page bg-blue">
<div class="login-box">
  <div class="login-box-body">
    <div class="login-logo">
      <img src="{{asset('img/logo-full.png')}}" alt="Logo Palmturi">
    </div>
    <!-- /.login-logo -->
    <p class="login-box-msg">Masuk Sebagai Administrator</p>
    <form action="{{ route('admin.login.submit') }}" method="post">
    {{ csrf_field() }}
      <div class="form-group has-feedback">
        <input name="email" type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      @if ($errors->has('email'))
        <span>
          <strong>{{ $errors->first('email') }}</strong>
        </span>
        <br>
      @endif
      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary bg-blue btn-raised btn-block btn-flat">Masuk</button>
        </div>
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- Material Design -->
<script src="../../dist/js/material.min.js"></script>
<script src="../../dist/js/ripples.min.js"></script>
<script>
    $.material.init();
</script>
</body>
</html>
