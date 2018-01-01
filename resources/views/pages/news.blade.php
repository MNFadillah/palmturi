@extends('template')
@section('main')
<div class="columns">
    <aside class="card column is-3 is-hidden-touch">
      @include('aside')
    </aside>
    <main class="column">
      <div class="section">
        <div class="columns">
          <main class="column">
            <section class="hero bg-pattern2 ">
              <div class="hero-body">
                <h1 class="title has-text-white">Berita Terbaru</h1>
                <h2 class="subtitle has-text-white">Nantikan informasi terkini dari komunitas ini</h2>
              </div>
            </section>
            <br>
            <div class="card">
                <section class="section">
                  <div class="columns is-desktop">
                  @php $kol=1; @endphp
                  @foreach($berita as $data)
                    <div class="column">
                      <div class="card has-text-justified">
                        <div class="card-image">
                          <figure class="image is-4by3">
                            <img src="/palmturi/public/img/berita/{{$data['featured_image']}}" alt="Placeholder image">
                          </figure>
                        </div>
                        <div class="card-content">
                          <div class="media">
                            <div class="media-content">
                              <p class="subtitle has-text-weight-semibold"><a href="{{action('BeritaController@show', $data['id_berita'])}}">{{$data['judul']}}</a></p>
                            </div>
                          </div>

                          <div class="content">
                            {{substr($data['konten'], 0, 256)}}...
                            <br>
                            <br>
                            <span class="has-text-grey has-text-size-6">Dipostkan {{date('d-F-Y', strtotime($data['created_at']))}} at {{date('h:i a', strtotime($data['created_at']))}}</span>
                          </div>
                        </div>
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
                  <div class="columns is-desktop">
                  <div class="column">
                    <div class="level-item">
                    <form id="cari-form" action="{{ route('berita') }}" method="POST">{{ csrf_field() }}
                      <input type="text" name="id" value="{{$id}}" id="" hidden>
                      <button type="submit" class="button is-link has">
                        <span class="mright">Tampilkan Lainnya</span>
                        <span><i class="fa fa-arrow-circle-down"> </i></span>
                      </button>
                    </form>
                    </div>
                  </div>
                  </div>
                </section>
            </div>
          </main>
        </div>
      </div>
    </main>
</div>
@stop
