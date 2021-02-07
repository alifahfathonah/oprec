<div class="container-fluid">
	<div class="row mb-3">
		<div class="col-md float-left">
			<a href="<?=base_url('admin/wawancara')?>"><h2 class="mt-4">Wawancara Calon Asisten</h2></a>
		</div>
		<div class="col-md float-right mt-4">
			<form action="" method="post" accept-charset="utf-8">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Cari Berdasarkan Nama / NPM / Kelas..." name="keyword-wawancara-calon-asisten" autocomplete="off">
					<div class="input-group-append">
						<button class="btn btn-info" type="submit" name="submit-search-wawancara"><i class="fas fa-fw fa-search"></i></button>
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
						<th scope="col">Wawancara</th>
						<th scope="col">Detail</th>
					</tr>
				</thead>
				<tbody>
						<tr align="center">
							<th scope="row">1</th>
							<td>Namaaa</td>
							<td>NPMMM</td>
							<td>Kelassss</td>
							<td>
								<button type="button" class="btn btn-primary btn_detail" data-toggle="modal" data-target="#modalWawancara">Wawancara</button>
							</td>
							<td>
								<button type="button" class="btn btn-success btn_detail" data-toggle="modal" data-target="#modalHasilWawancara">Hasil</button>
							</td>
						</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>
</div>
</div>

<!-- Modal Nilai-->
<div class="modal fade" id="modalWawancara" tabindex="-1" role="dialog" aria-labelledby="modalWawancaraTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalWawancaraTitle">Wawancara Peserta</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="form-card">
					<div class="form-group">
						<small class="form-text text-muted">Nama Pewawancara :</small>
						<input class="form-control" type="text" name="nama_at" id="nama_at"/>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<small class="form-text text-muted">Hasil Wawancara</small>
							<textarea class="form-control" rows="6" type="text-area" name="hasil_wawancara" id="hasil_wawancara"></textarea>
						</div>
					</div>
				</div> 
			</div>
			<div class="modal-footer">
				<button type="button" id="detail_close" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" id="detail_download" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</div>
</div>