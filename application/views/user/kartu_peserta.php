<!DOCTYPE html>
<html>
<head>
	<title>Kartu Peserta</title>
	<link rel="stylesheet" href="<?=$_SERVER['DOCUMENT_ROOT'].'/oprec/asset/css/bootstrap.css'?>">
	<style>
		#watermark {
			position: fixed;
			bottom: 9cm;
			left: 2.5cm;
			width: 12cm;
			height: 12cm;
			z-index: -1000;
			opacity: .1;
		}

		tbody.paddingtd td {
			padding-right: 20px;
		}

		.borderstyle table tr td,
		.borderstyle table th {
			border: 1px solid rgb(202, 202, 202);
			padding: 3px;
		}

		.bgtd {
			background-color: rgb(228, 228, 228);
		}


		img.logo {
			position: absolute;
			right: 0;
			width: 70px;
			height: auto;
		}

		img.gunadarma {
			position: absolute;
			left: 0;
			width: 70px;
			height: auto;
		}

		.center-text{
			text-align: center;
		}

		.m-bio{
			margin-top: 10px;
			margin-bottom: 10px;
			margin-left: -35px;
		}

	</style>
</head>
<body>
	<div id="watermark">
		<img src="<?=$_SERVER['DOCUMENT_ROOT'].'/oprec/asset/images/logo.png'?>" height="100%" width="100%">
	</div>
	<div class="row">
		<div class="col-12">
			<img class="logo float-right" src="<?=$_SERVER['DOCUMENT_ROOT'].'/oprec/asset/images/logo.png'?>">
			<img class="gunadarma float-left" src="<?=$_SERVER['DOCUMENT_ROOT'].'/oprec/asset/images/gunadarma.png'?>">
			<h3 class="center-text" style="font: 20px">KARTU PESERTA
				<br>
				PENERIMAAN CALON ASISTEN
				<br>
			LABORATORIUM TEKNIK INFORMATIKA</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-12" style="border-top: 2px #000 solid;"></div>
	</div>
	<br>
	<?php foreach ($peserta as $item): ?>
		<div>
			<p><strong>*Kartu ini wajib dibawa selama proses penerimaan calon asisten berlangsung</strong></p>
		</div>
		<div class="border border-dark rounded">
			<div class="row">
				<div class="col-4 text-center mt-4 mb-4">
					<img src="<?=$_SERVER['DOCUMENT_ROOT'].'/oprec/asset/images/insertphoto.jpg';?>" class="ml-2 rounded" alt="" style="width: 148px; height: 222px;">
					<p class="mt-1 ml-3 border-top" style="">Mengetahui,</p>
				</div>
				<div class="col-7 float-right">
					<div class="m-bio">
						<table>
							<tbody>
								<tr>
									<td><p>Kode Peserta</p></td>
									<td><p>&nbsp;&nbsp;:&nbsp;&nbsp;</p></td>
									<td><strong><p><?=$item['token']?></p></strong></td>
								</tr>
								<tr>
									<td><p>Region</p></td>
									<td><p>&nbsp;&nbsp;:&nbsp;&nbsp;</p></td>
									<td><strong><p><?=$item['region']?></p></strong></td>
								</tr>
								<tr>
									<td><p>Nama Lengkap</p></td>
									<td><p>&nbsp;&nbsp;:&nbsp;&nbsp;</p></td>
									<td><strong><p><?=$item['nama']?></p></strong></td>
								</tr>
								<tr>
									<td><p>NPM</p></td>
									<td><p>&nbsp;&nbsp;:&nbsp;&nbsp;</p></td>
									<td><strong><p><?=$item['npm']?></p></strong></td>
								</tr>
								<tr>
									<td><p>Kelas</p></td>
									<td><p>&nbsp;&nbsp;:&nbsp;&nbsp;</p></td>
									<td><strong><p><?=$item['kelas']?></p></strong></td>
								</tr>
								<tr>
									<td><p>IPK</p></td>
									<td><p>&nbsp;&nbsp;:&nbsp;&nbsp;</p></td>
									<td><strong><p><?=$item['ipk']?></p></strong></td>
								</tr>
								<tr>
									<td><p>No. HP</p></td>
									<td><p>&nbsp;&nbsp;:&nbsp;&nbsp;</p></td>
									<td><strong><p><?=$item['no_hp']?></p></strong></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-12" style="border-top: dotted 2px;">
				<h3 class="mt-3">UJIAN</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-4 mt-3 mb-5">
				<table>
					<tbody class="paddingtd">
						<tr>
							<td>Region</td>
							<td class="font-weight-bold">
								<?=$item['region']?>
							</td>
						</tr>
						<tr>
							<td>Nama</td>
							<td class="font-weight-bold" style="word-wrap:break-word; width:110px">
								<?=$item['nama']?>
							</td>
						</tr>
						<tr>
							<td>NPM</td>
							<td class="font-weight-bold">
								<?=$item['npm']?>
							</td>
						</tr>
						<tr>
							<td>Kelas</td>
							<td class="font-weight-bold">
								<?=$item['kelas']?>
							</td>
						</tr>
						<tr>
							<td>IPK</td>
							<td class="font-weight-bold">
								<?=$item['ipk']?>
							</td>
						</tr>
						<tr>
							<td>No. HP</td>
							<td class="font-weight-bold">
								<?=$item['no_hp']?>
							</td>
						</tr>
					</tbody>
				</table>
				<p class="mt-1 text-center border-top" style="">Mengetahui,</p>
			</div>
			<div class="col-6 border border-dark rounded float-right mt-3">
				<table class="w-100">
					<thead>
						<tr>
							<th class="text-center">MATERI</th>
							<th class="text-center">TEORI</th>
							<th class="text-center">PRAKTIK</th>
						</tr>
					</thead>
					<tbody>
						<tr class="bgtd">
							<td>Ujian Teori</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>Java</td>
							<td></td>
							<td></td>
						</tr>
						<tr class="bgtd">
							<td>Pascal / Delphi</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>Basic / Visual Basic</td>
							<td></td>
							<td></td>
						</tr>
						<tr class="bgtd">
							<td>Pyhon / Ruby</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>C / C++</td>
							<td></td>
							<td></td>
						</tr>
						<tr class="bgtd">
							<td>Cobol (Kalimalang)</td>
							<td></td>
							<td></td>
						</tr>
						<?php if (substr($item['kelas'], 0, 1) === '3') {
							echo '
							<tr>
							<td>Networking / Tracer</td>
							<td></td>
							</tr>
							<tr class="bgtd">
							<td>Blender / 3D Modelling</td>
							<td></td>
							<td></td>
							</tr>
							<tr>
							<td>MySQL / Oracle</td>
							<td></td>
							<td></td>
							</tr>';}
							elseif (substr($item['kelas'], 0, 1) === '4') {
								echo '
								<tr>
								<td>Networking / Tracer</td>
								<td></td>
								<td></td>
								</tr>
								<tr class="bgtd">
								<td>Blender / 3D Modelling</td>
								<td></td>
								<td></td>
								</tr>
								<tr>
								<td>MySQL / Oracle</td>
								<td></td>
								<td></td>
								</tr>
								<tr class="bgtd">
								<td>PHP / CodeIgniter</td>
								<td></td>
								<td></td>
								</tr>';}?>
							</tbody>
						</table>
					</div>
				</div>
			<?php endforeach?>
			<div class="row">
				<div class="col-12 mt-5" style="">
					<h3>WAWANCARA</h3>
					<p class=" border-top" style="">Mengetahui,</p>
				</div>
			</div>

		</body>
		</html>