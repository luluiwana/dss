<?php 
 
class Model_profile extends CI_Model{
	function ambil_data(){
		$query = $this->db->query('SELECT * FROM kandidat');
		foreach ($query->result() as $row){
        $nama = $row->nama;
		$nim = $row->nim;
		$prodi = $row->prodi;
		$angkatan = $row->angkatan;
		$ipk_murni = $row->ipk_murni;
		$ipk = $row->ipk;
		$nilai_matkul = $row->nilai_matkul;
		$sertifikat = $row->sertifikat;
		$pengalaman = $row->pengalaman;
		$tes = $row->tes;
		$suara = $row->suara;
		$materi = $row->materi;
		$penyampaian = $row->penyampaian;
		$sikap = $row->sikap;
		$interaksi = $row->interaksi;
		$karakter = $row->karakter;
		$konsistensi = $row->konsistensi;
		$komitmen = $row->komitmen;
		
		$gap_ipk = $ipk-5;
		$gap_nilai = $nilai_matkul-4;
		$gap_sertifikat = $sertifikat-3;
		$gap_pengalaman = $pengalaman-3;
		$gap_tes = $tes-4;
		$gap_suara = $suara-4;
		$gap_materi = $materi-3;
		$gap_penyampaian = $penyampaian-3;
		$gap_sikap = $sikap-4;
		$gap_interaksi = $interaksi-5;
		$gap_karakter = $karakter-3;
		$gap_konsistensi = $konsistensi-5;
		$gap_komitmen = $komitmen-5;
		
		if ($gap_ipk<=0) {
			$bobot_ipk = $gap_ipk+5; 
		}
		else {
			if ($gap_ipk==1) {
				$bobot_ipk=4.5;
			}elseif($gap_ipk==2) {
				$bobot_ipk==3.5;
			}elseif($gap_ipk==3) {
				$bobot_ipk==2.5;
			}elseif($gap_ipk==4) {
				$bobot_ipk==1.5;
			}
		}
		
		if ($gap_nilai<=0) {
			$bobot_nilai = $gap_nilai+5; 
		}
		else {
			if ($gap_nilai==1) {
				$bobot_nilai=4.5;
			}elseif($gap_nilai==2) {
				$bobot_nilai==3.5;
			}elseif($gap_nilai==3) {
				$bobot_nilai==2.5;
			}elseif($gap_nilai==4) {
				$bobot_nilai==1.5;
			}
		}
		
		if ($gap_sertifikat<=0) {
			$bobot_sertifikat = $gap_sertifikat+5; 
		}
		else {
			if ($gap_sertifikat==1) {
				$bobot_sertifikat=4.5;
			}elseif($gap_sertifikat==2) {
				$bobot_sertifikat==3.5;
			}elseif($gap_sertifikat==3) {
				$bobot_sertifikat==2.5;
			}elseif($gap_sertifikat==4) {
				$bobot_sertifikat==1.5;
			}
		}
		
		if ($gap_pengalaman<=0) {
			$bobot_pengalaman = $gap_pengalaman+5; 
		}
		else {
			if ($gap_pengalaman==1) {
				$bobot_pengalaman=4.5;
			}elseif($gap_pengalaman==2) {
				$bobot_pengalaman==3.5;
			}elseif($gap_pengalaman==3) {
				$bobot_pengalaman==2.5;
			}elseif($gap_pengalaman==4) {
				$bobot_pengalaman==1.5;
			}
		}
		
		if ($gap_tes<=0) {
			$bobot_tes = $gap_tes+5; 
		}
		else {
			if ($gap_tes==1) {
				$bobot_tes=4.5;
			}elseif($gap_tes==2) {
				$bobot_tes==3.5;
			}elseif($gap_tes==3) {
				$bobot_tes==2.5;
			}elseif($gap_tes==4) {
				$bobot_tes==1.5;
			}
		}
		
		if ($gap_suara<=0) {
			$bobot_suara = $gap_suara+5; 
		}
		else {
			if ($gap_suara==1) {
				$bobot_suara=4.5;
			}elseif($gap_suara==2) {
				$bobot_suara==3.5;
			}elseif($gap_suara==3) {
				$bobot_suara==2.5;
			}elseif($gap_suara==4) {
				$bobot_suara==1.5;
			}
		}
		
		if ($gap_materi<=0) {
			$bobot_materi = $gap_materi+5; 
		}
		else {
			if ($gap_materi==1) {
				$bobot_materi=4.5;
			}elseif($gap_materi==2) {
				$bobot_materi==3.5;
			}elseif($gap_materi==3) {
				$bobot_materi==2.5;
			}elseif($gap_materi==4) {
				$bobot_materi==1.5;
			}
		}
		
		if ($gap_penyampaian<=0) {
			$bobot_penyampaian = $gap_penyampaian+5; 
		}
		else {
			if ($gap_penyampaian==1) {
				$bobot_penyampaian=4.5;
			}elseif($gap_penyampaian==2) {
				$bobot_penyampaian==3.5;
			}elseif($gap_penyampaian==3) {
				$bobot_penyampaian==2.5;
			}elseif($gap_penyampaian==4) {
				$bobot_penyampaian==1.5;
			}
		}
		
		if ($gap_sikap<=0) {
			$bobot_sikap = $gap_sikap+5; 
		}
		else {
			if ($gap_sikap==1) {
				$bobot_sikap=4.5;
			}elseif($gap_sikap==2) {
				$bobot_sikap==3.5;
			}elseif($gap_sikap==3) {
				$bobot_sikap==2.5;
			}elseif($gap_sikap==4) {
				$bobot_sikap==1.5;
			}
		}
		
		if ($gap_interaksi<=0) {
			$bobot_interaksi = $gap_interaksi+5; 
		}
		else {
			if ($gap_interaksi==1) {
				$bobot_interaksi=4.5;
			}elseif($gap_interaksi==2) {
				$bobot_interaksi==3.5;
			}elseif($gap_interaksi==3) {
				$bobot_interaksi==2.5;
			}elseif($gap_interaksi==4) {
				$bobot_interaksi==1.5;
			}
		}
		
		if ($gap_karakter<=0) {
			$bobot_karakter = $gap_karakter+5; 
		}
		else {
			if ($gap_karakter==1) {
				$bobot_karakter=4.5;
			}elseif($gap_karakter==2) {
				$bobot_karakter==3.5;
			}elseif($gap_karakter==3) {
				$bobot_karakter==2.5;
			}elseif($gap_karakter==4) {
				$bobot_karakter==1.5;
			}
		}
		
		if ($gap_komitmen<=0) {
			$bobot_komitmen = $gap_komitmen+5; 
		}
		else {
			if ($gap_komitmen==1) {
				$bobot_komitmen=4.5;
			}elseif($gap_komitmen==2) {
				$bobot_komitmen==3.5;
			}elseif($gap_komitmen==3) {
				$bobot_komitmen==2.5;
			}elseif($gap_komitmen==4) {
				$bobot_komitmen==1.5;
			}
		}
		
		if ($gap_konsistensi<=0) {
			$bobot_konsistensi = $gap_konsistensi+5; 
		}
		else {
			if ($gap_konsistensi==1) {
				$bobot_konsistensi=4.5;
			}elseif($gap_konsistensi==2) {
				$bobot_konsistensi==3.5;
			}elseif($gap_konsistensi==3) {
				$bobot_konsistensi==2.5;
			}elseif($gap_konsistensi==4) {
				$bobot_konsistensi==1.5;
			}
		}
		
		
		$core_administrasi = ($bobot_ipk+$bobot_nilai)/2;
		$sec_administrasi = ($bobot_sertifikat+$bobot_pengalaman)/2;
		$administrasi = 0.6*$core_administrasi + 0.4*$sec_administrasi;
		
		$core_tes = $bobot_tes;
		
		$core_microteaching = ($bobot_suara+$bobot_sikap+$bobot_interaksi)/3;
		$sec_microteaching = ($bobot_materi+$bobot_penyampaian)/2;
		$microteaching = 0.6*$core_microteaching + 0.4*$sec_microteaching;
		
		$core_wawancara = ($bobot_komitmen+$bobot_konsistensi)/2;
		$sec_wawancara = $bobot_karakter;
		$wawancara = 0.6*$core_wawancara + 0.4*$sec_wawancara;
		
		$total = $administrasi + $microteaching + $core_tes + $wawancara;
		
		$data[] = array(
			'nama' => $nama,
			'nim' => $nim,
			'prodi' => $prodi,
			'angkatan' => $angkatan,
			'ipk_murni' => $ipk_murni,
			'ipk' => $ipk,
			'nilai_matkul' => $nilai_matkul,
			'sertifikat' => $sertifikat,
			'pengalaman' => $pengalaman,
			'tes' => $tes,
			'suara' => $suara,
			'materi' => $materi,
			'penyampaian' => $penyampaian,
			'sikap' => $sikap,
			'interaksi' => $interaksi,
			'karakter' => $karakter,
			'komitmen' => $komitmen,
			'konsistensi' => $konsistensi,
			'gap_ipk' => $gap_ipk,
			'gap_nilai' => $gap_nilai,
			'gap_sertifikat' => $gap_sertifikat,
			'gap_pengalaman' => $gap_pengalaman,
			'gap_tes' => $gap_tes,
			'gap_suara' => $gap_suara,
			'gap_materi' => $gap_materi,
			'gap_penyampaian' => $gap_penyampaian,
			'gap_sikap' => $gap_sikap,
			'gap_interaksi' => $gap_interaksi,
			'gap_karakter' => $gap_karakter,
			'gap_komitmen' => $gap_komitmen,
			'gap_konsistensi' => $gap_konsistensi,
			'bobot_ipk' => $bobot_ipk,
			'bobot_nilai' => $bobot_nilai,
			'bobot_sertifikat' => $bobot_sertifikat,
			'bobot_pengalaman' => $bobot_pengalaman,
			'bobot_tes' => $bobot_tes,
			'bobot_suara' => $bobot_suara,
			'bobot_materi' => $bobot_materi,
			'bobot_penyampaian' => $bobot_penyampaian,
			'bobot_sikap' => $bobot_sikap,
			'bobot_interaksi' => $bobot_interaksi,
			'bobot_karakter' => $bobot_karakter,
			'bobot_komitmen' => $bobot_komitmen,
			'bobot_konsistensi' => $bobot_konsistensi,
			'core_administrasi' => $core_administrasi,
			'sec_administrasi' => $sec_administrasi,
			'administrasi' => $administrasi,
			'core_microteaching' => $core_microteaching,
			'sec_microteaching' => $sec_microteaching,
			'microteaching' => $microteaching,
			'core_wawancara' => $core_wawancara,
			'sec_wawancara' => $sec_wawancara,
			'wawancara' => $wawancara,
			'core_tes' => $core_tes,
			'total' => $total
			);
			
		}
			
			return $data;
	}
	
