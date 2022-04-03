<?php 

class Task extends DB{
	
	// Mengambil data
	function getTask(){
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do";
		return $this->execute($query); // ekseskusi query
	}

	// memasukan data ke database
	function addTask(){
		$name = $_POST['tname'];
		$deadline = $_POST['tdeadline'];
		$details = $_POST['tdetails'];
		$subject = $_POST['tsubject'];
		$priority = $_POST['tpriority'];
		$query = "insert into tb_to_do (name_td, details_td, subject_td, priority_td, deadline_td, status_td)
				  values ('$name', '$details', '$subject', '$priority', '$deadline', 'Belum')";
		return $this->execute($query); // ekseskusi query
	}

	// menghapus data dari database berdasarkan id
	function deleteTask($id){
		$query = "DELETE FROM tb_to_do WHERE id=$id";
		return $this->execute($query); // ekseskusi query
	}

	// mengubah status data dari database berdasarkan id
	function updateTask($id){
		$query = "UPDATE tb_to_do SET status_td='Sudah' WHERE id=$id";
		return $this->execute($query); // ekseskusi query
	}
	
	// mengurutkan data secara ascending berdasarkan opsi yang dipilih
	function sortingTask($key){
		$query = "SELECT * FROM tb_to_do ORDER BY $key ASC";
		return $this->execute($query); // ekseskusi query
	}
}

?>