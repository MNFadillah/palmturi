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
                <h3 class="title has-text-centered has-text-info has-text-weight-semibold">Uas Ditunda Sampai Desember Tahun Depan</h3>
                <figure class="image is-16by9">
                  <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                </figure>
                <section class="section">
                  <p class="has-text-justified">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                    Lorem ipsum dolor sit amet, consectetur adipiscing piscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                    Lorem ipsum dolor sit amet, elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                  </p>
                  <nav class="level is-mobile">
                    <div class="level-left">
                      <a id="btnComment" class="level-item">
                        <span class="icon is-small"><i class="fa fa-comment"></i></span>
                      </a>
                      <a class="level-item">
                        <span class="icon is-small"><i class="fa fa-thumbs-o-up"></i></span>
                      </a>
                      <small>Post on 21 Dec 2017</small>
                    </div>
                  </nav>
                </section>
              </div>
            </div>
          </article>
          <br>
          <div id="comment">
            <article class="media mleft">
              <div class="media-left">
                <figure class="image is-32x32">
                  <img class="round" src="img/img_avatar.png" alt="Image">
                </figure>
              </div>
              <div class="media-content">
                <div class="content">
                  <p class="has-text-justified">
                    <strong>Rifardi Taufiq</strong>
                    <br> L orem ipsum dolor sit amet, consecte orem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                    <nav class="level is-mobile">
                      <div class="level-left">
                        <a class="level-item">
                        <a class="level-item">
                          <span class="icon is-small"><i class="fa fa-thumbs-o-up"></i></span>
                        </a>
                        <small>31m yang lalu</small>
                      </div>
                    </nav>
                  </p>
                </div>
              </div>
            </article>
            <article class="media mleft">
              <div class="media-left">
                <figure class="image is-32x32">
                  <img class="round" src="img/img_avatar.png" alt="Image">
                </figure>
              </div>
              <div class="media-content">
                <div class="content">
                  <p>
                    <strong>Rifardi Taufiq</strong>
                    <br> L orem ipsum dolor sit amet, consecte orem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                    <nav class="level is-mobile">
                      <div class="level-left">
                        <a class="level-item">
                        <a class="level-item">
                          <span class="icon is-small"><i class="fa fa-thumbs-o-up"></i></span>
                        </a>
                        <small>31m yang lalu</small>
                      </div>
                    </nav>
                  </p>
                </div>
              </div>
            </article>
            <br>
            <div class="field">
              <label class="label">Comment</label>
              <div class="control">
                <textarea class="textarea" placeholder="Textarea"></textarea>
              </div>
            </div>
            <div class="field is-grouped">
              <div class="control">
                <button class="button is-link">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </main>
  </div>
  </main>
</div>
@stop
