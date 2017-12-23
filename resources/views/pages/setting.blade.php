@extends('template')
@section('main')
<div class="columns">
  <aside class="card column is-3">
  @include('aside')
  </aside>
  <main class="card column">
    <section class="card-content">
        <div class="box notification is-danger">
          <span class="icon is-large"><i class="fa fa-user-secret is-size-2"></i></span>
          <h1 class="is-size-4 has-text-weight-semibold is-uppercase">Sesuaikan Dengan Privasi Anda</h1>
          <h2 class="is-size-6  has-text-weight-light">Pilih data yang ingin ditampilkan ke publik</h2>
        </div>
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
              <div class="field">
                <input id="switchNamaPanggilan" type="checkbox" name="switchNamaPanggilan" class="switch is-rounded is-outlined is-rtl" checked="checked">
                <label class="label" for="switchNamaPanggilan">Nama Panggilan</label>
              </div>
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
              <div class="field">
                <input id="switchNamaSekolah" type="checkbox" name="switchNamaSekolah" class="switch is-rounded is-outlined is-rtl" checked="checked">
                <label class="label" for="switchNamaSekolah">Nama Waktu Sekolah</label>
              </div>
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
              <div class="field">
                <input id="switchTempatLahir" type="checkbox" name="switchTempatLahir" class="switch is-rounded is-outlined is-rtl" checked="checked">
                <label class="label" for="switchTempatLahir">Tempat Lahir</label>
              </div>
              <div class="control has-icons-left">
              <input class="input" type="text" placeholder="Tempat Lahir">
                <span class="icon is-small is-left">
                  <i class="fa fa-map-marker"></i>
                </span>
              </div>
            </div>
            <div class="field column">
              <div class="field">
                <input id="switchTanggalLahir" type="checkbox" name="switchTanggalLahir" class="switch is-rounded is-outlined is-rtl" checked="checked">
                <label class="label" for="switchTanggalLahir">Tanggal Lahir</label>
              </div>
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
              <div class="field">
                <input id="switchNoInduk" type="checkbox" name="switchNoInduk" class="switch is-rounded is-outlined is-rtl" checked="checked">
                <label class="label" for="switchNoInduk">Nomor Induk Siswa</label>
              </div>
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
              <div class="field">
                <input id="switchMasaSekolah" type="checkbox" name="switchMasaSekolah" class="switch is-rounded is-outlined is-rtl" checked="checked">
                <label class="label" for="switchMasaSekolah">Mulai Sekolah</label>
              </div>
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
              <div class="field">
                <input id="switchAlamatRumah" type="checkbox" name="switchAlamatRumah" class="switch is-rounded is-outlined is-rtl" checked="checked">
                <label class="label" for="switchAlamatRumah">Alamat Rumah</label>
              </div>
              <div class="control">
                <textarea class="textarea" placeholder="Alamat Rumah"></textarea>
              </div>
            </div>
          </div>
          <div class="columns">
            <div class="field column">
              <div class="field">
                <input id="switchNoHp" type="checkbox" name="switchNoHp" class="switch is-rounded is-outlined is-rtl" checked="checked">
                <label class="label" for="switchNoHp">No Handphone</label>
              </div>
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
              <div class="field">
                <input id="switchEmail" type="checkbox" name="switchEmail" class="switch is-rounded is-outlined is-rtl" checked="checked">
                <label class="label" for="switchEmail">Email</label>
              </div>
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
              <div class="field">
                <input id="switchPekerjaan" type="checkbox" name="switchPekerjaan" class="switch is-rounded is-outlined is-rtl" checked="checked">
                <label class="label" for="switchPekerjaan">Pekerjaan</label>
              </div>
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
              <div class="field">
                <input id="switchOrganisasi" type="checkbox" name="switchOrganisasi" class="switch is-rounded is-outlined is-rtl" checked="checked">
                <label class="label" for="switchOrganisasi">Organisasi</label>
              </div>
              <div class="control has-icons-left">
              <input class="input" type="text" placeholder="Oragnisasi">
                <span class="icon is-small is-left">
                  <i class="fa fa-users"></i>
                </span>
              </div>
            </div>
            <div class="field column">
              <div class="field">
                <input id="switchJabatan" type="checkbox" name="switchJabatan" class="switch is-rounded is-outlined is-rtl" checked="checked">
                <label class="label" for="switchJabatan">Jabatan</label>
              </div>
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
              <div class="field">
                <input id="switchAlamat" type="checkbox" name="switchAlamat" class="switch is-rounded is-outlined is-rtl" checked="checked">
                <label class="label" for="switchAlamat">Alamat</label>
              </div>
              <div class="control">
                <textarea class="textarea" placeholder="Alamat"></textarea>
              </div>
            </div>
          </div>
          <div class="columns">
            <div class="field column">
              <div class="field">
                <input id="switchTelepon" type="checkbox" name="switchTelepon" class="switch is-rounded is-outlined is-rtl" checked="checked">
                <label class="label " for="switchTelepon">Telepon</label>
              </div>
              <div class="control has-icons-left">
              <input class="input" type="telp" placeholder="Telepon">
                <span class="icon is-small is-left">
                  <i class="fa fa-phone"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="columns has-text-centered is-centered">
            <div class="column is-2-desktop">
              <div class="columns level-item">
                <figure class="image is-128x128 mtop">
                  <img src="https://bulma.io/images/placeholders/128x128.png">
                </figure>
              </div>
            </div>
            <div class="field column">
              <div class="file is-info has-name hero-body">
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
          <br>
          <div class="columns is-centered is-mobile">
              <input class="button is-primary" type="submit" name="save" value="Simpan Profile">
          </div>
    </section>
  </main>
</div>
@stop
