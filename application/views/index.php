<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Start tanggal --> 
<section class="banner-area relative">
  <div class="container py-5">
    <!-- For demo purpose -->
    <div class="row text-center mb-3 mt-s1">
      <div class="col-lg-8 mx-auto">
        <h3>Bryantama</h3>
        <p class="lead mb-0">Calon Asisten Laboratorium Teknik Informatika</p>
      </div>
    </div><!-- End -->


    <div class="row">
      <div class="col-lg-10 mx-auto">
        <?php echo validation_errors(); ?>
        <!-- Timeline -->
        <ul class="timeline">
          <li class="timeline-item bg-grey rounded ml-3 p-4 shadow text-black text-black">
            <div class="timeline-arrow"></div>
            <h2 class="h5 mb-0">Pengumpulan Berkas</h2><span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>01 Februari - 23 Februari 2021</span>
            <p class="text-small mt-2 font-weight-light">Pengumpulan berkas dilakukan secara online dengan <a href="<?=base_url('#formulir') ?>" title="Formulir Pendaftaran Asisten Baru Laboratorium Teknik informatika">mengisi link berikut</a>. Berkas yang diperlukan :</p>
            <ul class="dashed">
              <li>Surat Lamaran</li>
              <li>CV</li>
              <li>Rangkuman DNS Semester Terakhir (<span class="fw-600">Student Site</span class="fw-600">)</li>
              <li>Scan Pas Foto</li>
              <li>Scan KTP</li>
                <li>Scan KRS Semester Terakhir</li>
                <li>Scan Sertifikat (<span class="fw-600">Opsional</span class="fw-600">)</li>
                <!-- (<span class="fw-600">Region Kalimalang dan Depok</span class="fw-600">)
                (<span class="fw-600">Region Kalimalang dan Depok</span class="fw-600">) -->
                <li>Essai Diri Min. 400 kata</li>
              <li>Essai Labti Min. 400 kata </li>
            </ul>
          </li>
                <li class="timeline-item bg-grey rounded ml-3 p-4 shadow text-black text-black">
                  <div class="timeline-arrow"></div>
                  <h2 class="h5 mb-0">Briefing Calon Asisten</h2><span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>24 Februari 2021 (10:00 - Selesai)</span>
                  <br><span class="small text-gray"><i class="fas fa-map-marked-alt"></i>&nbsp;Online</span>
                  <p class="text-small mt-2 font-weight-light">Tahap Briefing adalah penjelasan dan arahan lebih lanjut kepada seluruh Calon Asisten Laboratorium Teknik Informatika mengenai proses penerimaan asisten.</p>
                </li>
                  <li class="timeline-item bg-grey rounded ml-3 p-4 shadow text-black">
                    <div class="timeline-arrow"></div>
                    <h2 class="h5 mb-0">Ujian Teori</h2><span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>1 Maret 2021</span>
                    <br><span class="small text-gray"><i class="fas fa-map-marked-alt"></i>&nbsp;Online</span>
                    <p>Ujian ini berisi beberapa soal pilihan ganda tentang Pengetahuan Umum TI dan beberapa bahasa pemograman lainnya.</p>
            <!-- <div class="row">
              <div class="col-lg-6 mb-2">
                <span class="text-small mt-2 font-weight-light fw-600">Untuk Region Depok :</span>
                <ul class="dashed">
                  <li>Pengetahuan Umum TI</li>
                </ul>
              </div>
              <div class="col-lg-6 mb-2">
                <span class="text-small mt-2 font-weight-light fw-600">Untuk Region Kalimalang :</span>
                <ul class="dashed">
                  <li>Pengetahuan Umum TI</li>
                  <li>Pascal</li>
                  <li>Visual Basic</li>
                  <li>Ruby/Python</li>
                  <li>C/C++</li>
                </ul>
              </div>
            </div> -->
          </li>
          <li class="timeline-item bg-grey rounded ml-3 p-4 shadow text-black">
            <div class="timeline-arrow"></div>
            <h2 class="h5 mb-0">Ujian Praktik</h2><span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>2 Maret - 3 Maret 2021</span>
            <br><span class="small text-gray"><i class="fas fa-map-marked-alt"></i>&nbsp;Online</span>
            <p class="text-small mt-2 font-weight-light">Materi Ujian Praktik :</p>
            <div class="row">
              <div class="col-lg-4 mb-2">
                <span class="text-small mt-2 font-weight-light fw-600">Untuk Seluruh Tingkat :</span>
                <ul class="dashed">
                  <li>Java</li>
                  <li>Pascal / Delphi</li>
                  <li>Basic / Visual Basic</li>
                  <li>Pyhon / Ruby</li>
                  <li>C / C++</li>
                  <li>Cobol <span class="fw-600">(Hanya untuk Region Kalimalang)</span></li>
                </ul>
              </div>
              <div class="col-lg-4 mb-2">
                <span class="text-small mt-2 font-weight-light fw-600">Tambahan Untuk Tingkat 3 dan 4 :</span>
                <ul class="dashed">
                  <li>Networking / Tracer</li>
                  <li>Blender / 3D Modelling</li>
                  <li>MySQL / Oracle</li>
                </ul>
              </div>
              <div class="col-lg-4">
                <span class="text-small mt-2 font-weight-light fw-600">Tambahan Untuk Tingkat 4 :</span>
                <ul class="dashed">
                  <li>PHP / CodeIgniter</li>
                </ul>
              </div>
            </div>
          </li>
          <li class="timeline-item bg-grey rounded ml-3 p-4 shadow text-black">
            <div class="timeline-arrow"></div>
            <h2 class="h5 mb-0">Wawancara</h2><span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>4 Maret 2021</span>
            <br><span class="small text-gray"><i class="fas fa-map-marked-alt"></i>&nbsp;Online</span>
            <p class="text-small mt-2 font-weight-light">Pada tahap ini Calon Asisten akan di wawancarai oleh Asisten Tetap Laboratorium Teknik Informatika.</p>
            <p class="text-small mt-2 font-weight-light"><span class="fw-600">Sangat disarankan untuk membawa Portofolio atau Project.</span></p>
          </li>
        </ul><!-- End -->
        <p><em>*Timeline sewaktu-waktu dapat berubah. Untuk detailnya akan diinformasikan saat Briefing</em></p>
      </div>
    </div>
  </div>
