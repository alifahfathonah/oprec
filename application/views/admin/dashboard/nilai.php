<?php if ($this->session->userdata('region') =='labti_xm'): ?>
	<?php redirect('admin');?>
<?php elseif ($this->session->userdata('login') !=='1'): ?>
	<?php redirect('admin/dashboard');?>
<?php endif ?>
<div class="container-fluid">
	<div class="row mb-3">
		<div class="col-md float-left">
			<a href="<?=base_url('admin/nilai')?>"><h2 class="mt-4">Nilai Calon Asisten</h2></a>
		</div>
		<div class="col-md float-right mt-4">
<!-- 			<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
				i
			</button> -->
			<form action="" method="post" accept-charset="utf-8">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Cari Berdasarkan Kode / Nama / NPM / Kelas..." name="keyword-nilai-calon-asisten" autocomplete="off">
					<div class="input-group-append">
						<button class="btn btn-info" type="submit" name="submit-search-nilai"><i class="fas fa-fw fa-search"></i></button>
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
						<th class="align-middle border-right border-left" scope="col" rowspan="2">No</th>
						<th class="align-middle border-right" scope="col" rowspan="2">Nama</th>
						<th class="align-middle border-right" scope="col" rowspan="2">NPM</th>
						<th class="align-middle border-right" scope="col" rowspan="2">Kelas</th>
						<th class="align-middle border-right" scope="col" colspan="3">Rata-rata</th>
						<th class="align-middle border-right border-left" scope="col" rowspan="2">Detail</th>
					</tr>
					<tr align="center">
						<th class="align-middle border-right" scope="col">Teori</th>
						<th class="align-middle border-right" scope="col">Praktik</th>
						<th class="align-middle" scope="col">Total</th>
					</tr>
				</thead>
				<tbody>
					<?php if (empty($nilai_calas)):?>
						<tr align="center">
							<td colspan="8">
								<strong>Data Calon Asisten Tidak Ditemukan</strong>
							</td>
						</tr>
					<?php endif ?>
					<?php foreach ($nilai_calas as $nilai):?>
						<tr align="center">
							<th scope="row" class="align-middle"><?=++$start?></th>
							<td class="align-middle"><?=$nilai['nama']?></td>
							<td class="align-middle"><?=$nilai['npm']?></td>
							<td class="align-middle"><?=$nilai['kelas'];?></td>
							<td class="align-middle"><?=$nilai['rata_teori'];?></td>
							<td class="align-middle"><?=$nilai['rata_praktik'];?></td>
							<td class="align-middle"><?=$nilai['rata_total'];?></td>
							<td class="align-middle">
								<button data-token="<?=$nilai['token'];?>" type="button" class="btn btn-success btn_nilai" data-toggle="modal" data-target="#modalNilai">Nilai</button>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
			<?= $this->pagination->create_links(); ?>
		</div>
	</div>
</div>
</div>
</div>
</div>

