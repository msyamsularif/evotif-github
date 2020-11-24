<?php 
Class Admin_Model extends CI_Model {
	public function login($username, $password_hash) {
		$condition	= "username="."'".$username."'". " AND "."password="."'".$password_hash."'";
		$select		= array('username', 'password');
		$this->db->select($select);
		$this->db->from('tb_admin');
		$this->db->where($condition);
		$login 		= $this->db->get();
		
		if($login->num_rows() > 0) {
			return true;
		}
		else {
			return false;
		}
	}
	public function regvalid() {
		$load = $this->db->query("SELECT * FROM tb_identitaskampus");
		if($load->num_rows() > 0) {
			return true;
		}
		else {
			return false;
		}
	}
	public function regsekolah($npsn,$nm_kampus) {
		$data				= array(
			'npsn'			=> $npsn,
			'nm_kampus'	=> $nm_kampus
		);
		$this->db->insert('tb_identitaskampus', $data);
	}
	public function dataadmin() {
		$load = $this->db->query('SELECT * FROM tb_admin');
		return $load->result_array();
	}
	public function gantipassword($username, $password_hash) {
		$update = $this->db->query("UPDATE tb_admin SET password='$password_hash' WHERE username='$username'");
		return $update;
	}
	public function datapilketos() {
		$load = $this->db->query("SELECT * FROM tb_datasetpel WHERE id='1'");
		return $load->result_array();
	}
	public function updatedatapilketos($tapel, $tgl){
		$update = $this->db->query("UPDATE tb_datasetpel SET tapel='$tapel', tgl='$tgl' WHERE id='1'");
		return $update;
	}
	public function resetuser($username) {
		$reset = $this->db->query("DELETE FROM tb_pilih WHERE username='$username'");
		return $reset;
	}
	public function updateuser($username) {
		$reset = $this->db->query("UPDATE tb_mahasiswa SET hadir='Tidak Hadir' WHERE username='$username'");
		return $reset;
	}
	public function resetdata(){
		$reset 	= $this->db->query("DELETE FROM tb_pilih");
		$reset1	= $this->db->query("DELETE FROM tb_mahasiswa");
		$reset2	= $this->db->query("DELETE FROM tb_pilihan");
		$reset3	= $this->db->query("DELETE FROM tb_mahasiswa");
		$reset4	= $this->db->query("UPDATE tb_datasetpel SET tapel='', tgl='' WHERE id='1'");
		return true;
	}
	public function idsekolah() {
		$load = $this->db->query("SELECT * FROM tb_identitaskampus");
		return $load->result_array();
	}
	public function updateidsekolah($npsn, $nm_kampus, $jln, $desa, $kec, $kab, $nm_rektor, $nip){
		$save = $this->db->query("UPDATE tb_identitaskampus SET npsn='$npsn', nm_kampus='$nm_kampus', jln='$jln', desa='$desa', kec='$kec', kab='$kab', nm_rektor='$nm_rektor', nip='$nip'");
		return $save;
	}
	public function datakelas() {
		$load = $this->db->query("SELECT * FROM tb_kelas");
		return $load->result_array();
	}
	public function simpankelas($nm_kelas) {
		$data = array(
			'nm_kelas'	=> $nm_kelas
		);
		$this->db->insert('tb_kelas', $data);
	}
	public function tambahcalon($nim, $no , $nama, $visi, $misi, $photo) {
		$data		= array (
			'nim'	=> $nim,
			'no'	=> $no,
			'nama'	=> $nama,
			'visi'	=> $visi,
			'misi'	=> $misi,
			'photo' => $photo
		);
		$this->db->insert('tb_pilihan', $data);
	}
	public function hapuskelas($kd_kelas) {
		$hapus = $this->db->query("DELETE FROM tb_kelas WHERE kd_kelas='$kd_kelas'");
		return $hapus;
	}
	public function updatecalon($nim, $no , $nama, $visi, $misi) {
		$save		= $this->db->query("UPDATE tb_pilihan SET no='$no', nama='$nama' , visi='$visi', misi='$misi' WHERE nim='$nim'");
		return $save;
	}
	public function hapuscalon($nim) {
		$hapus		= $this->db->query("DELETE FROM tb_pilihan WHERE nim='$nim'");
		return $hapus;
	}
	public function datacalon() {
		$load	= $this->db->query("SELECT * FROM tb_pilihan ORDER BY no asc");
		return $load->result_array();
	}
	public function datadpt() {
		$load = $this->db->query("SELECT * FROM tb_mahasiswa INNER JOIN tb_kelas ON tb_kelas.kd_kelas = tb_mahasiswa.kd_kelas");
		return $load->result_array();
	}
	public function datakddpt($username) {
		$load = $this->db->query("SELECT * FROM tb_mahasiswa INNER JOIN tb_kelas ON tb_kelas.kd_kelas = tb_mahasiswa.kd_kelas WHERE tb_mahasiswa.username='$username'");
		return $load->result_array();
	}
	public function simpandpt($username, $password, $nm_mahasiswa, $jk,$kd_kelas) {
		$data 			= array(
			'username'	=> $username,
			'password'	=> $password,
			'nm_mahasiswa'	=> $nm_mahasiswa,
			'jk'		=> $jk,
			'kd_kelas'	=> $kd_kelas
		);
		$this->db->insert('tb_mahasiswa', $data);
	}
	public function hapusdpt($username) {
		$hapus	= $this->db->query("DELETE FROM tb_mahasiswa WHERE username='$username'");
		return $hapus;
	}
	public function updatedpt($username, $nm_mahasiswa, $jk, $kd_kelas) {
		$update = $this->db->query("UPDATE tb_mahasiswa SET nm_mahasiswa='$nm_mahasiswa', jk='$jk', kd_kelas='$kd_kelas' WHERE username='$username'");
		return $update;
	}
	public function datacalonspesifik($nim) {
		$load	= $this->db->query("SELECT * FROM tb_pilihan WHERE nim='$nim'");
		return $load->result_array();
	}
	public function countcalon() {
		$count	= $this->db->query("SELECT COUNT(no) AS jumlah FROM tb_pilihan");
		return $count->result_array();
	}
	public function countpemilih() {
		$count	= $this->db->query("SELECT COUNT(username) AS jumlah FROM tb_mahasiswa");
		return $count->result_array();
	}
	public function countvote() {
		$count	= $this->db->query("SELECT COUNT(username) AS jumlah FROM view_vote");
		return $count->result_array();
	}
	public function hasilvote() {
		$count	= $this->db->query("SELECT * , (
		SELECT COUNT(tb_pilih.id_pilih)) AS jumlah
		FROM
		tb_pilihan
		INNER JOIN tb_pilih
		ON
		tb_pilihan.nim = tb_pilih.nim
		INNER JOIN tb_mahasiswa
		ON 
		tb_mahasiswa.username = tb_pilih.username
		GROUP BY tb_pilih.nim
		ORDER BY tb_pilihan.no ASC
		");
		return $count->result_array();
	}
	public function jmldptL() {
		$data = $this->db->query("SELECT COUNT(jk) as L FROM tb_mahasiswa WHERE jk='L'");
		return $data->result_array();
	}
	public function jmldptP() {
		$data = $this->db->query("SELECT COUNT(jk) as P FROM tb_mahasiswa WHERE jk='P'");
		return $data->result_array();
	}
	public function jmlvoteL() {
		$data = $this->db->query("
		SELECT COUNT(tb_mahasiswa.jk) as L 
		FROM 
		tb_mahasiswa 
		INNER JOIN 
		tb_pilih
		ON 
		tb_mahasiswa.username = tb_pilih.username
		WHERE jk='L'");
		return $data->result_array();
	}
	public function jmlvoteP() {
		$data = $this->db->query("
		SELECT COUNT(tb_mahasiswa.jk) as P 
		FROM 
		tb_mahasiswa 
		INNER JOIN 
		tb_pilih
		ON 
		tb_mahasiswa.username = tb_pilih.username
		WHERE jk='P'");
		return $data->result_array();
	}
	public function kuncivote() {
		$data	= $this->db->query("SELECT * FROM tb_pilih");
		return $data->result_array();
	}
	public function daftarhadir() {
		$data	= $this->db->query("SELECT * FROM tb_mahasiswa INNER JOIN tb_kelas ON tb_kelas.kd_kelas = tb_mahasiswa.kd_kelas ORDER BY tb_kelas.kd_kelas ASC");
		return $data->result_array();
	}
}
?>