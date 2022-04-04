<?php

	// Include file.
	include("conf.php");
	include("DB.php");
	include("Task.php");
	include("Template.php");

	// Create object from Task and open its connection.
	$otask = new Task($db_host, $db_user, $db_password, $db_name);
	$otask->open();

	// Listen to data change (ADD, UPDATE, DELETE).
	if(isset($_POST['add']))
	{
		$otask->addTask();
	}
	if(isset($_GET['id_status']))
	{
		$otask->updateTask();
	}
	if(isset($_GET['id_hapus']))
	{
		$otask->deleteTask();
	}

	// Get data (check if it needs to sort it specifically).
	if(isset($_GET['sort']))
	{
		$otask->getSortedTask($_GET['sort']);
	}
	else
	{
		$otask->getTask();
	}


	// Fill in table with data.
	$data = null;
	$no = 1;

	while (list($id, $tname, $tdetails, $tsubject, $tpriority, $tdeadline, $tstatus) = $otask->getResult())
	{
		// For status = "Sudah".
		if($tstatus == "Sudah"){
			$data .= "<tr>
			<td>" . $no . "</td>
			<td>" . $tname . "</td>
			<td>" . $tdetails . "</td>
			<td>" . $tsubject . "</td>
			<td>" . $tpriority . "</td>
			<td>" . $tdeadline . "</td>
			<td>" . $tstatus . "</td>
			<td>
			<button name='delete' class='btn btn-danger'><a href='index.php?id_hapus=" . $id . "' style='color: white; font-weight: bold;'>Hapus</a></button>
			</td>
			</tr>";
			$no++;
		}
		// For status = "BELUM".
		else
		{
			$data .= "<tr>
			<td>" . $no . "</td>
			<td>" . $tname . "</td>
			<td>" . $tdetails . "</td>
			<td>" . $tsubject . "</td>
			<td>" . $tpriority . "</td>
			<td>" . $tdeadline . "</td>
			<td>" . $tstatus . "</td>
			<td>
			<button name='delete' class='btn btn-danger'><a href='index.php?id_hapus=" . $id . "' style='color: white; font-weight: bold;'>Hapus</a></button>
			<button name='done' class='btn btn-success' ><a href='index.php?id_status=" . $id .  "' style='color: white; font-weight: bold;'>Selesai</a></button>
			</td>
			</tr>";
			$no++;
		}
	}

	// Close the connection.
	$otask->close();

	// Read template from HTML, replace it, and write it to screen.
	$tpl = new Template("templates/skin.html");
	$tpl->replace("DATA_TABEL", $data);
	$tpl->write();

?>