@php 
  $th=date('Y');  
@endphp
<div class="section">
    <nav class="panel">
      <p class="panel-heading">
        DAFTAR ANGKATAN
      </p>
      <form id="cari-form" action="{{ route('toCari') }}" method="POST">{{ csrf_field() }}
      <div class="panel-block">
        <p class="control has-icons-left">
          <input class="input is-small" name="q" type="text" placeholder="Cari Nama">
          <span class="icon is-small is-left">
            <a onclick="event.preventDefault(); document.getElementById('cari-form').submit();">
              <i class="fa fa-search"></i>
            </a>
          </span>
        </p>
      </div>
      </form>
      <p class="panel-tabs is-hidden-tablet-only">
        <a class="" href="{{URL::to('/alumni')}}">all</a>
        @for ($i = 0; $i < 4; $i++)
          <a href="{{URL::to('angkatan/')}}/{{$th-(10*$i)}}">{{$th-(10*$i)}}</a>
        @endfor
      </p>
      
      <div>
      @for ($a = 1; $a < 10 ; $a++)
        <a class="panel-block" href="{{URL::to('angkatan/')}}/{{$th-$a}}">
          <span class="panel-icon">
            <i class="fa fa-graduation-cap"></i>
          </span>
          Angkatan {{$th-$a}}
        </a>
      @endfor
      </div>
      <a href="{{URL::to('/alumni')}}" class="panel-block">
        <button class="button is-link is-outlined is-fullwidth">
        Lihat Semua
        </button>
      </a>
    </nav>
  </div>