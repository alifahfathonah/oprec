//function detail biodata calas
$(function(){
	$('#nilai-input').attr('type', 'button');

	//biodata
	$('.btn_detail').on('click', function(){
		const token = $(this).data('token');
		$.ajax({
			url: 'http://ti.lab.gunadarma.ac.id/oprec/admin/getDetailCalas',
			data: {token_calas : token},
			method: 'POST',
			dataType: 'json',
			success: function(data){
				var hari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
				var bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
				$('#modalDetailTitle').html('Detail '+data[0].nama);
				$('#detail_token').val(data[0].token);
				$('#detail_token').attr('disabled', true);
				$('#detail_nama').val(data[0].nama);
				$('#detail_nama').attr('disabled', true);
				$('#detail_kelas').val(data[0].kelas);
				$('#detail_kelas').attr('disabled', true);
				var tgl_daftar = new Date(data[0].tanggal_daftar);
				$('#detail_tanggal_daftar').val(hari[tgl_daftar.getDay()]+', '+tgl_daftar.getDate()+' '+bulan[tgl_daftar.getMonth()]+' '+tgl_daftar.getFullYear()+' '+tgl_daftar.getHours()+':'+tgl_daftar.getMinutes()+':'+tgl_daftar.getSeconds());
				$('#detail_tanggal_daftar').attr('disabled', true);
				$('#detail_jk').val(data[0].jk);
				$('#detail_jk').attr('disabled', true);
				var tgl_lahir = new Date(data[0].tanggal_lahir);
				$('#detail_ttl').val(data[0].tempat_lahir+', '+tgl_lahir.getDate()+' '+bulan[tgl_lahir.getMonth()]+' '+tgl_lahir.getFullYear());
				$('#detail_ttl').attr('disabled', true);
				$('#detail_no_hp').val(data[0].no_hp);
				$('#detail_no_hp').attr('disabled', true);
				$('#detail_email').val(data[0].email);
				$('#detail_email').attr('disabled', true);
				$('#detail_semester').val(data[0].semester);
				$('#detail_semester').attr('disabled', true);
				$('#detail_ipk').val(data[0].ipk);
				$('#detail_ipk').attr('disabled', true);
				$('#downloadBerkas').attr('href', 'http://ti.lab.gunadarma.ac.id/oprec/admin/downloadBerkas/'+data[0].nama_file);
			}
		});
	});

	//nilai
	$('.btn_nilai').on('click', function(){
		$('#nilai-input').attr('style', 'display:inline-block');
		$('#nilai-save').attr('style', 'display:none');
		const token = $(this).data('token');
		$.ajax({
			url: 'http://ti.lab.gunadarma.ac.id/oprec/admin/getNilaiByToken',
			data: {nilai_calas : token},
			method: 'POST',
			dataType: 'json',
			success: function(data){
				$('#report').attr('href', 'http://ti.lab.gunadarma.ac.id/oprec/admin/report/'+data[0].token)
				$('#modalNilaiTitle').html(data[0].nama);
				$('#kd_peserta_nilai').html('Kode Peserta : '+data[0].token);
				$('#kelas_peserta_nilai').html('Kelas : '+data[0].kelas);
				var kelas = data[0].kelas;
				if(kelas.substring(0, 1) == 2){ //jika tk2
					$('#nilai-umum-ti-tab').show();

					$('#teori-nilai-java-tab').show();
					$('#teori-nilai-delphi-tab').show();
					$('#teori-nilai-vb-tab').show();
					$('#teori-nilai-python-tab').show();
					$('#teori-nilai-c-tab').show();
					$('#teori-nilai-networking-tab').hide();
					$('#teori-nilai-blender-tab').hide();
					$('#teori-nilai-mysql-tab').hide();
					$('#teori-nilai-php-ci-tab').hide();

					$('#nilai-java-tab').show();
					$('#nilai-delphi-tab').show();
					$('#nilai-vb-tab').show();
					$('#nilai-python-tab').show();
					$('#nilai-c-tab').show();
					$('#nilai-networking-tab').hide();
					$('#nilai-blender-tab').hide();
					$('#nilai-mysql-tab').hide();
					$('#nilai-php-ci-tab').hide();
				}else if(kelas.substring(0, 1) == 3){ //jika tk3
					$('#nilai-umum-ti-tab').show();

					$('#teori-nilai-java-tab').show();
					$('#teori-nilai-delphi-tab').show();
					$('#teori-nilai-vb-tab').show();
					$('#teori-nilai-python-tab').show();
					$('#teori-nilai-c-tab').show();
					$('#teori-nilai-networking-tab').show();
					$('#teori-nilai-blender-tab').show();
					$('#teori-nilai-mysql-tab').show();
					$('#teori-nilai-php-ci-tab').hide();

					$('#nilai-java-tab').show();
					$('#nilai-delphi-tab').show();
					$('#nilai-vb-tab').show();
					$('#nilai-python-tab').show();
					$('#nilai-c-tab').show();
					$('#nilai-networking-tab').show();
					$('#nilai-blender-tab').show();
					$('#nilai-mysql-tab').show();
					$('#nilai-php-ci-tab').hide();
				}else{
					$('#nilai-umum-ti-tab').show();

					$('#teori-nilai-java-tab').show();
					$('#teori-nilai-delphi-tab').show();
					$('#teori-nilai-vb-tab').show();
					$('#teori-nilai-python-tab').show();
					$('#teori-nilai-c-tab').show();
					$('#teori-nilai-networking-tab').show();
					$('#teori-nilai-blender-tab').show();
					$('#teori-nilai-mysql-tab').show();
					$('#teori-nilai-php-ci-tab').show();

					$('#nilai-java-tab').show();
					$('#nilai-delphi-tab').show();
					$('#nilai-vb-tab').show();
					$('#nilai-python-tab').show();
					$('#nilai-c-tab').show();
					$('#nilai-networking-tab').show();
					$('#nilai-blender-tab').show();
					$('#nilai-mysql-tab').show();
					$('#nilai-php-ci-tab').show();
				}
				$('#nilai_kelas').val(data[0].kelas);
				$('#nilai_token').val(data[0].token);

				$('#teori-nilai-umum-ti').val(data[0].teori_umum_ti);
				$('#teori-nilai-umum-ti').attr('disabled', true);
				$('#teori-nilai-java').val(data[0].teori_java);
				$('#teori-nilai-java').attr('disabled', true);
				$('#teori-nilai-delphi').val(data[0].teori_delphi);
				$('#teori-nilai-delphi').attr('disabled', true);
				$('#teori-nilai-vb').val(data[0].teori_vb);
				$('#teori-nilai-vb').attr('disabled', true);
				$('#teori-nilai-python').val(data[0].teori_python);
				$('#teori-nilai-python').attr('disabled', true);
				$('#teori-nilai-c').val(data[0].teori_c);
				$('#teori-nilai-c').attr('disabled', true);
				$('#teori-nilai-networking').val(data[0].teori_networking);
				$('#teori-nilai-networking').attr('disabled', true);
				$('#teori-nilai-blender').val(data[0].teori_blender);
				$('#teori-nilai-blender').attr('disabled', true);
				$('#teori-nilai-sbd-mysql').val(data[0].teori_sbd_mysql);
				$('#teori-nilai-sbd-mysql').attr('disabled', true);
				$('#teori-nilai-php-ci').val(data[0].teori_php_ci);
				$('#teori-nilai-php-ci').attr('disabled', true);

				$('#nilai-umum-ti').val(data[0].umum_ti);
				$('#nilai-umum-ti').attr('disabled', true);
				$('#nilai-java').val(data[0].java);
				$('#nilai-java').attr('disabled', true);
				$('#nilai-delphi').val(data[0].delphi);
				$('#nilai-delphi').attr('disabled', true);
				$('#nilai-vb').val(data[0].vb);
				$('#nilai-vb').attr('disabled', true);
				$('#nilai-python').val(data[0].python);
				$('#nilai-python').attr('disabled', true);
				$('#nilai-c').val(data[0].c);
				$('#nilai-c').attr('disabled', true);
				$('#nilai-networking').val(data[0].networking);
				$('#nilai-networking').attr('disabled', true);
				$('#nilai-blender').val(data[0].blender);
				$('#nilai-blender').attr('disabled', true);
				$('#nilai-sbd-mysql').val(data[0].sbd_mysql);
				$('#nilai-sbd-mysql').attr('disabled', true);
				$('#nilai-php-ci').val(data[0].php_ci);
				$('#nilai-php-ci').attr('disabled', true);
			}
		});
	});

	$('#nilai-input').on('click', function(){
		$('#nilai-input').attr('style', 'display:none');
		$('#nilai-save').attr('style', 'display:inline-block');

		$('#nilai-umum-ti').attr('disabled', false);

		$('#teori-nilai-java').attr('disabled', false);
		$('#teori-nilai-delphi').attr('disabled', false);
		$('#teori-nilai-vb').attr('disabled', false);
		$('#teori-nilai-python').attr('disabled', false);
		$('#teori-nilai-c').attr('disabled', false);
		$('#teori-nilai-networking').attr('disabled', false);
		$('#teori-nilai-blender').attr('disabled', false);
		$('#teori-nilai-sbd-mysql').attr('disabled', false);
		$('#teori-nilai-php-ci').attr('disabled', false);
		$('#teori-nilai-java').attr('disabled', false);
		$('#teori-nilai-delphi').attr('disabled', false);
		$('#teori-nilai-vb').attr('disabled', false);
		$('#teori-nilai-python').attr('disabled', false);
		$('#teori-nilai-c').attr('disabled', false);
		$('#teori-nilai-networking').attr('disabled', false);
		$('#teori-nilai-blender').attr('disabled', false);
		$('#teori-nilai-sbd-mysql').attr('disabled', false);
		$('#teori-nilai-php-ci').attr('disabled', false);

		$('#nilai-java').attr('disabled', false);
		$('#nilai-delphi').attr('disabled', false);
		$('#nilai-vb').attr('disabled', false);
		$('#nilai-python').attr('disabled', false);
		$('#nilai-c').attr('disabled', false);
		$('#nilai-networking').attr('disabled', false);
		$('#nilai-blender').attr('disabled', false);
		$('#nilai-sbd-mysql').attr('disabled', false);
		$('#nilai-php-ci').attr('disabled', false);
		$('#nilai-java').attr('disabled', false);
		$('#nilai-delphi').attr('disabled', false);
		$('#nilai-vb').attr('disabled', false);
		$('#nilai-python').attr('disabled', false);
		$('#nilai-c').attr('disabled', false);
		$('#nilai-networking').attr('disabled', false);
		$('#nilai-blender').attr('disabled', false);
		$('#nilai-sbd-mysql').attr('disabled', false);
		$('#nilai-php-ci').attr('disabled', false);
		// $.ajax({
		// 	url: 'http://ti.lab.gunadarma.ac.id/oprec/admin/getNilaiByToken',
		// 	data: {nilai_calas : token},
		// 	method: 'POST',
		// 	dataType: 'json',
		// 	success: function(data){
		// 		$('#nilai_kelas').val(data[0].kelas)
		// 		$('#nilai_token').val(data[0].token)
		// 		$('#nilai-umum-ti').val(data[0].umum_ti)
		// 		$('#nilai-java').val(data[0].java)
		// 		$('#nilai-delphi').val(data[0].delphi)
		// 		$('#nilai-vb').val(data[0].vb)
		// 		$('#nilai-python').val(data[0].python)
		// 		$('#nilai-c').val(data[0].c)
		// 		$('#nilai-networking').val(data[0].networking)
		// 		$('#nilai-blender').val(data[0].blender)
		// 		$('#nilai-sbd-mysql').val(data[0].sbd_mysql)
		// 		$('#nilai-php-ci').val(data[0].php_ci)
		// 	}
		// });
	});
});