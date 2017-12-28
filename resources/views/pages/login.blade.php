<!DOCTYPE html>
<html>
@include('head')
<body>
  <section class="hero is-white is-fullheight is-medium brdtop">
        <div class="hero-body">
          <div class="container">
            <div class="columns">
            <div class="column is-hidden-mobile bg is-8-desktop">
                <section class="section">
                  <h1 class="title">
                    <span class="is-size-3 is-size-4-mobile  has-text-weight-bold ctosca bgtransparent">Terhubung Dengan Teman Lainnya</span><br><br>
                    <span class="is-size-5 is-size-5-mobile  has-text-weight-semibold has-text-white bgtransparent">Daftar dan bertemu dengan teman teman alumni <span class="has-text-weight-bold">SMA NEGERI 1 KEDIRI</span></span>
                  </h1>
                </section>
            </div>
              <div class="column">
                <article class="card is-rounded">
                  <div class="card-content">
                    <h1 class="title level-item">
                      <img src="img/logo-full.png" alt="logo">
                    </h1>
                      <div class="field">
                        <p class="control has-icons-left has-icons-right">
                          <input class="input" type="email" placeholder="Email" required>
                          <span class="icon is-small is-left">
                            <i class="fa fa-envelope"></i>
                          </span>
                        </p>
                      </div>
                      <div class="field">
                        <p class="control has-icons-left">
                          <input class="input" type="password" placeholder="Password" required>
                          <span class="icon is-small is-left">
                            <i class="fa fa-lock"></i>
                          </span>
                        </p>
                      </div>
                      <br>
                      <div class="field">
                        <p class="control">
                          <input class="button is-fullwidth is-info" type="submit" value="Masuk">
                        </p>
                      </div>

                      <div class="card-footer has-text-centered">
                        <p class="card-footer-item">
                          <span>Belum Punya Akun <a id="daftar" class="has-text-info">Daftar Disni</a></span>
                        </p>
                        <p class="card-footer-item">
                          <span>Lupa Password <a href="#" class="has-text-info">Disni</a></span>
                        </p>
                      </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
    </div>
    <div  class="modal">
      <div class="modal-background"></div>
      <div class="modal-card">
        <header class="modal-card-head">
          <p class="modal-card-title">Form Pendaftaran</p>
          <button  class="delete close" aria-label="close"></button>
        </header>
        <section class="modal-card-body">
              <div class="columns">
                <div class="field column">
                  <label class="label">Nama Sekarang</label>
                  <div class="control has-icons-left">
                  <input class="input" type="text" placeholder="Nama Sekarang">
                    <span class="icon is-small is-left">
                      <i class="fa fa-user"></i>
                    </span>
                  </div>
                </div>
                <div class="field column">
                  <label class="label">Nama Panggilan</label>
                  <div class="control has-icons-left">
                  <input class="input" type="text" placeholder="Nama Panggilan">
                    <span class="icon is-small is-left">
                      <i class="fa fa-user-circle-o"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="columns">
                <div class="field column">
                  <label class="label">Nama Waktu Sekolah</label>
                  <div class="control has-icons-left">
                  <input class="input" type="text" placeholder="Nama Waktu Sekolah">
                    <span class="icon is-small is-left">
                      <i class="fa fa-user"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="columns">
                <div class="field column">
                  <label class="label">Tempat Lahir</label>
                  <div class="control has-icons-left">
                  <input class="input" type="text" placeholder="Tempat Lahir">
                    <span class="icon is-small is-left">
                      <i class="fa fa-map-marker"></i>
                    </span>
                  </div>
                </div>
                <div class="field column">
                  <label class="label">Tanggal Lahir</label>
                  <div class="control has-icons-left">
                  <input class="input" type="date" placeholder="Tanggal Lahir">
                    <span class="icon is-small is-left">
                      <i class="fa fa-birthday-cake"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="columns">
                <div class="field column">
                  <label class="label">Nomor Induk Siswa</label>
                  <div class="control has-icons-left">
                  <input class="input" type="text" placeholder="Nomor Induk Siswa">
                    <span class="icon is-small is-left">
                      <i class="fa fa-id-card"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="columns">
                <div class="field column">
                  <label class="label">Mulai Sekolah</label>
                  <div class="control has-icons-left">
                  <input class="input" type="date" placeholder="Tanggal Masuk">
                    <span class="icon is-small is-left">
                      <i class="fa fa-book"></i>
                    </span>
                  </div>
                </div>
                <div class="field column">
                  <label class="label">Sampai</label>
                  <div class="control has-icons-left">
                  <input class="input" type="date" placeholder="Tanggal Lulus">
                    <span class="icon is-small is-left">
                      <i class="fa fa-graduation-cap"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="columns">
                <div class="field column">
                  <label class="label">Alamat Rumah</label>
                  <div class="control">
                    <textarea class="textarea" placeholder="Alamat Rumah"></textarea>
                  </div>
                </div>
              </div>
              <div class="columns">
                <div class="field column">
                  <label class="label">Nomor Handphone</label>
                  <div class="control has-icons-left">
                  <input class="input" type="telp" placeholder="Nomor Handphone">
                    <span class="icon is-small is-left">
                      <i class="fa fa-mobile"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="columns">
                <div class="field column">
                  <label class="label">Email</label>
                  <div class="control has-icons-left">
                    <input class="input" type="email" placeholder="Email">
                    <span class="icon is-small is-left">
                      <i class="fa fa-envelope"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="columns">
                <div class="field column">
                  <label class="label">Pekerjaan</label>
                  <div class="control has-icons-left">
                  <input class="input" type="text" placeholder="Pekerjaan">
                    <span class="icon is-small is-left">
                      <i class="fa fa-briefcase"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="columns">
                <div class="field column">
                  <label class="label">Organisasi</label>
                  <div class="control has-icons-left">
                  <input class="input" type="text" placeholder="Oragnisasi">
                    <span class="icon is-small is-left">
                      <i class="fa fa-users"></i>
                    </span>
                  </div>
                </div>
                <div class="field column">
                  <label class="label">Jabatan</label>
                  <div class="control has-icons-left">
                  <input class="input" type="text" placeholder="Jabatan">
                    <span class="icon is-small is-left">
                      <i class="fa fa-sitemap"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="columns">
                <div class="field column">
                  <label class="label">Alamat</label>
                  <div class="control">
                    <textarea class="textarea" placeholder="Alamat"></textarea>
                  </div>
                </div>
              </div>
              <div class="columns">
                <div class="field column">
                  <label class="label">Telepon</label>
                  <div class="control has-icons-left">
                  <input class="input" type="telp" placeholder="Telepon">
                    <span class="icon is-small is-left">
                      <i class="fa fa-phone"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="columns">
                <div class="field column">
                  <div class="file is-info has-name">
                    <label class="file-label">
                      <input class="file-input" type="file" name="foto">
                      <span class="file-cta">
                        <span class="file-icon">
                          <i class="fa fa-upload"></i>
                        </span>
                        <span class="file-label">
                          File foto…
                        </span>
                      </span>
                      <span class="file-name">
                        Screen Shot 2017-07-29 at 15.54.25.png
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="columns">
                <div class="field column">
                  <div class="control">
                    <label class="checkbox">
                      <input type="checkbox">
                      Saya setuju bahwa data yang saya inputkan benar
                    </label>
                  </div>
                </div>
              </div>
        </section>
        <footer class="modal-card-foot">
          <button class="button is-primary">Daftar</button>
          <button  class="button close ">Batalkan</button>
        </footer>
      </div>
    </div>
  </section>
  <footer class="footer">
    <div class="container">
      <div class="content has-text-centered">
        <p>
          Copyright &copy2017  <a href="#">Palmturi</a>. All Right Reserved
        </p>
      </div>
    </div>
  </footer>
<script src="js/jquery-3.2.1.min.js"></script>
</body>
<script>
  $(document).ready(function() {
    $('#daftar').click(function() {
      $('.modal').addClass('is-active');
  });
  $('.close').click(function() {
    $('.modal').removeClass('is-active');
});
});
</script>
</html>
