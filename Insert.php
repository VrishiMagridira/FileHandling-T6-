<?php

$file = "data.txt";

@$nama = $_POST['nama'];
@$nim = $_POST['nim'];
@$email = $_POST['email'];
@$phone = $_POST['nomor'];
@$status = $_POST['status'];
@$alamat = $_POST['alamat'];
@$line = $_POST['line'];

$data = @$nama  . "|F|". 
		@$nim . "|F|".
        @$email . "|F|" .
        @$phone . "|F|".
		@$status . "|F|".
		@$alamat . "|F|".
		@$line . "[R]";
		

$handle = fopen($file, "a+");
fwrite($handle, $data);
fclose($handle);

echo "Data berhasil disimpan!";