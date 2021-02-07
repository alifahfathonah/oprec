var kode_region = "";
var tahun = new Date();

var npm_IsValid = false;
var region_IsValid = false;
var foto_IsValid = false;

var nama_IsValid = false;
var kelas_IsValid = false;
var jk_IsValid = false;
var tempat_lahir_IsValid = false;
// var tanggal_lahir_IsValid = false;
var np_hp_IsValid = false;
var email_IsValid = false;
var semester_IsValid = false;
var ipk_IsValid = false;

var berkas_IsValid = false;

$('#upload_foto').hide();

//validasi fieldset pertama
$('#npm').on('input', cek_npm);
$('#region').on('input', cek_region);
$('#region').on('input', get_kode_region);
$('#foto').on('input', cek_foto);

//validasi fieldset kedua
$('#nama').on('input', cek_nama);
$('#kelas').on('input', cek_kelas);
$('#jk').on('input', cek_jk);
$('#tempat_lahir').on('input', cek_tempat_lahir);
// $('#tanggal_lahir').on('input', cek_tanggal_lahir);
$('#no_hp').on('input', cek_no_hp);
$('#email').on('input', cek_email);
$('#semester').on('input', cek_semester);
$('#ipk').on('input', cek_ipk);

//validasi fieldset ketiga
$('#berkas').on('input', cek_berkas);

function cek_npm(){
	var npm = $('#npm').val();
	if(npm.length != 8){ //jika npm kurang atau lebih dari 8
		$('.npm-8').attr('style', 'display: inline-block;');
		npm_IsValid = false;
		cek_fildset_pertama();
	}else{ //jika npm benar
		$('.npm-8').attr('style', 'display: none;');
		npm_IsValid = true;
		cek_fildset_pertama();
	}
}

function cek_region(){
	var region = $('#region').val();
	if(region == 2 ){ //jika region kalimalang
		$('.region-required').attr('style', 'display: none;');
		$('.region-invalid').attr('style', 'display: none;');
		$('#upload_foto').hide();
		region_IsValid = true;
		foto_IsValid = true;
		cek_fildset_pertama()
	}else if(region == 3 || region == 4){ //jika region selain kalimalang dan depok
		$('.region-required').attr('style', 'display: none;');
		$('.region-invalid').attr('style', 'display: none;');
		$('#modalRegion').modal('show');
		$('#upload_foto').show();
		region_IsValid = true;
		foto_IsValid = false;
		cek_fildset_pertama()
	}else if(region == 0){ //jika region kosong
		$('.region-invalid').attr('style', 'display: none;');
		$('.region-required').attr('style', 'display: inline-block;');
		$('#upload_foto').hide();
		region_IsValid = false;
		foto_IsValid = false;
		cek_fildset_pertama();
	}else{ //jika region depok
		$('.region-required').attr('style', 'display: none;');
		$('.region-invalid').attr('style', 'display: none;');
		$('#upload_foto').show();
		region_IsValid = true;
		foto_IsValid = false;
		cek_fildset_pertama();
	}
}

function cek_foto(){
	var foto = $('#foto').val();
	var format = foto.substring(foto.lastIndexOf('.')+1, foto.length);
	var size = (this.files[0].size);
	var actual_size = size / 1024;
	if(foto.length == 0){ //jika foto kosong
		$('.foto-required').attr('style', 'display: inline-block;');
		$('.foto-format').attr('style', 'display: none;');
		$('.foto-max').attr('style', 'display: none;')
		foto_IsValid = false;
		cek_fildset_pertama();
	}else if(format != 'jpg'){ //jika format file salah
		$('.foto-required').attr('style', 'display: none;');
		$('.foto-format').attr('style', 'display: inline-block;');
		$('.foto-max').attr('style', 'display: none;')
		foto_IsValid = false;
		cek_fildset_pertama();
	}else if(actual_size > 2048){
		$('.foto-required').attr('style', 'display: none;');
		$('.foto-format').attr('style', 'display: none;');
		$('.foto-max').attr('style', 'display: inline-block;')
		foto_IsValid = false;
		cek_fildset_pertama();

	}else{ //jika foto benar
		$('.foto-required').attr('style', 'display: none;');
		$('.foto-format').attr('style', 'display: none;');
		$('.foto-max').attr('style', 'display: none;')
		foto_IsValid = true;
		cek_fildset_pertama();
	}
}

function cek_fildset_pertama(){
	if(npm_IsValid && region_IsValid && foto_IsValid){
		$('#btn_next1').attr('disabled', false);
		$('#btn_next1').attr('class', 'next btn-edt action-button btn-primary float-right');
	} else{
		$('#btn_next1').attr('disabled', true);
		$('#btn_next1').attr('class', 'next btn-edt action-button btn-secondary float-right');
	}
}

