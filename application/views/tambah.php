<style>

.form-control{
	font-size:14px;
}
.col-md-3{
	padding-bottom:15px;
}
.badge{
	font-size:15px;
	padding:5px;
	background-color:#3f24a1;
}
label{
	font-size:14px;
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
                            
                            <div class="col-lg-12">
					
                                <div class="card">
                                    <div class="card-header">
                                       <strong> Tambah Kandidat Asisten Praktikum</strong>
                                    </div>
									
                                    <div class="card-body card-block">
									
									<span class="badge badge-primary form-control" id="">Profil Calon Asisten</span><br/>
									<br/>
									
                                        <form action="<?php echo base_url('home/add')?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                           
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nama Lengkap</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input required type="text" id="text-input" name="nama" placeholder="Masukkan nama lengkap" class="form-control">
                                                   
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">NIM</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input required type="text" id="text-input" name="nim" placeholder="Masukkan NIM" class="form-control">
                                                   
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="selectLg" class=" form-control-label">Program Studi</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select required name="prodi" id="selectLg" class="form-control-lg form-control">
                                                        <option value="">--Pilih--</option>
                                                        <option value="S1 Teknik Elektro">S1 Teknik Elektro</option>
                                                        <option value="S1 Pendidikan Teknik Elektro">S1 Pendidikan Teknik Elektro</option>
                                                        <option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
                                                        <option value="S1 Pendidikan Teknik Informatika">S1 Pendidikan Teknik Informatika</option>
                                                        <option value="D3 Elektro">D3 Elektro</option>
                                                        <option value="D3 Elektronika">D3 Elektronika</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="selectLg" class=" form-control-label">Angkatan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select required name="angkatan" id="selectLg" class="form-control-lg form-control">
                                                        <option value="">--Pilih--</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2019">2019</option>
                                                    </select>
                                                </div>
                                            </div>
											<span class="badge badge-primary form-control" id="">Data Administrasi</span><br/><br/>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">IPK</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input required type="text" id="text-input" name="ipk_murni" placeholder="Masukkan IPK" class="form-control">
                                                   
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="selectLg" class=" form-control-label">NIlai Algoritma dan Struktur Data</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select required name="nilai_matkul" id="selectLg" class="form-control-lg form-control">
                                                        <option value="">--Pilih--</option>
                                                        <option value="5">A</option>
                                                        <option value="4.5">A-</option>
                                                        <option value="4">B+</option>
                                                        <option value="3.5">B</option>
                                                        <option value="3">B-</option>
                                                        <option value="2.5">C+</option>
                                                        <option value="2">C</option>
                                                        <option value="1.5">D</option>
                                                        <option value="1">E</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="selectLg" class=" form-control-label">Sertifikat Keahlian</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select required name="sertifikat" id="selectLg" class="form-control-lg form-control">
                                                        <option value="">--Pilih--</option>
                                                        <option value="3">Ada</option>
                                                        <option value="1">Tidak Ada</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="selectLg" class=" form-control-label">Pengalaman Asisten</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select required name="pengalaman" id="selectLg" class="form-control-lg form-control">
                                                        <option value="">--Pilih--</option>
                                                        <option value="3">Ada</option>
                                                        <option value="1">Tidak Ada</option>
                                                    </select>
                                                </div>
                                            </div>
											<span class="badge badge-primary form-control" id="">Hasil Tes Kompetensi</span><br/><br/>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="selectLg" class=" form-control-label">Nilai Tes Kompetensi</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select required name="tes" id="selectLg" class="form-control-lg form-control">
                                                        <option value="">--Pilih--</option>
                                                        <option value="5">100</option>
                                                        <option value="4">80</option>
                                                        <option value="3">60</option>
                                                        <option value="2">40</option>
                                                        <option value="1">&lt;=20</option>
                                                    </select>
                                                </div>
                                            </div>
											
											<span class="badge badge-primary form-control" id="">Hasil Tes Microteaching</span><br/><br/>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="selectLg" class=" form-control-label">Suara</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select required name="suara" id="selectLg" class="form-control-lg form-control">
                                                        <option value="">--Pilih--</option>
                                                        <option value="5">Sangat Baik</option>
                                                        <option value="4">Baik</option>
                                                        <option value="3">Cukup Baik</option>
                                                        <option value="2">Kurang Baik</option>
                                                        <option value="1">Tidak Baik</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="selectLg" class=" form-control-label">Penguasaan Materi</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select required name="materi" id="selectLg" class="form-control-lg form-control">
                                                        <option value="">--Pilih--</option>
                                                        <option value="5">Sangat Baik</option>
                                                        <option value="4">Baik</option>
                                                        <option value="3">Cukup Baik</option>
                                                        <option value="2">Kurang Baik</option>
                                                        <option value="1">Tidak Baik</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="selectLg" class=" form-control-label">Penyampaian Materi</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select required name="penyampaian" id="selectLg" class="form-control-lg form-control">
                                                        <option value="">--Pilih--</option>
                                                        <option value="5">Sangat Baik</option>
                                                        <option value="4">Baik</option>
                                                        <option value="3">Cukup Baik</option>
                                                        <option value="2">Kurang Baik</option>
                                                        <option value="1">Tidak Baik</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="selectLg" class=" form-control-label">Sikap</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select required name="sikap" id="selectLg" class="form-control-lg form-control">
                                                        <option value="">--Pilih--</option>
                                                        <option value="5">Sangat Baik</option>
                                                        <option value="4">Baik</option>
                                                        <option value="3">Cukup Baik</option>
                                                        <option value="2">Kurang Baik</option>
                                                        <option value="1">Tidak Baik</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="selectLg" class=" form-control-label">Interaksi</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select required name="interaksi" id="selectLg" class="form-control-lg form-control">
                                                        <option value="">--Pilih--</option>
                                                        <option value="5">Sangat Baik</option>
                                                        <option value="4">Baik</option>
                                                        <option value="3">Cukup Baik</option>
                                                        <option value="2">Kurang Baik</option>
                                                        <option value="1">Tidak Baik</option>
                                                    </select>
                                                </div>
                                            </div>
											
											<span class="badge badge-primary form-control" id="">Hasil Tes Wawancara</span><br/><br/>
											
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="selectLg" class=" form-control-label">Karakter</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select required name="karakter" id="selectLg" class="form-control-lg form-control">
                                                        <option value="">--Pilih--</option>
                                                        <option value="5">Sangat Baik</option>
                                                        <option value="4">Baik</option>
                                                        <option value="3">Cukup Baik</option>
                                                        <option value="2">Kurang Baik</option>
                                                        <option value="1">Tidak Baik</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="selectLg" class=" form-control-label">Komitmen</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select required name="komitmen" id="selectLg" class="form-control-lg form-control">
                                                        <option value="">--Pilih--</option>
                                                        <option value="5">Sangat Baik</option>
                                                        <option value="4">Baik</option>
                                                        <option value="3">Cukup Baik</option>
                                                        <option value="2">Kurang Baik</option>
                                                        <option value="1">Tidak Baik</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="selectLg" class=" form-control-label">Konsistensi</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select required name="konsistensi" id="selectLg" class="form-control-lg form-control">
                                                        <option value="">--Pilih--</option>
                                                        <option value="5">Sangat Baik</option>
                                                        <option value="4">Baik</option>
                                                        <option value="3">Cukup Baik</option>
                                                        <option value="2">Kurang Baik</option>
                                                        <option value="1">Tidak Baik</option>
                                                    </select>
                                                </div>
                                            </div>
											
                                        
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary form-control" style="font-size:14px;">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                       
                                    </div>
									</form>
                                </div>
                                
                            </div>
                            
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2020 Tim Research 2 Sistem Pendukung Keputusan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

   \

</body>