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
						<h3>Data Peserta</h3>
						<br/>
						<div class="card">
							<div class="card-header">
								<strong class="card-title mb-3">Data</strong>
							</div>
							<div class="card-body">
								<div class="col-md-12" id="">
									<table class="table table-hover table-responsive-xl js-sort-table">
										<tr valign="top">
										<th>No</th>
											<th>NIM</th>
											<th>Nama</th>
											<th>Prodi</th>
											<th>Angkatan</th>
											<th>IPK</th>
											<th >Opsi</th>
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
												<?php echo $row['prodi']?>
											</td>
											<td>
												<?php echo $row['angkatan']?>
											</td>
											<td>
												<?php echo $row['ipk_murni']?>
											</td>
												<td>
												<a href="<?php echo base_url('home/detail/'.$row['nim'])?>"><button  class="btn btn-sm btn-primary">Edit</button></a>
												<a href="<?php echo base_url('home/hapus/'.$row['nim'])?>"><button class="btn btn-sm btn-danger">Hapus</button></a>
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