function cek_nama(){
	var nama = $('#nama').val();
	if(nama.length == 0){ //jika nama kosong
		$('.nama-required').attr('style', 'display: inline-block;');
		$('.nama-too_long').attr('style', 'display: none;');
		nama_IsValid = false;
		cek_fildset_kedua();
	}else if( nama.length > 34){ //jika nama terlalu panjang
		$('.nama-required').attr('style', 'display: none;');
		$('.nama-too_long').attr('style', 'display: inline-block;');
		nama_IsValid = false;
		cek_fildset_kedua();
	}else{ //jika nama benar
		$('.nama-required').attr('style', 'display: none;');
		$('.nama-too_long').attr('style', 'display: none;');
		nama_IsValid = true;
		cek_fildset_kedua();
	}
}

function cek_kelas(){
	var kelas = $('#kelas').val();
	var tingkat = kelas.substring(0, 1)
	if(kelas.length == 0){//jika kelas kosong
		$('.kelas-required').attr('style', 'display: inline-block;');
		$('.kelas-format').attr('style', 'display: none;');
		$('.kelas-min').attr('style', 'display: none;');
		kelas_IsValid = false;
		cek_fildset_kedua();
	}else if(isNaN(tingkat)){//jika input pertama bukan angka
		$('.kelas-required').attr('style', 'display: none;');
		$('.kelas-format').attr('style', 'display: inline-block;');
		$('.kelas-min').attr('style', 'display: none;');
		kelas_IsValid = false;
		cek_fildset_kedua();
	}else if(tingkat == 1){//jika tingkat 1
		$('.kelas-required').attr('style', 'display: none;');
		$('.kelas-format').attr('style', 'display: none;');
		$('.kelas-min').attr('style', 'display: inline-block;');
		kelas_IsValid = false;
		cek_fildset_kedua();
	}else{//benar
		$('.kelas-required').attr('style', 'display: none;');
		$('.kelas-format').attr('style', 'display: none;');
		$('.kelas-min').attr('style', 'display: none;');
		kelas_IsValid = true;
		cek_fildset_kedua();
	}
}

function cek_jk(){
	var jk = $('#jk').val();
	if(jk.length == 0){ //jika jk kosong
		$('.jk-required').attr('style', 'display: inline-block;');
		jk_IsValid = false;
		cek_fildset_kedua();
	}else{ //jika jk benar
		$('.jk-required').attr('style', 'display: none;');
		jk_IsValid = true;
		cek_fildset_kedua();
	}
}

function cek_tempat_lahir(){
	var tempat_lahir = $('#tempat_lahir').val();
	if(tempat_lahir.length == 0){ //jika tempat_lahir kosong
		$('.tempat_lahir-required').attr('style', 'display: inline-block;');
		tempat_lahir_IsValid = false;
		cek_fildset_kedua();
	}else{ //jika tempat_lahir benar
		$('.tempat_lahir-required').attr('style', 'display: none;');
		tempat_lahir_IsValid = true;
		cek_fildset_kedua();
	}
}

//CEK TANGGAL LAHIR?

// function cek_tanggal_lahir(){
// 	var tanggal_lahir = $('#tanggal_lahir').val();
// 	if(tanggal_lahir!=valueDate){ //jika tanggal_lahir valid
// 		$('.tanggal_lahir-required').attr('style', 'display: inline-block;');
// 		tanggal_lahir_IsValid = false;
// 		cek_fildset_kedua();
// 	}else{ //jika tanggal_lahir benar
// 		$('.tanggal_lahir-required').attr('style', 'display: none;');
// 		tanggal_lahir_IsValid = true;
// 		cek_fildset_kedua();
// 	}
// }

function cek_no_hp(){
	var no_hp = $('#no_hp').val();
	if(no_hp.length == 0){//jika no_hp kosong
		$('.no_hp-required').attr('style', 'display: inline-block;');
		$('.no_hp-format').attr('style', 'display: none;');
		no_hp_IsValid = false;
		cek_fildset_kedua();
	}else if(isNaN(no_hp)){//jika input pertama bukan angka
		$('.no_hp-required').attr('style', 'display: none;');
		$('.no_hp-format').attr('style', 'display: inline-block;');
		no_hp_IsValid = false;
		cek_fildset_kedua();
	} else{//benar
		$('.no_hp-required').attr('style', 'display: none;');
		$('.no_hp-format').attr('style', 'display: none;');
		no_hp_IsValid = true;
		cek_fildset_kedua();
	}
}