	function tambah_data($data){
		return $this->db->insert('kandidat',$data);
	}
	function hapus_data($nim){
		$this->db->delete('kandidat', array('nim' => $nim)); 

	}
	function ubah_data($data, $nim){
		$this->db->where('nim', $nim);
		$this->db->update('kandidat', $data);
	}
	function lihat_data($nim){
		$query = $this->db->query("SELECT * FROM kandidat WHERE nim='".$nim."'");
		foreach ($query->result() as $row){
			$nama = $row->nama;
		$nim = $row->nim;
		$prodi = $row->prodi;
		$angkatan = $row->angkatan;
		$ipk_murni = $row->ipk_murni;
		$ipk = $row->ipk;
		$nilai_matkul = $row->nilai_matkul;
		$sertifikat = $row->sertifikat;
		$pengalaman = $row->pengalaman;
		$tes = $row->tes;
		$suara = $row->suara;
		$materi = $row->materi;
		$penyampaian = $row->penyampaian;
		$sikap = $row->sikap;
		$interaksi = $row->interaksi;
		$karakter = $row->karakter;
		$konsistensi = $row->konsistensi;
		$komitmen = $row->komitmen;
		}
		$data[] = array(
			'nama' => $nama,
			'nim' => $nim,
			'prodi' => $prodi,
			'angkatan' => $angkatan,
			'ipk_murni' => $ipk_murni,
			'ipk' => $ipk,
			'nilai_matkul' => $nilai_matkul,
			'sertifikat' => $sertifikat,
			'pengalaman' => $pengalaman,
			'tes' => $tes,
			'suara' => $suara,
			'materi' => $materi,
			'penyampaian' => $penyampaian,
			'sikap' => $sikap,
			'interaksi' => $interaksi,
			'karakter' => $karakter,
			'komitmen' => $komitmen,
			'konsistensi' => $konsistensi,
			
			);
			
			return $data;
	}
	
}