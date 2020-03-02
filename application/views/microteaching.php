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
						<h3>Analisis Aspek Microteaching</h3>
						<br/>
						<div class="card">
							<div class="card-header">
								<strong class="card-title mb-3">Kriteria Microteaching</strong>
							</div>
							<div class="card-body">
								<div class="col-md-12" id="">

									<table class="table table-hover table-responsive-xl" >
										<tr valign="top">
											<th>NIM</th>
											<th>Nama</th>
											<th>Suara</th>
											<th>Penguasaan Materi</th>
											<th>Penyampaian Materi</th>
											<th>Sikap</th>
											<th>Interaksi</th>
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
												<?php echo $row['suara']?>
											</td>
											<td>
												<?php echo $row['materi']?>
											</td>
											<td>
												<?php echo $row['penyampaian']?>
											</td>
											<td>
												<?php echo $row['sikap']?>
											</td>
											<td>
												<?php echo $row['interaksi']?>
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
									<strong class="card-title mb-3">GAP Microteaching</strong>
								</div>
								<div class="card-body">
									<div class="col-md-12" id="">
										<table class="table table-hover table-responsive-xl">
											<tr  valign="top">
												<th>NIM</th>
											<th>Nama</th>
											<th>Suara</th>
											<th>Penguasaan Materi</th>
											<th>Penyampaian Materi</th>
											<th>Sikap</th>
											<th>Interaksi</th>
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
												<?php echo $row['gap_suara']?>
											</td>
											<td>
												<?php echo $row['gap_materi']?>
											</td>
											<td>
												<?php echo $row['gap_penyampaian']?>
											</td>
											<td>
												<?php echo $row['gap_sikap']?>
											</td>
											<td>
												<?php echo $row['gap_interaksi']?>
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
									<strong class="card-title mb-3">Bobot Microteaching</strong>
								</div>
								<div class="card-body">
									<div class="col-md-12" id="">
										<table class="table table-hover table-responsive-xl">
											<tr  valign="top">
												<th>NIM</th>
											<th>Nama</th>
											<th>Suara</th>
											<th>Penguasaan Materi</th>
											<th>Penyampaian Materi</th>
											<th>Sikap</th>
											<th>Interaksi</th>
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
												<?php echo $row['bobot_suara']?>
											</td>
											<td>
												<?php echo $row['bobot_materi']?>
											</td>
											<td>
												<?php echo $row['bobot_penyampaian']?>
											</td>
											<td>
												<?php echo $row['bobot_sikap']?>
											</td>
											<td>
												<?php echo $row['bobot_interaksi']?>
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
									<strong class="card-title mb-3">CF dan SF Microteaching</strong>
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

										?>t					</td>
											<td>
												<?php echo $row['core_microteaching']?>
											</td>
											<td>
												<?php echo $row['sec_microteaching']?>
											</td>
											<td>
												<?php echo $row['microteaching']?>
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