function cek_email(){
	var email = $('#email').val();
	if(email.length == 0){//jika email kosong
		$('.email-required').attr('style', 'display: inline-block;');
		$('.email-format').attr('style', 'display: none;');
		email_IsValid = false;
		cek_fildset_kedua();
	}
	else if(email && /(^\w.*@\w+\.\w)/.test(email)){//jika input pertama bukan angka
		$('.email-required').attr('style', 'display: none;');
		$('.email-format').attr('style', 'display: none;');
		email_IsValid = true;
		cek_fildset_kedua();
	}
	else{//benar
		$('.email-required').attr('style', 'display: none;');
		$('.email-format').attr('style', 'display: inline-block;');
		email_IsValid = false;
		cek_fildset_kedua();
	}
}

function cek_semester(){
	var semester = $('#semester').val();
	if(semester.length == 0){//jika semester kosong
		$('.semester-required').attr('style', 'display: inline-block;');
		$('.semester-format').attr('style', 'display: none;');
		$('.semester-requirement').attr('style', 'display: none;');
		semester_IsValid = false;
		cek_fildset_kedua();
	}else if(isNaN(semester)){//jika input pertama bukan angka
		$('.semester-required').attr('style', 'display: none;');
		$('.semester-format').attr('style', 'display: inline-block;');
		$('.semester-requirement').attr('style', 'display: none;');
		semester_IsValid = false;
		cek_fildset_kedua();
	}else if(semester < 3){//jika input pertama bukan angka
		$('.semester-required').attr('style', 'display: none;');
		$('.semester-format').attr('style', 'display: none;');
		$('.semester-requirement').attr('style', 'display: inline-block;');
		semester_IsValid = false;
		cek_fildset_kedua();
	}else if(semester > 9){//jika input pertama bukan angka
		$('.semester-required').attr('style', 'display: none;');
		$('.semester-format').attr('style', 'display: none;');
		$('.semester-requirement').attr('style', 'display: inline-block;');
		semester_IsValid = false;
		cek_fildset_kedua();
	} else{//benar
		$('.semester-required').attr('style', 'display: none;');
		$('.semester-format').attr('style', 'display: none;');
		$('.semester-requirement').attr('style', 'display: none;');
		semester_IsValid = true;
		cek_fildset_kedua();
	}
}

function cek_ipk(){
	var ipk = $('#ipk').val();
	if(ipk.length == 0){//jika ipk kosong
		$('.ipk-required').attr('style', 'display: inline-block;');
		$('.ipk-format').attr('style', 'display: none;');
		$('.ipk-min').attr('style', 'display: none;');
		ipk_IsValid = false;
		cek_fildset_kedua();
	} else if(ipk.length > 4){
		$('.ipk-required').attr('style', 'display: none;');
		$('.ipk-format').attr('style', 'display: inline-block;');
		$('.ipk-min').attr('style', 'display: none;');
		ipk_IsValid = false;
		cek_fildset_kedua();
	} else if(ipk > 4){
		$('.ipk-required').attr('style', 'display: none;');
		$('.ipk-format').attr('style', 'display: inline-block;');
		$('.ipk-min').attr('style', 'display: none;');
		ipk_IsValid = false;
		cek_fildset_kedua();
	} else if(ipk < 2.75){
		$('.ipk-required').attr('style', 'display: none;');
		$('.ipk-format').attr('style', 'display: none;');
		$('.ipk-min').attr('style', 'display: inline-block;');
		ipk_IsValid = false;
		cek_fildset_kedua();
	} else if(isNaN(ipk)){//jika input pertama bukan angka
		$('.ipk-required').attr('style', 'display: none;');
		$('.ipk-format').attr('style', 'display: inline-block;');
		$('.ipk-min').attr('style', 'display: none;');
		ipk_IsValid = false;
		cek_fildset_kedua();
	}else{//benar
		$('.ipk-required').attr('style', 'display: none;');
		$('.ipk-format').attr('style', 'display: none;');
		$('.ipk-min').attr('style', 'display: none;');
		ipk_IsValid = true;
		cek_fildset_kedua();
	}
}

function cek_fildset_kedua(){
	if (nama_IsValid && kelas_IsValid && jk_IsValid && tempat_lahir_IsValid && no_hp_IsValid && email_IsValid && semester_IsValid && ipk_IsValid){
		$('#btn_next2').attr('disabled', false);
		$('#btn_next2').attr('class', 'next btn-edt action-button btn-primary float-right');
	} else{
		$('#btn_next2').attr('disabled', true);
		$('#btn_next2').attr('class', 'next btn-edt action-button btn-secondary float-right');
	}
}