<!-- Modal Nilai-->
<div class="modal fade" id="modalNilai" tabindex="-1" role="dialog" aria-labelledby="modalNilaiTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalNilaiTitle"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body form_nilai">
				<div class="form-card">
					<div class="row">
						<div class="form-group col-md-6">
							<span class="form-text fw-600" id="kd_peserta_nilai"></span>
						</div>
						<div class="form-group col-md-6">
							<span class="form-text fw-600" id="kelas_peserta_nilai"></span>
						</div>
					</div>
					<form id="form_nilai" method="post" action="<?=base_url('admin/updateNilai')?>">
						<input type="hidden" name="nilai_token" id="nilai_token"/>
						<input type="hidden" name="nilai_kelas" id="nilai_kelas"/>
						<section id="tabs">
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<nav>
											<div class="nav nav-tabs nav-fill mb-2" id="nav-tab" role="tablist">
												<a class="nav-item nav-link active" id="teori-tab" data-toggle="tab" href="#teori" role="tab" aria-controls="teori" aria-selected="true">Nilai Teori</a>
												<a class="nav-item nav-link" id="praktik-tab" data-toggle="tab" href="#praktik" role="tab" aria-controls="praktik" aria-selected="false">Nilai Praktik</a>
											</div>
										</nav>
										<div class="tab-content" id="nav-tabContent">
											<div class="tab-pane fade show active" id="teori" role="tabpanel" aria-labelledby="teori-tab">
												<div class="form-group" id="nilai-umum-ti-tab">
													<small class="form-text text-muted">Pengetahuan Umum TI</small>
													<input class="form-control" type="text" name="nilai-umum-ti" id="nilai-umum-ti" disabled="true"/>
													<div class="form-group" id="nilai-java-tab">
														<small class="form-text text-muted">Teori Java</small>
														<input class="form-control" type="text" name="teori-nilai-java" id="teori-nilai-java" disabled="true"/>
													</div>
													<div class="form-group" id="teori-nilai-delphi-tab">
														<small class="form-text text-muted">Teori Pascal / Delphi</small>
														<input class="form-control" type="text" name="teori-nilai-delphi" id="teori-nilai-delphi" disabled="true"/>
													</div>
													<div class="form-group" id="teori-nilai-vb-tab">
														<small class="form-text text-muted">Teori Visual Basic</small>
														<input class="form-control" type="text" name="teori-nilai-vb" id="teori-nilai-vb" disabled="true"/>
													</div>
													<div class="form-group" id="teori-nilai-python-tab">
														<small class="form-text text-muted">Teori Python / Ruby</small>
														<input class="form-control" type="text" name="teori-nilai-python" id="teori-nilai-python" disabled="true" />
													</div>
													<div class="form-group" id="teori-nilai-c-tab">
														<small class="form-text text-muted">Teori C / C++</small>
														<input class="mb-0 form-control" type="text" name="teori-nilai-c" id="teori-nilai-c" disabled="true"/>
													</div>
													<div class="form-group" id="teori-nilai-networking-tab">
														<small class="form-text text-muted">Teori Networking</small>
														<input class="mb-0 form-control" type="text" name="teori-nilai-networking" id="teori-nilai-networking" disabled="true"/>
													</div>
													<div class="form-group" id="teori-nilai-blender-tab">
														<small class="form-text text-muted">Teori Blender / 3D Modelling</small>
														<input class="mb-0 form-control" type="text" name="teori-nilai-blender" id="teori-nilai-blender" disabled="true"/>
													</div>
													<div class="form-group" id="teori-nilai-mysql-tab">
														<small class="form-text text-muted">Teori MySQL / Oracle</small>
														<input class="mb-0 form-control" type="text" name="teori-nilai-sbd-mysql" id="teori-nilai-sbd-mysql" disabled="true"/>
													</div>
													<div class="form-group" id="teori-nilai-php-ci-tab">
														<small class="form-text text-muted">Teori PHP / CodeIgniter</small>
														<input class="mb-0 form-control" type="text" name="teori-nilai-php-ci" id="teori-nilai-php-ci" disabled="true"/>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="praktik" role="tabpanel" aria-labelledby="praktik-tab">
												<div class="form-group" id="nilai-java-tab">
													<small class="form-text text-muted">Praktik Java</small>
													<input class="form-control" type="text" name="nilai-java" id="nilai-java" disabled="true"/>
												</div>
												<div class="form-group" id="nilai-delphi-tab">
													<small class="form-text text-muted">Praktik Pascal / Delphi</small>
													<input class="form-control" type="text" name="nilai-delphi" id="nilai-delphi" disabled="true"/>
												</div>
												<div class="form-group" id="nilai-vb-tab">
													<small class="form-text text-muted">Praktik Visual Basic</small>
													<input class="form-control" type="text" name="nilai-vb" id="nilai-vb" disabled="true"/>
												</div>
												<div class="form-group" id="nilai-python-tab">
													<small class="form-text text-muted">Praktik Python / Ruby</small>
													<input class="form-control" type="text" name="nilai-python" id="nilai-python" disabled="true" />
												</div>
												<div class="form-group" id="nilai-c-tab">
													<small class="form-text text-muted">Praktik C / C++</small>
													<input class="mb-0 form-control" type="text" name="nilai-c" id="nilai-c" disabled="true"/>
												</div>
												<div class="form-group" id="nilai-networking-tab">
													<small class="form-text text-muted">Praktik Networking</small>
													<input class="mb-0 form-control" type="text" name="nilai-networking" id="nilai-networking" disabled="true"/>
												</div>
												<div class="form-group" id="nilai-blender-tab">
													<small class="form-text text-muted">Praktik Blender / 3D Modelling</small>
													<input class="mb-0 form-control" type="text" name="nilai-blender" id="nilai-blender" disabled="true"/>
												</div>
												<div class="form-group" id="nilai-mysql-tab">
													<small class="form-text text-muted">Praktik MySQL / Oracle</small>
													<input class="mb-0 form-control" type="text" name="nilai-sbd-mysql" id="nilai-sbd-mysql" disabled="true"/>
												</div>
												<div class="form-group" id="nilai-php-ci-tab">
													<small class="form-text text-muted">Praktik PHP / CodeIgniter</small>
													<input class="mb-0 form-control" type="text" name="nilai-php-ci" id="nilai-php-ci" disabled="true"/>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div> 
				</div>
				<div class="modal-footer">
					<button type="button" id="detail_close" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" id="nilai-input" class="btn btn-primary" style="display: inline-block;">Input Nilai</button>
					<button type="submit" id="nilai-save" class="btn btn-primary" style="display:none;">Simpan Nilai</button>
					<a href="" id="report" name="report" target="_blank"><button type="button" id="result-nilai" class="btn btn-success">Result</button></a>
				</form>
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