</section>
<!-- End tanggal -->

<!-- start oprec -->

<!-- Gambar closing oprec [Untuk ganti formnya jika sudah close] -->
<!-- <img src="<?=base_url('asset/images/oprec_closed.png')?>" width="100%" height="auto"> -->
<!-- End gambar closing oprec -->

<section class="banner-area relative">
 <!-- MultiStep Form -->
 <div class="container-fluid" id="formulir">
  <div class="row justify-content-center mt-0">
    <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
      <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
        <?= validation_errors(); ?>
        <h2><strong>Formulir Penerimaan Asisten</strong></h2>
        <h3><strong>Laboratorium Teknik Informatika</strong></h3>
        <div class="row">
          <div class="col-md-12 mx-0">
            <form id="msform" method="post" action="<?=base_url('user/add_calas')?>" enctype="multipart/form-data" onkeydown="return event.key != 'Enter';">
              <!-- progressbar -->
              <ul id="progressbar">
                <li class="active" id="account"><strong>Register</strong></li>
                <li id="personal"><strong>Biodata</strong></li>
                <li id="payment"><strong>Berkas</strong></li>
                <li id="confirm"><strong>Finish</strong></li>
              </ul> <!-- fieldsets -->
              <fieldset id="fieldset1">
                <div class="form-card">
                  <div class="form-group">
                    <input type="text" name="npm" id="npm" placeholder="NPM" autocomplete="off" class="form-control"/>
                    <input type="hidden" name="token" id="token" style="position: fixed; top: 0px; display: none;"/>
                    <div class="invalid-feedback npm-8" style="display: none;">NPM harus diisi dengan 8 karakter!</div>
                  </div>
                  <div class="form-group">
                    <select class="list-dt form-control" name="region" id="region" style="width: 100%">
                      <option selected value=0>Pilih Region</option>
                      <?php foreach ($region as $reg) :?>
                        <option value="<?=$reg['id_region']?>"><?=$reg['region']?></option>
                      <?php endforeach ?>
                    </select>
                    <div class="invalid-feedback region-required" style="display: none;">Data Region harus diisi</div>
                    <div class="invalid-feedback region-invalid" style="display: none;">Berkas Langsung Di Serahkan ke Kampus J1222</div>
                  </div>
                  <div class="form-group mt-4" id="upload_foto">
                    <div class="custom-file">
                     <input type="file" class="mb-0 custom-file-input" id="foto" name="foto" accept=".jpg">
                     <label class="custom-file-label" for="lamaran">Upload Pas Foto</label>
                     <div class="invalid-feedback foto-required" style="display: none;">Data Foto harus diisi</div>
                     <div class="invalid-feedback foto-format" style="display: none;">Format File Salah</div>
                     <div class="invalid-feedback foto-max" style="display: none;">Ukuran File Terlalu Besar</div>
                   </div>
                   <small class="form-text text-muted">*Upload foto dengan format .jpg <strong>(Max Size : 2MB)</strong></small>
                 </div>
               </div>
               <input type="button" name="next" id="btn_next1" class="next btn-edt action-button btn-secondary float-right" value="Next" disabled="true">
             </fieldset>
             <fieldset>
              <div class="form-card">
                <div class="row">
                 <div class="form-group col-md-6">
                  <input class="mb-0 form-control" type="text" name="nama" id="nama" placeholder="Nama Lengkap" />
                  <div class="invalid-feedback region-required" style="display: inline-block;">Data Region harus diisi</div>
                  <div class="invalid-feedback nama-required" style="display: none;">Data Nama harus diisi</div>
                  <div class="invalid-feedback nama-too_long" style="display: none;">Data Nama terlalu panjang</div>
                </div>
                <div class="form-group col-md-6">
                  <input class="mb-0 form-control" type="text" name="kelas" id="kelas" placeholder="Kelas" />
                  <div class="invalid-feedback kelas-required" style="display: none;">Data Kelas harus diisi</div>
                  <div class="invalid-feedback kelas-format" style="display: none;">Format Kelas Salah</div>
                  <div class="invalid-feedback kelas-min" style="display: none;">Anda tidak memenuhi syarat</div>
                </div>
              </div>
              <div class="form-group">
                <select class="list-dt mb-4 form-control" name="jk" style="width: 100%" id="jk">
                  <option selected value="">Pilih Jenis Kelamin</option>
                  <?php foreach ($jk as $jkel) :?>
                   <option value="<?=$jkel['id_jk']?>"><?=$jkel['jk']?></option>
                 <?php endforeach ?>
               </select>
               <div class="invalid-feedback jk-required" style="display: none;">Data Jenis Kelamin harus diisi</div>
             </div>
             <div class="row">
              <div class="form-group col-md-6">
                <input class="mb-0 form-control" type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir"/>
                <div class="invalid-feedback tempat_lahir-required" style="display: none;">Data Tempat Lahir harus diisi</div>
              </div>
              <div class="form-group col-md-6">
                <input class="mb-0 form-control" type="text" onfocus="(this.type='date')" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir"/>
                <div class="invalid-feedback tanggal_lahir-required" style="display: none;">Data tanggal lahir harus diisi</div>
              </div>
            </div>
            <div class="form-group">
              <input class="mb-0 form-control" type="text" name="no_hp" id="no_hp" placeholder="Nomor Handphone" />
              <small class="form-text text-muted">*Pastikan No.HP benar dan aktif</small>
              <div class="invalid-feedback no_hp-required" style="display: none;">Data Nomor Handphone harus diisi</div>
              <div class="invalid-feedback no_hp-format" style="display: none;">Format Nomor Handphone salah</div>
            </div>
            <div class="form-group">
              <input class="mb-0 form-control" type="text" name="email" id="email" placeholder="Email" />
              <small class="form-text text-muted">*Pastikan Email benar dan aktif</small>
              <div class="invalid-feedback email-required" style="display: none;">Data Email harus diisi</div>
              <div class="invalid-feedback email-format" style="display: none;">Format Email salah</div>
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="semester" id="semester" placeholder="Semester" />
              <div class="invalid-feedback semester-required" style="display: none;">Data Semester harus diisi</div>
              <div class="invalid-feedback semester-format" style="display: none;">Format Semester salah</div>
              <div class="invalid-feedback semester-requirement" style="display: none;">Anda tidak memenuhi persyaratan</div>
            </div>
            <div class="form-group">
              <input type="text" name="ipk" id="ipk" class="mb-0 form-control" placeholder="IPK" />
              <div class="invalid-feedback ipk-required" style="display: none;">Data ipk harus diisi</div>
              <div class="invalid-feedback ipk-format" style="display: none;">Format IPK salah</div>
              <div class="invalid-feedback ipk-min" style="display: none;">IPK anda tidak memenuhi persyaratan</div>
              <small class="form-text text-muted">*Gunakan tanda titik. Contoh 3.25</small>
            </div>
          </div> 
          <input type="button" name="previous" class="float-left previous action-button-previous" value="Previous" />
          <input type="button" name="next" id="btn_next2" class="next btn-edt action-button btn-secondary float-right" value="Next" disabled="true" />
        </fieldset>
        <fieldset>
         <div class="form-card">
          <div class="custom-file mb-3">
           <input type="file" class="mb-0 custom-file-input" id="berkas" name="berkas" accept=".rar">
           <label class="custom-file-label" for="lamaran">Berkas Pendaftaran</label>
           <div class="invalid-feedback berkas-required" style="display: none;">Data Berkas harus diisi</div>
           <div class="invalid-feedback berkas-format" style="display: none;">Format File Salah</div>
           <div class="invalid-feedback berkas-max" style="display: none;">Ukuran File Terlalu Besar</div>
         </div>
         <h4><strong>PENTING : Harap Perhatikan Aturan dan Susunan Nama File!</strong></h4>
         <span class="fw-400 color-black text-black">Berkas yang dilampirkan :</span>
         <ul class="ml-4 fw-400 color-black text-black" style="list-style-type: dashed">
          <li fw-400 color-black text-black>1_NPM_Surat Lamaran.pdf</li>
          <li fw-400 color-black text-black>2_NPM_CV.pdf</li>
          <li fw-400 color-black text-black>3_NPM_EssaiDiri.pdf</li>
          <li fw-400 color-black text-black>4_NPM_EssaiLabti.pdf</li>
          <li fw-400 color-black text-black>5_NPM_RangkumanNilai.pdf</li>
          <li fw-400 color-black text-black>6_NPM_KTP.pdf</li>
          <li fw-400 color-black text-black>7_NPM_KRS.pdf</li>
          <li fw-400 color-black text-black>8_NPM_PasFoto.pdf</li>
          <li fw-400 color-black text-black>9_NPM_Sertifikat.pdf (<span class="fw-600">Opsional</span>)</li>
        </ul>
        <span class="fw-600 color-black text-black">Semua berkas disatukan dan diupload dalam format WinRAR (.rar) &nbsp; Max size : 10MB</strong></span><br>
        <span class="fw-600 color-black text-black">Nama File WinRAR : Berkas_Nama_NPM</span>
      </div>
      <input type="button" name="previous" class="float-left previous action-button-previous" value="Previous" />
      <button name="download" id="btn_next3" class="float-right next mx-auto action-button btn-secondary">Submit</button>
    </fieldset>
    <fieldset>
      <div class="form-card">
        <h2 class="fs-title text-center">Selamat!</h2> <br><br>
        <div class="row justify-content-center">
          <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
        </div> <br><br>
        <div class="row justify-content-center">
          <div class="col-7 text-center">
            <h5>Anda Telah Terdaftar</h5>
            <h6>Mohon tunggu untuk download Kartu Peserta Anda</h6>
          </div>
        </div>
            <!-- <div class="row justify-content-center">
<div class="col text-center">
<button name="download" class="next mx-auto action-button">Download</button>
</div>
</div> -->
</div>
</fieldset>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- End oprec -->


<!-- Modal Region Luar Depok-->
<div class="modal fade" id="modalRegion" tabindex="-1" role="dialog" aria-labelledby="modalRegionTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Informasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Seluruh Tahap Test dan Wawancara akan Diselenggarakan di Kelapa Dua Depok
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>