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
						<h3>Analisis Aspek Tes Kompetensi</h3>
						<br/>
						<div class="card">
							<div class="card-header">
								<strong class="card-title mb-3">Kriteria Tes Kompetensi</strong>
							</div>
							<div class="card-body">
								<div class="col-md-12" id="">
									<table class="table table-hover table-responsive-xl" >
										<tr valign="top">
											<th>NIM</th>
											<th>Nama</th>
											<th>Nilai Tes</th>
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
												<?php echo $row['tes']?>
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
									<strong class="card-title mb-3">GAP Tes Kompetensi</strong>
								</div>
								<div class="card-body">
									<div class="col-md-12" id="">
										<table class="table table-hover table-responsive-xl">
											<tr  valign="top">
												<th>NIM</th>
												<th>Nama</th>
												<th>Nilai Tes</th>
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
													<?php echo $row['gap_tes']?>
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
									<strong class="card-title mb-3">Bobot Tes Kompetensi</strong>
								</div>
								<div class="card-body">
									<div class="col-md-12" id="">
										<table class="table table-hover table-responsive-xl">
											<tr  valign="top">
												<th>NIM</th>
												<th>Nama</th>
												<th>Nilai Tes</th>
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
													<?php echo $row['bobot_tes']?>
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
									<strong class="card-title mb-3">CF dan SF Tes kompetensi</strong>
								</div>
								<div class="card-body">
									<div class="col-md-12" id="">
										<table class="table table-hover table-responsive-xl">
											<tr  valign="top">
												<th>NIM</th>
												<th>Nama</th>
												<th>Core Factor</th>
												<th>100%CF</th>
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
													<?php echo $row['core_tes']?>
												</td>
												<td>
													<?php echo $row['core_tes']?>
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