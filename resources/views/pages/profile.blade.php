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
                <figure class="image is-96x96 round-white">
                  <img src="img/img_avatar.png">
                </figure>
              </div>
              <div class="column pad-top">
                  <h1 class="title has-text-white">Rifardi Taufiq</h1>
                  <h1 class="subtitle has-text-weight-light has-text-white">Angkatan 2017-2018</h1>
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
                  <div class="columns">
                    <div class="column">
                        <h4 class="has-text-size-4 has-text-weight-semibold">Nama Waktu Sekolah</h4>
                    </div>
                    <div class="column">
                        <h4 class="has-text-size-4 is-uppercase">Rifardi Taufiq Yufananda</h4>
                    </div>
                  </div>
                  <div class="columns">
                    <div class="column">
                        <h4 class="has-text-size-4 has-text-weight-semibold">Nama Paggilan</h4>
                    </div>
                    <div class="column">
                        <h4 class="has-text-size-4 is-uppercase">Ardi</h4>
                    </div>
                  </div>
                  <div class="columns">
                    <div class="column">
                        <h4 class="has-text-size-4 has-text-weight-semibold">Tempat Tanggal Lahir</h4>
                    </div>
                    <div class="column">
                        <h4 class="has-text-size-4 is-uppercase">Surabaya, 25 Februari 1997</h4>
                    </div>
                  </div>
                  <div class="columns">
                    <div class="column">
                        <h4 class="has-text-size-4 has-text-weight-semibold">Alamat Rumah</h4>
                    </div>
                    <div class="column">
                        <h4 class="has-text-size-4 is-uppercase">Kupang Krajan 4 No.15 a</h4>
                    </div>
                  </div>
                  <div class="columns">
                    <div class="column">
                        <h4 class="has-text-size-4 has-text-weight-semibold">Nomor Handphone</h4>
                    </div>
                    <div class="column">
                        <h4 class="has-text-size-4 is-uppercase">082225245631</h4>
                    </div>
                  </div>
                  <div class="columns">
                    <div class="column">
                        <h4 class="has-text-size-4 has-text-weight-semibold">Email</h4>
                    </div>
                    <div class="column">
                        <h4 class="has-text-size-4">rifarditaufiq@upnjatim.ac.id</h4>
                    </div>
                  </div>
                </div>
             </div>
           </div>
           <div class="column">
              <div class="box">
                <h1 class="is-size-5 has-text-weight-semibold">
                  <i class="fa fa-graduation-cap"></i> Sekolah</h1>
                <div class="card-content">
                  <div class="columns">
                    <div class="column">
                        <h4 class="has-text-size-4 has-text-weight-semibold">Nomor Induk</h4>
                    </div>
                    <div class="column">
                        <h4 class="has-text-size-4">14363453453453</h4>
                    </div>
                  </div>
                  <div class="columns">
                    <div class="column">
                        <h4 class="has-text-size-4 has-text-weight-semibold">Masa Sekolah</h4>
                    </div>
                    <div class="column">
                        <h4 class="has-text-size-4">2015-2017</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box">
                <h1 class="is-size-5 has-text-weight-semibold">
                  <i class="fa fa-briefcase"></i>  Karir</h1>
                 <div class="card-content">
                   <div class="columns">
                     <div class="column">
                         <h4 class="has-text-size-4 has-text-weight-semibold">Pekerjaan</h4>
                     </div>
                     <div class="column">
                         <h4 class="has-text-size-4">Reserach Engineer</h4>
                     </div>
                   </div>
                   <div class="columns">
                     <div class="column">
                         <h4 class="has-text-size-4 has-text-weight-semibold">Organisasi</h4>
                     </div>
                     <div class="column">
                         <h4 class="has-text-size-4">PT. Karya Anak Bangsa</h4>
                     </div>
                   </div>
                   <div class="columns">
                     <div class="column">
                         <h4 class="has-text-size-4 has-text-weight-semibold">Jabatan</h4>
                     </div>
                     <div class="column">
                         <h4 class="has-text-size-4">Direktur Utama</h4>
                     </div>
                   </div>
                   <div class="columns">
                     <div class="column">
                         <h4 class="has-text-size-4 has-text-weight-semibold">Alamat</h4>
                     </div>
                     <div class="column">
                         <h4 class="has-text-size-4">PT Gojek Indonesia, Bangka, South Jakarta City, Special Capital Region of Jakarta, Indonesia</h4>
                     </div>
                   </div>
                   <div class="columns">
                     <div class="column">
                         <h4 class="has-text-size-4 has-text-weight-semibold">Telp/Fax</h4>
                     </div>
                     <div class="column">
                         <h4 class="has-text-size-4">021-2676762</h4>
                     </div>
                   </div>
                 </div>
              </div>
           </div>
         </div>
      </section>
    </main>
</div>
@stop
