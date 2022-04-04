<?php

class Template
{
	// File handling variable.
	var $filename = '';
	var $content = '';

	// Constructor.
	function Template($filename = '')
	{
		// Read / implode file for screen.
		$this->filename = $filename;
		$this->content = implode('', @file($filename));
	}

	// Clear code that should be changed (IDK, I can't understand this part).
	function clear()
	{
		// membersihkan isi kode yang seharusnya diganti
		// mengganti tulisan Data_... dengan kosong jika ada yang lupa untuk diganti
		// jika tidak ingin menggunakan kode DATA_... dapat diganti di bagian pola ekspresi reguler
		$this->content = preg_replace("/DATA_[A-Z|_|0-9]+/", "", $this->content);

	}

	// Write file content.
	function write()
	{
		// Clear data and print file content to screen.
		$this->clear();
		print $this->content;

	}

	// Get file content.
	function getContent()
	{
		// Clear data and get file content.
		$this->clear();
		return $this->content;
	}

	// Replace string (just don't touch it as long as it works).
	function replace($old = '', $new = '')
	{
		// mengganti kode dalam file (DATA_...)
		// pemrosesan nilai yang akan menggantikan
		if(is_int($new)){
			// jika penggantinya bilangan bulat (diubah ke formatnya ke teks)
			$value = sprintf("%d", $new);

		}elseif(is_float($new)){
			// jika penggantinya bilangan real *diubah formatnya ke teks
			$value = sprintf("%f", $new);
		}elseif(is_array($new)){
			// jika penggantinya bilangan array/tabel *diubah formatnya ke teks
			$value = '';
			// pemrosesan setiap elemen array/tabel
			foreach( $new as $item){
				$value .= $item. '';
			}

		}else{
			// jika selain tipe yang ada diatas maka langsung diisikan untuk menggantikan
			$value = $new;
		}

		// menggantikan suatu teks dengan teks baru (misal DATA_... diganti dengan <table> </table>)
		$this->content = preg_replace("/$old/",  $value, $this->content);

	}
}

 ?>