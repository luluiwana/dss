<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Implementasi Profile Matching Analysis">
    <meta name="author" content="Lulu Iwana">
    <meta name="keywords" content="PMA">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
   

</head>

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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-12 col-lg-12">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
										<?php

$query = $this->db->query("SELECT COUNT(nim) as jml FROM kandidat");

foreach ($query->result() as $row)
{
   ?>
   <h2><?php echo

$row->jml

?></h2>
<?php

}

?>


                                                
                                                <span>Pendaftar</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                           
                            
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Pendaftar Terbaik</h3><br/>
                                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari mahasiswa..">
                                        <table class="table table-hover table-responsive-xl js-sort-table" id="myTable">
										<tr valign="top">
										<th>No</th>
											<th>NIM</th>
											<th>Nama</th>
											<th>Prodi</th>
											<th>Angkatan</th>
											<th>IPK</th>
											<th >Total Skor</th>
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
												<?php echo $row['total']?>
											</td>
										</tr>
										<?php } ?>
									</table>

                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2020 Tim 2 Sistem Pendukung Keputusan. All rights reserved. .</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
	<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

</body>

</html>
<!-- end document-->
