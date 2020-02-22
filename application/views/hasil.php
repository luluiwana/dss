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
						<h3>Hasil Profile Matching Analysis</h3>
						<br/>
						<div class="card">
							<div class="card-header">
								<strong class="card-title mb-3">Hasil Perhitungan</strong>
							</div>
							<div class="card-body">
								<div class="col-md-12" id="">
									<table class="table table-hover table-responsive">
										<tr valign="top">
										<th>No</th>
											<th>NIM</th>
											<th>Nama</th>
											<th>Administrasi</th>
											<th>Tes Kompetensi</th>
											<th>Microteaching</th>
											<th>Wawancara</th>
											<th >Total</th>
										</tr>
										<?php 
										$no=0;
										foreach ($info as $row)
										{ 
										$no=$no+1;
										?>
										<tr valign="top">
											<td>
												<?php echo $no?>
											</td>
											<td>
												<?php echo $row['nim']?>
											</td>
											<td>
												<?php echo $row['nama']?>
											</td>
											<td>
												<?php echo $row['administrasi']?>
											</td>
											<td>
												<?php echo $row['core_tes']?>
											</td>
											<td>
												<?php echo $row['microteaching']?>
											</td>
											<td>
												<?php echo $row['wawancara']?>
											</td>
											<td>
												<?php echo $row['total']?>
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