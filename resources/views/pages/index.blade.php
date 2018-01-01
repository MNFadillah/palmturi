@extends('template')
@section('main')
<div class="columns">
    <aside class="card column is-3">
    @include('aside')
    </aside>
    <main class="column">
      <div class="section">
        <div class="columns">
          <main class="column is-8">
            <section class="hero is-medium bg-pattern2 ">
              <div class="hero-body">
                <h1 class="title has-text-white">Berita Terbaru</h1>
                <h2 class="subtitle has-text-white">Nantikan informasi terkini dari komunitas ini</h2>
              </div>
            </section>
            <br>

            @foreach($berita as $data)
            <div class="box">
              <article class="media">
                <div class="media-left is-hidden-touch">
                  <figure class="image is-128x128">
                    <img src="/palmturi/public/img/berita/{{$data['featured_image']}}" alt="Image">
                  </figure>
                </div>
                <div class="media-content">
                  <div class="content">
                    <figure class="image is-16by9 is-hidden-desktop">
                      <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                    </figure>
                    <p class="has-text-justified">
                      <strong class="subtitle has-text-weight-semibold">{{$data['judul']}}</strong>
                      <br>
                      {{substr($data['konten'], 0, 256)}}...
                    </p>
                  </div>
                  <small>{{$data['created_at']}}<br></small>
                  <a href="{{URL::to('/pilihberita')}}">
                  <button class="button is-link is-outlined is-pulled-right is-hidden-touch">Baca Selengkapnya</button></a>
                  <a  href="{{URL::to('/pilihberita')}}"><button class="button is-link  is-outlined is-fullwidth mtop is-hidden-desktop">
                  Baca Selengkapnya</button></a>
                </div>
              </article>
            </div>
            @endforeach

            <div class="level-item">
              <a href="berita"class="button is-link">Lihat Lebih Banyak</a>
            </div>
          </main>
          <aside class="column has-text-centered">
            <div class="box notification is-danger">
              <span class="icon is-large"><i class="fa fa-joomla is-size-2"></i></span>
              <h1 class="is-size-4 has-text-weight-semibold is-uppercase">Terhubung dengan lainnya</h1>
              <h2 class="is-size-6  has-text-weight-light">Cari Teman-Teman Di Angkatan Anda</h2>
            </div>
            <div class="box notification is-white">
              <span class="icon is-large"><i class="fa fa-graduation-cap is-size-2 ctosca"></i></span>
              <h2 class="is-size-5 is-uppercase has-text-weight-light">Angkatan {{substr($ang,2,2)}}'</h2>
              <h6>Cari teman-teman angkatan tahun {{$ang}} untuk terhubung dengan mereka</h6><br>
              <div class="card-footer">
                <p class="card-footer-item">
                  <span>Lihat <a href="{{URL::to('angkatan/')}}/{{$ang}}">Angkatan {{$ang}}</a></span>
                </p>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </main>
</div>
@stop
