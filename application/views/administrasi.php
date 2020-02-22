<style>
    .form-control {
        font-size: 14px;
    }
    
    .col-md-3 {
        padding-bottom: 15px;
    }
    
    .badge {
        font-size: 15px;
        padding: 5px;
        background-color: #3f24a1;
    }
    
    label {
        font-size: 14px;
    }
</style>
<body class="animsition">
	<div class="page-wrapper">
		<!-- HEADER MOBILE-->
		<!-- END HEADER MOBILE-->
		<!-- MENU SIDEBAR-->
		<!-- END MENU SIDEBAR-->
		<!-- PAGE CONTAINER-->
		<div class="page-container">
			<!-- HEADER DESKTOP-->
			<!-- HEADER DESKTOP-->
			<!-- MAIN CONTENT-->
			<div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<h3>Analisis Aspek Administrasi</h3>
						<br/>
						<div class="card">
							<div class="card-header">
								<strong class="card-title mb-3">Kriteria Administrasi</strong>
							</div>
							<div class="card-body">
								<div class="col-md-12" id="">
									<table class="table table-hover table-responsive-xl" >
										<tr valign="top">
											<th>NIM</th>
											<th>Nama</th>
											<th>IPK</th>
											<th>Nilai ASD</th>
											<th>Sertifikasi</th>
											<th>Pengalaman Asisten</th>
										</tr>
										<?php 

										foreach ($info as $row)
										{

										?>
										<tr valign="top">
											<td>
												<?php echo $row['nim']?>
											</td>
											<td>
												<?php echo $row['nama']?>
											</td>
											<td>
												<?php echo $row['ipk']?>
											</td>
											<td>
												<?php echo $row['nilai_matkul']?>
											</td>
											<td>
												<?php echo $row['sertifikat']?>
											</td>
											<td>
												<?php echo $row['pengalaman']?>
											</td>
										</tr>
										<?php } ?>
									</table>
								</div>
								<hr>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<strong class="card-title mb-3">GAP Administrasi</strong>
								</div>
								<div class="card-body">
									<div class="col-md-12" id="">
										<table class="table table-hover table-responsive-xl">
											<tr  valign="top">
												<th>NIM</th>
												<th>Nama</th>
												<th>IPK</th>
												<th>Nilai ASD</th>
												<th>Sertifikasi</th>
												<th>Pengalaman Asisten</th>
											</tr>
											<?php 

										foreach ($info as $row)
										{

										?>
											<tr  valign="top">
												<td>
													<?php echo $row['nim']?>
												</td>
												<td>
													<?php echo $row['nama']?>
												</td>
												<td>
													<?php echo $row['gap_ipk']?>
												</td>
												<td>
													<?php echo $row['gap_nilai']?>
												</td>
												<td>
													<?php echo $row['gap_sertifikat']?>
												</td>
												<td>
													<?php echo $row['gap_pengalaman']?>
												</td>
											</tr>
											<?php } ?>
										</table>
									</div>
									<hr>
									</div>
								</div>
								
								<div class="card">
								<div class="card-header">
									<strong class="card-title mb-3">Bobot Administrasi</strong>
								</div>
								<div class="card-body">
									<div class="col-md-12" id="">
										<table class="table table-hover table-responsive-xl">
											<tr  valign="top">
												<th>NIM</th>
												<th>Nama</th>
												<th>IPK</th>
												<th>Nilai ASD</th>
												<th>Sertifikasi</th>
												<th>Pengalaman Asisten</th>
											</tr>
											<?php 

										foreach ($info as $row)
										{

										?>
											<tr  valign="top">
												<td>
													<?php echo $row['nim']?>
												</td>
												<td>
													<?php echo $row['nama']?>
												</td>
												<td>
													<?php echo $row['bobot_ipk']?>
												</td>
												<td>
													<?php echo $row['bobot_nilai']?>
												</td>
												<td>
													<?php echo $row['bobot_sertifikat']?>
												</td>
												<td>
													<?php echo $row['bobot_pengalaman']?>
												</td>
											</tr>
											<?php } ?>
										</table>
									</div>
									<hr>
									</div>
								</div>
								
								<div class="card">
								<div class="card-header">
									<strong class="card-title mb-3">CF dan SF Administrasi</strong>
								</div>
								<div class="card-body">
									<div class="col-md-12" id="">
										<table class="table table-hover table-responsive-xl">
											<tr  valign="top">
												<th>NIM</th>
												<th>Nama</th>
												<th>Core Factor</th>
												<th>Secondary Factor</th>
												<th>60%CF + 40%SF</th>
											</tr>
											<?php 

										foreach ($info as $row)
										{

										?>
											<tr  valign="top">
												<td>
													<?php echo $row['nim']?>
												</td>
												<td>
													<?php echo $row['nama']?>
												</td>
												<td>
													<?php echo $row['core_administrasi']?>
												</td>
												<td>
													<?php echo $row['sec_administrasi']?>
												</td>
												<td>
													<?php echo $row['administrasi']?>
												</td>
												
											</tr>
											<?php } ?>
										</table>
									</div>
									<hr>
									</div>
								</div>
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</body>