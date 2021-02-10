<?php if ($this->session->userdata('login')!=='1'): ?>
	<?php redirect('admin') ?>
<?php endif ?>
<div class="container-fluid">
	<div class="row mb-3">
		<div class="col-md float-left">
			<a href="<?=base_url('admin/dashboard')?>"><h2 class="mt-4">Biodata Calon Asisten</h2></a>
		</div>
		<div class="col-md float-right mt-4">
			<form action="" method="post" accept-charset="utf-8">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Cari Berdasarkan Kode / Nama / NPM / Kelas..." name="keyword-calon-asisten" autocomplete="off">
					<div class="input-group-append">
						<button class="btn btn-info" type="submit" name="submit-search-calas"><i class="fas fa-fw fa-search"></i></button>
						<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#searchInfo">
							<i class="fas fa-question"></i>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="row slideout-table h-auto">
		<div class="col">
			<table class="table table-striped mb-4">
				<thead>
					<tr align="center">
						<th scope="col">No</th>
						<th scope="col">Nama</th>
						<th scope="col">NPM</th>
						<th scope="col">Kelas</th>
						<th scope="col">Tanggal Daftar</th>
						<th scope="col">Detail</th>
					</tr>
				</thead>
				<tbody>
					<?php if (empty($calas)):?>
						<tr align="center">
							<td colspan="6">
								<strong>Data Calon Asisten Tidak Ditemukan</strong>
							</td>
						</tr>
					<?php endif ?>
					<?php foreach ($calas as $cls):?>
						<tr align="center">
							<th scope="row"><?=++$start?></th>
							<td><?=$cls['nama']?></td>
							<td><?=$cls['npm']?></td>
							<td><?=$cls['kelas'];?></td>
							<td><?=date('j M Y H:i:s', strtotime($cls['tanggal_daftar']));?></td>
							<td>
								<button data-token="<?=$cls['token'];?>" type="button" class="btn btn-success btn_detail" data-toggle="modal" data-target="#modalDetail">Detail</button>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
			<?= $this->pagination->create_links(); ?>
		</div>
	</div>

	<!-- tadinya buat sort -->
	<!-- <div class="row">
		<div class="col-md-6 mt-4 text-center">
			<form action="<?=base_url('admin/dashboard')?>" method="get">
				<div class="form-row">
					<div class="col">
						<span class="form-text">Sort By :</span>
					</div>
					<div class="col mt-1 mb-1">
						<select name="sort_biodata_calas" id="sort_biodata_calas">
							<option selected value="tanggal_daftar">Tanggal Daftar ASC</option>
							<option value="nama">Nama ASC</option>
							<option value="kelas">Kelas ASC</option>
						</select>
					</div>
					<div class="col col-sm-7 mt-1">
						<button name="sort" type="button" class="">&nbsp;Sort&nbsp;</button>
					</div>
				</div>
			</form>
		</div>
		<div class="col-md-6 mt-4 float-right">
			pagination here
		</div>
	</div> -->
</div>


<!-- Modal Detail-->
<div class="modal fade" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="modalDetailTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalDetailTitle">Detail Nama Peserta</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="form-card">
					<div class="form-group">
						<small class="form-text text-muted">Kode Peserta</small>
						<input class="form-control" type="text" name="detail_token" id="detail_token" placeholder="Kelas" />
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<small class="form-text text-muted">Nama</small>
							<input class="form-control" type="text" name="detail_nama" id="detail_nama" placeholder="Nama Lengkap"/>
						</div>
						<div class="form-group col-md-6">
							<small class="form-text text-muted">Kelas</small>
							<input class="form-control" type="text" name="detail_kelas" id="detail_kelas" placeholder="Kelas" />
						</div>
					</div>
					<div class="form-group">
						<small class="form-text text-muted">Tanggal Daftar</small>
						<input class="form-control" type="text" name="detail_tanggal_daftar" id="detail_tanggal_daftar" placeholder="Kelas" />
					</div>
					<div class="form-group">
						<small class="form-text text-muted">Jenis Kelamin</small>
						<input class="form-control" type="text" name="detail_jk" id="detail_jk" placeholder="Kelas" />
					</div>
					<div class="form-group">
						<small class="form-text text-muted">Tempat dan Tanggal Lahir</small>
						<input class="form-control" type="text" name="detail_ttl" id="detail_ttl" placeholder="Tempat Lahir"/>
					</div>
					<div class="form-group">
						<small class="form-text text-muted">No. Handphone</small>
						<input class="form-control" type="text" name="detail_no_hp" id="detail_no_hp" placeholder="Nomor Handphone" />
					</div>
					<div class="form-group">
						<small class="form-text text-muted">Email</small>
						<input class="form-control" type="text" name="detail_email" id="detail_email" placeholder="Email" />
					</div>
					<div class="form-group">
						<small class="form-text text-muted">Semester</small>
						<input class="form-control" type="text" name="detail_semester" id="detail_semester" placeholder="Semester" />
					</div>
					<div class="form-group">
						<small class="form-text text-muted">IPK</small>
						<input type="text" name="detail_ipk" id="detail_ipk" class="mb-0 form-control" placeholder="IPK" />
					</div>
				</div> 
			</div>
			<div class="modal-footer">
				<button type="button" id="detail_close" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<a href="#" id="downloadBerkas" title="Download Berkas Calon Asisten">
					<button type="button" id="detail_download" class="btn btn-primary">Download Berkas</button>
				</a>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="searchInfo" tabindex="-1" role="dialog" aria-labelledby="searchInfoTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Search</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body text-center">
				<p class="fw-600">Jika ingin mencari data, pastikan anda berada pada data index (Data paling awal).</p>
			</div>
			<div class="modal-footer text-center align-items-center justify-content-center">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>