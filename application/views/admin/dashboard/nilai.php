<?php if ($this->session->userdata('region') =='labti_xm'): ?>
	<?php redirect('admin');?>
<?php elseif ($this->session->userdata('login') !=='1'): ?>
	<?php redirect('admin/dashboard');?>
<?php endif ?>
<?php 
  $i=0;
  $this->data["data"] as $value {
    
  }
  ?>
<section class="content">
  <form action="" method="post">
	   <!-- Data Pasien -->
	   <div class="row">
	    <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">A. DATA PASIEN</h3>
          </div>
          <div class="box-body">
			      <div class="col-md-6">
			        <div class="form-group">
				        <label for="exampleInputEmail1">1. Umur </label>
                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $value['id']; ?>">
                <input type="number" class="form-control" value="<?php echo $value['umur']; ?>" id="umur" name="umur" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">2. Penanggung Jawab Biaya</label>
                <input type="text" id="cara_bayar" name="cara_bayar" value="<?php echo $value['cara_bayar']?>" class="form-control" tabindex="2" autocomplete="off" required>		 
              </div>
            </div>
			      <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">3. Jenis Kelamin</label>
                <select type="text" id="kelamin" name="kelamin" class="form-control"  autocomplete="off" required>	
					        <?php if($value['kelamin']=='L') {
					          $l="selected";
					        } else {
					          $p="selected";
					        } ?>
						      <option value="L" <?php echo $l; ?>>Laki-Laki</option>
						      <option value="P" <?php echo $p; ?>>Perempuan</option>
						    </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">4. Tanggal Mendapatkan Pelayanan</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" required class="form-control pull-right" id="tglreg"  value="<?php echo isset($value['tglregpasien']) ? $value['tglregpasien'] : date("Y-m-d") ?>" name="tglreg" >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</section>
<?php ?>