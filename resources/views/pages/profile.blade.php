@extends('template')
@section('main')
<div class="columns">
    <aside class="card column is-3 is-hidden-touch">
      @include('aside')
    </aside>
    <main class="card column">
      <section class="card-content">
        <div class="box hero bg-pattern">
          <div class="hero-body">
            <div class="columns">
              <div class="column is-2">
                <figure class="image is-96x96">
                  <img class="round round-profile brd-white" src="img/foto/{{ $alumni->foto }}">
                </figure>
              </div>
              <div class="column pad-top">
                  <h1 class="title has-text-white">{{ $alumni->nama }}</h1>
                  <h1 class="subtitle has-text-weight-light has-text-white">Angkatan {{ $alumni->mulai }}-{{ $alumni->lulus }}</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="columns">
           <div class="column is-7">
             <div class="box">
               <h1 class="is-size-5 has-text-weight-semibold">
                 <i class="fa fa-user"></i>  Biodata Alumni</h1>
                <div class="card-content">
                @if($alumni->namaSekolahVis==1)
                  <div class="columns">
                    <div class="column">
                        <h4 class="has-text-size-4 has-text-weight-semibold">Nama Waktu Sekolah</h4>
                    </div>
                    <div class="column">
                        <h4 class="has-text-size-4 is-uppercase">{{ $alumni->nama_sekolah }}</h4>
                    </div>
                  </div>
                  @endif
                  @if($alumni->namaPanggilanVis==1)
                  <div class="columns">
                    <div class="column">
                        <h4 class="has-text-size-4 has-text-weight-semibold">Nama Paggilan</h4>
                    </div>
                    <div class="column">
                        <h4 class="has-text-size-4 is-uppercase">{{ $alumni->nama_panggilan }}</h4>
                    </div>
                  </div>
                  @endif
                  @if($alumni->tempatLahirVis==1)
                  <div class="columns">
                    <div class="column">
                        <h4 class="has-text-size-4 has-text-weight-semibold">Tempat Lahir</h4>
                    </div>
                    <div class="column">
                        <h4 class="has-text-size-4 is-uppercase">{{ $alumni->tempat_lahir }}</h4>
                    </div>
                  </div>
                  @endif
                  @if($alumni->tanggalLahirVis==1)
                  <div class="columns">
                    <div class="column">
                        <h4 class="has-text-size-4 has-text-weight-semibold">Tanggal Lahir</h4>
                    </div>
                    <div class="column">
                        <h4 class="has-text-size-4 is-uppercase">{{ $alumni->tanggal_lahir }}</h4>
                    </div>
                  </div>
                  @endif
                  @if($alumni->alamatVis==1)
                  <div class="columns">
                    <div class="column">
                        <h4 class="has-text-size-4 has-text-weight-semibold">Alamat Rumah</h4>
                    </div>
                    <div class="column">
                        <h4 class="has-text-size-4 is-uppercase">{{ $alumni->alamat }}</h4>
                    </div>
                  </div>
                  @endif
                  @if($alumni->telpVis==1)
                  <div class="columns">
                    <div class="column">
                        <h4 class="has-text-size-4 has-text-weight-semibold">Nomor Handphone</h4>
                    </div>
                    <div class="column">
                        <h4 class="has-text-size-4 is-uppercase">{{ $alumni->telp }}</h4>
                    </div>
                  </div>
                  @endif
                  @if($alumni->emailVis==1)
                  <div class="columns">
                    <div class="column">
                        <h4 class="has-text-size-4 has-text-weight-semibold">Email</h4>
                    </div>
                    <div class="column">
                        <h4 class="has-text-size-4">{{ $alumni->email }}</h4>
                    </div>
                  </div>
                  @endif
                </div>
             </div>
           </div>
           <div class="column">
              <div class="box">
                <h1 class="is-size-5 has-text-weight-semibold">
                  <i class="fa fa-graduation-cap"></i> Sekolah</h1>
                <div class="card-content">
                  @if($alumni->nisVis==1)
                  <div class="columns">
                    <div class="column">
                        <h4 class="has-text-size-4 has-text-weight-semibold">Nomor Induk</h4>
                    </div>
                    <div class="column">
                        <h4 class="has-text-size-4">{{ $alumni->nis }}</h4>
                    </div>
                  </div>
                  @endif
                  @if($alumni->angkatanVis==1)
                  <div class="columns">
                    <div class="column">
                        <h4 class="has-text-size-4 has-text-weight-semibold">Masa Sekolah</h4>
                    </div>
                    <div class="column">
                        <h4 class="has-text-size-4">{{ $alumni->mulai }}-{{ $alumni->lulus }}</h4>
                    </div>
                  </div>
                  @endif
                </div>
              </div>
              <div class="box">
                <h1 class="is-size-5 has-text-weight-semibold">
                  <i class="fa fa-briefcase"></i>  Karir</h1>
                 <div class="card-content">
                    @if($alumni->pekerjaanVis==1)
                    <div class="columns">
                     <div class="column">
                         <h4 class="has-text-size-4 has-text-weight-semibold">Pekerjaan</h4>
                     </div>
                     <div class="column">
                         <h4 class="has-text-size-4">{{ $alumni->pekerjaan }}</h4>
                     </div>
                    </div>
                    @endif
                    @if($alumni->organisasiVis==1)
                    <div class="columns">
                      <div class="column">
                         <h4 class="has-text-size-4 has-text-weight-semibold">Organisasi</h4>
                      </div>
                      <div class="column">
                         <h4 class="has-text-size-4">{{ $alumni->organisasi }}</h4>
                      </div>
                    </div>
                    @endif
                    @if($alumni->jabatanVis==1)
                    <div class="columns">
                      <div class="column">
                         <h4 class="has-text-size-4 has-text-weight-semibold">Jabatan</h4>
                      </div>
                      <div class="column">
                         <h4 class="has-text-size-4">{{ $alumni->jabatan }}</h4>
                      </div>
                    </div>
                    @endif
                    @if($alumni->alamatOrgVis==1)
                    <div class="columns">
                      <div class="column">
                         <h4 class="has-text-size-4 has-text-weight-semibold">Alamat</h4>
                      </div>
                      <div class="column">
                         <h4 class="has-text-size-4">{{ $alumni->alamat_org }}</h4>
                      </div>
                    </div>
                    @endif
                    @if($alumni->telpOrgVis==1)
                    <div class="columns">
                       <div class="column">
                         <h4 class="has-text-size-4 has-text-weight-semibold">Telp/Fax</h4>
                      </div>
                      <div class="column">
                         <h4 class="has-text-size-4">{{ $alumni->telp_org }}</h4>
                      </div>
                    </div>
                    @endif
                 </div>
              </div>
           </div>
         </div>
      </section>
    </main>
</div>
@stop
