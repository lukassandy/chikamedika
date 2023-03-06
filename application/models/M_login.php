<?php 
 
class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
	
	// fungsi untuk tampil data
	function tampil_data(){
		$data = $this->db->query("select pasien.id_pasien,nama_pasien,tgl_lahir,alamat,no_telp from pasien");
		return $data->result();
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function getPasienId($id_pasien){
		return $this->db->get_where('pasien', ['id_pasien'=>$id_pasien])->row_array();
	}

	public function getKonsul($id_pasien){
		return $this->db->get_where('konsultasi', ['id_pasien'=>$id_pasien])->row_array();
	}

	public function getRiwayat($id_pasien){
		return $this->db->get_where('riwayat_pasien', ['id_pasien'=>$id_pasien])->row_array();
	}
	
	public function ubah_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function getVisit($id_pasien,$visit){
		return $this->db->query("SELECT * FROM konsultasi WHERE id_pasien=$id_pasien AND visit=$visit")->row_array();
	}
}

?>