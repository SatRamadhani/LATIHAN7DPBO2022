<?php 

	class Task extends DB{
		
		// Get data.
		function getTask()
		{
			// Write "SELECT" query and execute it to MySQL.
			$query = "SELECT * FROM tb_to_do";
			return $this->execute($query);
		}

		// Get data, sorted by specific column.
		function getSortedTask($column)
		{
			// Write "SELECT ORDER BY" query and execute it to MySQL.
			$query = "SELECT * FROM tb_to_do ORDER BY $column";
			return $this->execute($query);
		}

		// Add data.
		function addTask()
		{
			// Prepare value based on POST form.
			$name = $_POST['tname'];
			$deadline = $_POST['tdeadline'];
			$detail = $_POST['tdetails'];
			$subject = $_POST['tsubject'];
			$priority = $_POST['tpriority'];

			// Write "INSERT" query and execute it to MySQL.
			$query = "INSERT INTO tb_to_do (name_td, details_td, subject_td,
					priority_td, deadline_td, status_td) VALUES ('$name',
					'$detail', '$subject', '$priority', '$deadline', 'Belum')";

			return $this->execute($query);
		}

		// Update data from "Belum" to "Sudah".
		function updateTask()
		{
			// Prepare value based on GET "id_status".
			$id = $_GET['id_status'];

			// Write "UPDATE" query and execute it to MySQL.
			$query = "UPDATE tb_to_do SET status_td = 'Sudah' WHERE id = '$id'";
			return $this->execute($query);
		}

		// Delete data.
		function deleteTask()
		{
			// Prepare value based on GET "id_hapus".
			$id = $_GET['id_hapus'];

			// Write "DELETE" query and execute it to MySQL.
			$query = "DELETE FROM tb_to_do WHERE id = '$id'";
			return $this->execute($query);
		}
	}

?>