function cek_berkas(){
	var berkas = $('#berkas').val();
	var format = berkas.substring(berkas.lastIndexOf('.')+1, berkas.length);
	var size = (this.files[0].size);
	var actual_size = size / 1024;
	if(berkas.length == 0){ //jika berkas kosong
		$('.berkas-required').attr('style', 'display: inline-block;');
		$('.berkas-format').attr('style', 'display: none;');
		$('.berkas-max').attr('style', 'display: none;')
		berkas_IsValid = false;
		cek_fildset_ketiga();
	}else if(format != 'rar'){ //jika format file salah
		$('.berkas-required').attr('style', 'display: none;');
		$('.berkas-format').attr('style', 'display: inline-block;');
		$('.berkas-max').attr('style', 'display: none;')
		berkas_IsValid = false;
		cek_fildset_ketiga();
	}else if(actual_size > 10240){
		$('.berkas-required').attr('style', 'display: none;');
		$('.berkas-format').attr('style', 'display: none;');
		$('.berkas-max').attr('style', 'display: inline-block;')
		berkas_IsValid = false;
		cek_fildset_ketiga();

	}else{ //jika berkas benar
		$('.berkas-required').attr('style', 'display: none;');
		$('.berkas-format').attr('style', 'display: none;');
		$('.berkas-max').attr('style', 'display: none;')
		berkas_IsValid = true;
		cek_fildset_ketiga();
	}
}

function cek_fildset_ketiga(){
	if (berkas_IsValid){
		$('#btn_next3').attr('disabled', false);
		$('#btn_next3').attr('class', 'float-right next mx-auto action-button btn-primary');
	} else{
		$('#btn_next3').attr('disabled', true);
		$('#btn_next3').attr('class', 'float-right next mx-auto action-button btn-secondary');
	}
}

function get_kode_region(){
	var kd_region = $('#region').val();
	if(kd_region == 1 ){ //jika region depok
		$.ajax({
			url: 'http://localhost/oprec/admin/regionkd',
			method: 'POST',
			dataType: 'json',
			success: function(data){
				kode_region = "KD";
				if(data.length == 0){
					$('#token').val(kode_region+tahun.getFullYear().toString().substr(-2)+'001');
				}
				else{
					kode = data[0].token;
					int_no_urut = parseInt(kode.substring(4, kode.length));
					no_urut_baru = int_no_urut+1;
					string_no_urut = no_urut_baru.toString();
					no_urut = string_no_urut.padStart(3, '0');
					$('#token').val(kode_region+tahun.getFullYear().toString().substr(-2)+no_urut);
				}
			}
		});	
	}else if(kd_region == 2){ //jika region kalimalang
		$.ajax({
			url: 'http://localhost/oprec/admin/regionxm',
			method: 'POST',
			dataType: 'json',
			success: function(data){
				kode_region = "XM";
				if(data.length == 0){
					$('#token').val(kode_region+tahun.getFullYear().toString().substr(-2)+'001');
				}
				else{
					kode = data[0].token;
					int_no_urut = parseInt(kode.substring(4, kode.length));
					no_urut_baru = int_no_urut+1;
					string_no_urut = no_urut_baru.toString();
					no_urut = string_no_urut.padStart(3, '0');
					$('#token').val(kode_region+tahun.getFullYear().toString().substr(-2)+no_urut);
				}
			}
		});	
	}else if(kd_region == 3){ //jika region cengkareng
		$.ajax({
			url: 'http://localhost/oprec/admin/regionck',
			method: 'POST',
			dataType: 'json',
			success: function(data){
				kode_region = "CK";
				if(data.length == 0){
					$('#token').val(kode_region+tahun.getFullYear().toString().substr(-2)+'001')
				}
				else{
					kode = data[0].token;
					int_no_urut = parseInt(kode.substring(4, kode.length));
					no_urut_baru = int_no_urut+1;
					string_no_urut = no_urut_baru.toString();
					no_urut = string_no_urut.padStart(3, '0');
					$('#token').val(kode_region+tahun.getFullYear().toString().substr(-2)+no_urut);
				}
			}
		});	
	}else{ //jika region karawaci
		$.ajax({
			url: 'http://localhost/oprec/admin/regionkw',
			method: 'POST',
			dataType: 'json',
			success: function(data){
				kode_region = "KW";
				if(data.length == 0){
					$('#token').val(kode_region+tahun.getFullYear().toString().substr(-2)+'001')
				}
				else{
					kode = data[0].token;
					int_no_urut = parseInt(kode.substring(4, kode.length));
					no_urut_baru = int_no_urut+1;
					string_no_urut = no_urut_baru.toString();
					no_urut = string_no_urut.padStart(3, '0');
					$('#token').val(kode_region+tahun.getFullYear().toString().substr(-2)+no_urut);
				}
			}
		});	
	}
}