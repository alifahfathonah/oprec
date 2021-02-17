<?php if (empty($this->session->userdata("nip"))): ?>
	<?php redirect('admin');?>
<?php endif ?>
<div class="container-fluid">
	<div class="row mb-3">
		<div class="col-md float-left">
			<a href="<?=base_url('admin/nilai')?>"><h2 class="mt-4 content-text">Rekap Bulan INM</h2></a>
		</div>
	</div>
	<div class="row slideout-table h-auto">
		<div class="col">
			<table class="table table-striped mb-4 maintable">
				<thead class="thtable">
					<tr align="center">
						<th class="align-middle border-right border-left" scope="col" rowspan="2">No</th>
						<th class="align-middle border-right" scope="col" rowspan="2">Kode RS</th>
						<th class="align-middle border-right" scope="col" rowspan="2">Nama RS</th>
						<th class="align-middle border-right" scope="col" rowspan="2">Alamat</th>
            			<th class="align-middle border-right" scope="col" rowspan="2">Kab / Kota</th>
            			<th class="align-middle border-right" scope="col" rowspan="2">Provinsi</th>
            			<th class="align-middle border-right" scope="col" rowspan="2">Kelas</th>
            			<th class="align-middle border-right" scope="col" rowspan="2">Jenis</th>
           				<th class="align-middle border-right" scope="col" rowspan="2">Penyelenggara</th>
            			<th class="align-middle border-right" scope="col" rowspan="2">Telepon</th>
						<th class="align-middle border-right" scope="col" colspan="3">Kepatuhan Kebersihan Tangan (>85%)</th>
            			<th class="align-middle border-right" scope="col" colspan="3">Kepatuhan penggunaan Alat Pelindung Diri (100%)</th>
						<th class="align-middle border-right" scope="col" colspan="3">Kepatuhan identifikasi pasien (100%<)</th>
						<th class="align-middle border-right" scope="col" colspan="3"> Waktu tanggap seksio sesarea emergensi (>80%)</th>
						<th class="align-middle border-right" scope="col" colspan="3">Waktu tunggu rawat jalan(>80%)</th>
						<th class="align-middle border-right" scope="col" colspan="3">Penundaan operasi elektif (5%)</th>
						<th class="align-middle border-right" scope="col" colspan="3">Kepatuhan waktu visite dokter penanggung jawab pelayanan (>80%)</th>
						<th class="align-middle border-right" scope="col" colspan="3">Pelaporan hasil kritis laboratorium (100%)</th>
						<th class="align-middle border-right" scope="col" colspan="3">Kepatuhan penggunaan formularium nasional (>80%)</th>
						<th class="align-middle border-right" scope="col" colspan="3">Kepatuhan terhadap clinical pathway (>80%)</th>
						<th class="align-middle border-right" scope="col" colspan="3">Kepatuhan upaya pencegahan risiko pasien jatuh (100%)</th>
						<th class="align-middle border-right" scope="col" colspan="3">Kecepatan waktu tanggap terhadap complain (>80%)</th>
						<th class="align-middle border-right" scope="col" colspan="3">Kepuasan pasien dan keluarga (>76.6%)</th>
					</tr>
					<tr align="center">
						<th class="align-middle border-right" scope="col">Numerator</th>
						<th class="align-middle border-right" scope="col">Denumerator</th>
						<th class="align-middle border-right" scope="col">Hasil</th>
            			<th class="align-middle border-right" scope="col">Numerator</th>
						<th class="align-middle border-right" scope="col">Denumerator</th>
						<th class="align-middle border-right" scope="col">Hasil</th>
						<th class="align-middle border-right" scope="col">Numerator</th>
						<th class="align-middle border-right" scope="col">Denumerator</th>
						<th class="align-middle border-right" scope="col">Hasil</th>
						<th class="align-middle border-right" scope="col">Numerator</th>
						<th class="align-middle border-right" scope="col">Denumerator</th>
						<th class="align-middle border-right" scope="col">Hasil</th>
						<th class="align-middle border-right" scope="col">Numerator</th>
						<th class="align-middle border-right" scope="col">Denumerator</th>
						<th class="align-middle border-right" scope="col">Hasil</th>
						<th class="align-middle border-right" scope="col">Numerator</th>
						<th class="align-middle border-right" scope="col">Denumerator</th>
						<th class="align-middle border-right" scope="col">Hasil</th>
						<th class="align-middle border-right" scope="col">Numerator</th>
						<th class="align-middle border-right" scope="col">Denumerator</th>
						<th class="align-middle border-right" scope="col">Hasil</th>
						<th class="align-middle border-right" scope="col">Numerator</th>
						<th class="align-middle border-right" scope="col">Denumerator</th>
						<th class="align-middle border-right" scope="col">Hasil</th>
						<th class="align-middle border-right" scope="col">Numerator</th>
						<th class="align-middle border-right" scope="col">Denumerator</th>
						<th class="align-middle border-right" scope="col">Hasil</th>
						<th class="align-middle border-right" scope="col">Numerator</th>
						<th class="align-middle border-right" scope="col">Denumerator</th>
						<th class="align-middle border-right" scope="col">Hasil</th>
						<th class="align-middle border-right" scope="col">Numerator</th>
						<th class="align-middle border-right" scope="col">Denumerator</th>
						<th class="align-middle border-right" scope="col">Hasil</th>
						<th class="align-middle border-right" scope="col">Numerator</th>
						<th class="align-middle border-right" scope="col">Denumerator</th>
						<th class="align-middle border-right" scope="col">Hasil</th>
						<th class="align-middle border-right" scope="col">Numerator</th>
						<th class="align-middle border-right" scope="col">Denumerator</th>
						<th class="align-middle border-right" scope="col">Hasil</th>
					</tr>
				
			</table>
			<?= $this->pagination->create_links(); ?>
		</div>
	</div>
</div>
</div>
</div>
</div>