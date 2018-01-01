@extends('template')
@section('main')
<div class="columns">
  <aside class="card column is-3">
  @include('aside')
  </aside>
  <main class="card column">
    <section class="card-content">
      <section class="box bg-pattern">
        <h1 class="title has-text-white">Alumni Terdaftar</h1>
        <h2 class="subtitle has-text-white">Temukan teman masa sekolah anda</h2>
      </section>
      <div class="columns is-desktop">        
        @php $kol=1; @endphp
        @foreach($alumni as $data)
        <div class="column">
          <div class="card">
            <div class="card-content  has-text-centered">
              <div class="columns level-item">
                <figure class="image is-96x96 round">
                  <img src="/palmturi/public/img/foto/{{ $data['foto'] }}">
                </figure>
              </div>
              <p class="subtitle">
                {{ $data['nama'] }}
              </p>
              <div class="columns">
                <span class="column has-text-weight-light has-text-grey">
                  <i class="fa fa-graduation-cap"></i>
                  Angkatan {{ substr($data['mulai'], 0, 4) }}-{{ substr($data['lulus'], 0, 4) }}
                </span>
              </div>
              <div class="columns">
                <span class="column has-text-weight-light has-text-grey">
                  <i class="fa fa-envelope"></i>
                  {{ $data['email'] }}
                </span>
              </div>
            </div>
              <footer class="card-footer">
                <p class="card-footer-item">
                  <span>
                    <a href="{{action('AlumniController@show', $data['id'])}}" class="is-hoverable is-link">Lihat Profile <i class="fa fa-arrow-circle-right"></i></a>
                  </span>
                </p>
              </footer>
          </div>
        </div>
          @if ($kol%3==0)
            </div>
            <div class="columns is-desktop">
            @php $kol=0; @endphp
          @endif
        @php $kol++; @endphp
        @endforeach
        @if ($kol>1)
          <div class="column">
          </div>
          @if ($kol==2)
            <div class="column">
            </div>
          @endif
        @endif
      </div>
    </section>
  </main>
</div>
@stop
