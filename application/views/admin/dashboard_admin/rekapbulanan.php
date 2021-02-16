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
			<table class="table table-striped mb-4">
				<thead>
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
            <th class="align-middle border-right" scope="col" colspan="3">Kepatuhan penggunaan Alat Pelindung Diri (>100%)</th>
					</tr>
					<tr align="center">
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