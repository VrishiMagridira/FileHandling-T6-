<?php


$file = "data.txt";
$data = file_get_contents($file);
$baris = explode("[R]", $data);


@$nama = $_POST['nama'];
@$nim = $_POST['nim'];
@$email = $_POST['email'];
@$phone = $_POST['nomor'];
@$status = $_POST['status'];
@$alamat = $_POST['alamat'];
@$line = $_POST['line'];

$dataUp= @$nama  . "|F|". 
		@$nim . "|F|".
        @$email . "|F|".
        @$phone . "|F|".
		@$status . "|F|".
		@$alamat . "|F|".
		@$line . "[R]";
$rowUP = $_POST['index'];
$databaru = $dataUp;

for($i = 0; $i<count($baris)-1; $i++) {
    if($i == $rowUP)continue;
	$databaru .= $baris[$i] . "[R]";
}

file_put_contents($file, $databaru);
header('location:baca.php');





?>