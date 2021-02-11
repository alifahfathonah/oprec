<?php if (empty($this->session->userdata("nip"))): ?>
	<?php redirect('admin');
 ?>
<?php endif ?>
<?php $data=$this->db->query("SELECT * FROM user where kode_rs='".$this->session->userdata("kdrs")."'")->result_array();
				 $i=0;
				 foreach ($data as $value) {
                   $i++;
                  }
				 ?>
<?php $datakota=$this->db->query("SELECT nama_kota FROM m_kota where kode_kabupaten= LEFT('".$this->session->userdata("kdrs")."',4)")->result_array();
				 $k=0;
				 foreach ($datakota as $valuekota) {
                   $k++;
                  }
				 ?>
<?php $dataprovinsi=$this->db->query("SELECT nama_provinsi FROM m_provinsi where LEFT(kode_provinsi,2)= LEFT('".$this->session->userdata("kdrs")."',2)")->result_array();
				 $p=0;
				 foreach ($dataprovinsi as $valueprovinsi) {
                   $p++;
                  }
				 ?>
<!--<div class="container-fluid">
	<div class="row mb-3">
		<div class="col-md float-left content-text">
			<a><h2 class="mt-4">Biodata Calon Asisten</h2></a>
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
	</div>-->
<section class="content mt-4">
  <form action="" method="post">
    <!-- Data Pasien-->
    <div class="row">
	    <div class="col-md-12">
        <div class="box box-primary">
          	<div class="box-header with-border">
            	<h1 class="box-title content-text">BIODATA RUMAH SAKIT</h1>
          	</div>
            <div class="box-body">
			    <div class="column">
			        <div class="content-text">
				        <h4>Kode RS</h4>
						<p><?php echo $value['kode_rs']?></p>
               		</div>
              		<div class="content-text">
                		<h4>Nama Rumah Sakit</h4>
						<p><?php echo $value['nama_lengkap']?></p>
                	</div>
					<div class="content-text">
				        <h4>Alamat Rumah Sakit</h4>
						<p>jfhah a akjahdaduaowajndsm ajhsj mnamdnadjwalkdnj adhasdjasdjalkdwialdkjal kahdwialskdjw hadssa jdhahwalskdhwoalskjdwia alkshd afajsd iw</p>
               		</div>
					<div class="content-text">
				        <h4>Provinsi</h4>
						<p><?php echo $valueprovinsi['nama_provinsi']?></p>
               		</div>
					<div class="content-text">
				        <h4>Kota / Kabupaten</h4>
						<p><?php echo $valuekota['nama_kota']?></p>
               		</div>
            	</div>
			    <div class="column">
              		<div class="content-text">
               			<h4>Telepon</h4>
						   <p>32132131</p>
              		</div>
              		<div class="content-text">
                		<h4>E-mail</h4>
						<p>32132131</p>
              		</div>
					  <div class="content-text">
                		<h4>Kelas</h4>
						<p>32132131</p>
              		</div>
					  <div class="content-text">
                		<h4>Jenis</h4>
						<p>32132131</p>
              		</div>
					  <div class="content-text">
                		<h4>Kepemilikan</h4>
						<p>32132131</p>
              		</div>
					<div class="content-text">
                		<h4>PKS Dengan BPJS</h4>
						<p>32132131</p>
              		</div>
            	</div>
          	</div>
        </div>
      </div>
	</form>
	</section>