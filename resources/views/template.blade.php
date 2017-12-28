<!DOCTYPE html>
<html>
@include('head')
<body>
  <div class="dashboard">
    <nav class="navbar has-shadow  is-fixed-top" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" href="{{URL::to('/beranda')}}">
          <img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
        </a>
        <div class="navbar-burger burger" data-target="navMenu">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="navbar-menu navbar-end has-text-centered" id="navMenu">
        <a href="{{URL::to('/alumni')}}" class="navbar-item is-tab">
          <span class="icon is-small">
            <i class="fa fa-user-o"></i>
          </span>
          <span class="is-hidden-desktop"> Alumni</span>
        </a>
        <a href="{{URL::to('/berita')}}" class="navbar-item is-tab">
          <span class="icon is-small">
            <i class="fa fa-newspaper-o"></i>
          </span>
          <span class="is-hidden-desktop"> Berita</span>
        </a>
        <a href="{{URL::to('/profil')}}" class="navbar-item is-tab is-hidden-desktop">
          <span class="icon is-small">
            <i class="fa fa-user-circle-o"></i>
          </span>
          <span class="is-hidden-desktop"> Profil</span>
        </a>
        <a href="{{URL::to('/pengaturan')}}" class="navbar-item is-tab is-hidden-desktop">
          <span class="icon is-small">
            <i class="fa fa-cog"></i>
          </span>
          <span class="is-hidden-desktop"> Pengaturan</span>
        </a>
        <a href="#" class="navbar-item is-tab is-hidden-desktop">
          <span class="icon is-small">
            <i class="fa fa-power-off"></i>
          </span>
          <span class="is-hidden-desktop"> Keluar</span>
        </a>
        <div class="navbar-item has-dropdown is-hoverable is-hidden-touch">
          <a class="navbar-link">
            <span class="mright">{{ Auth::user()->nama }}</span>
            <figure class="image is-32x32">
              <img class="round" src="img/foto/{{ Auth::user()->foto }}">
            </figure>
          </a>
          <div class="navbar-dropdown is-boxed is-right">
            <a href="{{URL::to('/profil')}}" class="navbar-item">
              <span class="icon is-small">
                <i class="fa fa-user-circle-o"></i>
              </span>
              Profil
            </a>
            <a href="{{URL::to('/pengaturan')}}" class="navbar-item">
              <span class="icon is-small">
                <i class="fa fa-cog"></i>
              </span>
              Pengaturan
            </a>
            <hr class="navbar-divider">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="navbar-item">
              <span class="icon is-small">
                <i class="fa fa-power-off"></i>
              </span>
               Keluar
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
          </div>
        </div>
      </div>
    </nav>
      @yield('main')

  </div>
  <script>
      document.addEventListener('DOMContentLoaded', function () {
      var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
      if ($navbarBurgers.length > 0) {
      $navbarBurgers.forEach(function ($el) {
      $el.addEventListener('click', function () {
      var target = $el.dataset.target;
      var $target = document.getElementById(target);
      $el.classList.toggle('is-active');
      $target.classList.toggle('is-active');
        });
      });
      }
      });
    </script>
</body>
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script>
$(document).ready(function() {
  $('#btnComment').click(function() {
    $('#comment').toggle(200);
});
});
</script>
</html>
