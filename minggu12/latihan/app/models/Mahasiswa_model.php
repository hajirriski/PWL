<?php

class Mahasiswa_model{
	// private $mhs = [
	// 	[
	// 		"nim" => "1118056",
	// 		"nama" => "HusnulM",
	// 		"jurusan" => "Teknik Informatika"
	// 	],
	// 	[
	// 		"nim" => "1118057",
	// 		"nama" => "Hikmah",
	// 		"jurusan" => "Teknik Industri"
	// 	]
	// ];

	
	
	private $table = 'tb_mahasiswa';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllMhasiswa()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getAllMhasiswaById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function tambahMahasiswa($data)
	{
		//$nim, $nama, $jurusan
		$query = "INSERT INTO tb_mahasiswa (nim, nama, alamat) VALUES(:nim, :nama, :alamat)";
		$this->db->query($query);
		$this->db->bind('nim',$data['nim']);
		$this->db->bind('nama',$data['nama']);
		$this->db->bind('alamat',$data['alamat']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateDataMahasiswa($data)
	{
		$query = "UPDATE tb_mahasiswa SET nama=:nama, alamat=:alamat WHERE nim=:nim";
		$this->db->query($query);
		$this->db->bind('nim',$data['nim']);
		$this->db->bind('nama',$data['nama']);
		$this->db->bind('alamat',$data['alamat']);

		// $this->db->bind('nim',$nim);
		// $this->db->bind('nama',$nama);
		// $this->db->bind('jurusan',$jurusan);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteMhs($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}
}