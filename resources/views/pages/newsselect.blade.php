@extends('template')
@section('main')
<section class="hero bg-pattern2 ">
  <div class="hero-body">
    <h1 class="title has-text-white">Berita Terbaru</h1>
    <h2 class="subtitle has-text-white">Nantikan informasi terkini dari komunitas ini</h2>
  </div>
</section>
<div class="columns is-centered">
  <main class="column is-8">
    <div class="section">
      <main class="column">
        <div class="box">
          <article class="media">
            <div class="media-content">
              <div class="content">
                <h3 class="title has-text-centered has-text-info has-text-weight-semibold">{{$berita['judul']}}</h3>
                <figure class="image is-16by9">
                  <img src="{{asset('img/berita')}}/{{$berita['featured_image']}}" alt="Image">
                </figure>
                <section class="section">
                  <p class="has-text-justified">
                    {!!$berita['konten']!!}
                  </p>
                  <nav class="level is-mobile">
                    <div class="level-left">
                      <a id="btnComment" class="level-item">
                        <span class="icon is-small"><i class="fa fa-comment"></i></span>
                      </a>
                      <a class="level-item">
                        <span class="icon is-small"><i class="fa fa-thumbs-o-up"></i></span>
                      </a>
                      <small>Post on {{date('d-F-Y', strtotime($berita['created_at']))}} at {{date('h:i a', strtotime($berita['created_at']))}}</small>
                    </div>
                  </nav>
                </section>
              </div>
            </div>
          </article>
          <br>
          <div id="comment">
            @foreach($komentar as $data)
            <article class="media mleft">
              <div class="media-left">
                <figure class="image is-32x32">
                  <img class="round" src="{{asset('img/foto')}}/{{$data['foto']}}" alt="Image">
                </figure>
              </div>
              <div class="media-content">
                <div class="content">
                  <p class="has-text-justified">
                    <strong>{{$data['nama']}}</strong>
                    <br> {{$data['isi']}}
                    <nav class="level is-mobile">
                      <div class="level-left">
                        <a class="level-item">
                        <a class="level-item">
                          <span class="icon is-small"><i class="fa fa-thumbs-o-up"></i></span>
                        </a>
                        <small>on {{date('d-F-Y', strtotime($data['created_at']))}} at {{date('h:i a', strtotime($data['created_at']))}}</small>
                      </div>
                    </nav>
                  </p>
                </div>
              </div>
            </article>
            @endforeach
            <br>
            <form method="post" action="{{ route('saveComment') }}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="field">
              <label class="label">Comment</label>
              <input type="text" name="id_berita" value="{{$id}}" id="" hidden>
              <div class="control">
                <textarea class="textarea" name="isi" placeholder="Textarea"></textarea>
              </div>
            </div>
            <div class="field is-grouped">
              <div class="control">
                <button type="submit" class="button is-link">Submit</button>
              </div>
            </div>
            </form>
          </div>
        </div>
      </main>
  </div>
  </main>
</div>
@stop
