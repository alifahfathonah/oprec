<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Start footer Area -->
<footer class="footer-area section-gap text-white" style="background-image: url('<?php echo base_url('asset/images/2.png'); ?>');">
	<div class="container">
		<div class="row">
			<div class="single-feature col-lg-6 text-center">
				<h4 class="text-white">Depok</h4>
				<ul>
					<li>E535 Universitas Gunadarma</li>
					<li>Jl. Akses UI, Kelapa Dua, Cimanggis, Depok</li>
					<!-- <li>halo@ti.lab.gunadarma.ac.id</li> -->
				</ul>
			</div>
			<div class="single-feature col-lg-6 text-center">
				<h4 class="text-white">Kalimalang</h4>
				<ul>
					<li>J1222 Universitas Gunadarma</li>
					<li>Jl. KH. Noer Ali, Kalimalang, Jakasampurna, Bekasi</li>
					<!-- <li>halo@ti.lab.gunadarma.ac.id</li> -->
				</ul>
			</div>							
		</div>
	</div>
	<div class="container">
		<div class="footer-bottom text-center">
			<p class="footer-text m-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
		</div>
	</div>
</footer>
<!-- End footer Area -->

<!-- login js -->
<script>
	$("#btnLogin").click(function(event) {

    //Fetch form to apply custom Bootstrap validation
    var form = $("#formLogin")

    if (form[0].checkValidity() === false) {
    	event.preventDefault()
    	event.stopPropagation()
    }
    
    form.addClass('was-validated');
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>		
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>

<script src="<?=base_url('asset/js/bootstrap-validate.js')?>"></script>
<script src="<?=base_url('asset/js/validate1.js')?>"></script>

<script src="<?php echo base_url('asset/js/vendor/jquery-2.2.4.min.js'); ?>"></script>
<script src="<?php echo base_url('asset/js/vendor/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('asset/js/easing.min.js'); ?>"></script>
<script src="<?php echo base_url('asset/js/hoverIntent.js'); ?>"></script>
<script src="<?php echo base_url('asset/js/superfish.min.js'); ?>"></script>
<script src="<?php echo base_url('asset/js/jquery.ajaxchimp.min.js'); ?>"></script>
<script src="<?php echo base_url('asset/js/jquery.magnific-popup.min.js'); ?>"></script>
<script src="<?php echo base_url('asset/js/owl.carousel.min.js'); ?>"></script>
<script src="<?php echo base_url('asset/js/jquery.sticky.js'); ?>"></script>
<script src="<?php echo base_url('asset/js/jquery.nice-select.min.js'); ?>"></script>
<script src="<?php echo base_url('asset/js/waypoints.min.js'); ?>"></script>	
<script src="<?php echo base_url('asset/js/jquery.counterup.min.js'); ?>"></script>	
<script src="<?php echo base_url('asset/js/parallax.min.js'); ?>"></script>	
<script src="<?php echo base_url('asset/js/mail-script.js'); ?>"></script>	
<script src="<?php echo base_url('asset/js/main.js'); ?>"></script>			
</body>
</html>