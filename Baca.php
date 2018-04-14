<!DOCTYPE html>
<html>
<head>
 <title>Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, tr,th {
    border: 3px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
body {
	background-image: url(https://buonline.beasiswaunggulan.kemdikbud.go.id/assets/img/pattern_1.png);
background-repeat: repeat;
background-attachment: scroll;
background-clip: border-box;
background-origin: padding-box;
background-position-x: 100%;
background-position-y: 100%;
background-size: auto auto;
}
table {
border : 1px;
margin:0 auto;
width:90%
}

.container {
	background-color : white;
	background-repeat: repeat;
background-attachment: scroll;
background-clip: border-box;
background-origin: padding-box;
background-position-x: 100%;
background-position-y: 100%;
background-size: auto auto;
height:900px

	
}
.title{
	background-color:#DDD6FF;
	background-position: 100%;
background-position-y: 100%;
background-size: auto auto;

}

</style>
</head>
<body>

<div class = "container">
<br>
<div class = "title"><center><h2><br>REKAP DATA </h2></center><br></div><br>

<?php

$file = "data.txt";
$data = file_get_contents($file);

$baris = explode("[R]", $data);



echo "<table border=1>";
echo "<tr>";
echo "  <th><h4>Nama</h4></th><th><h4>NIM</h4></th>";
echo "  <th><h4>Email</h4></th><th><h4>Phone</h4></th>";
echo "  <th><h4>Status</h4></th>";
echo "  <th><h4>Kota Asal</h4></th><th><h4>Id_Line</h4></th>";
echo "<th><h4>Delete</h4></th><th><h4>Update</h4></th>";
echo "</tr>";


for($i =0; $i<count($baris)-1; $i++) {
    //echo $b . "<br>";

    $col = explode("|F|", $baris[$i]);

    echo "<tr>";
    echo "  <td>" . $col[0] . "</td>";
    echo "  <td>" . $col[1] . "</td>";
    echo "  <td>" . $col[2] . "</td>";
	echo "  <td>" . $col[3] . "</td>";
    echo "  <td>" . $col[4] . "</td>";
	echo "  <td>" . $col[5] . "</td>";
	echo "  <td>" . $col[6] . "</td>";
 
    echo '  <td> <a href="Delete.php?row='.$i.'">DELETE</a> </td>'; 
	  echo '  <td> <a href="Update.php?rowUp='.$i.'">UPDATE</a> </td>'; 
    echo "</tr>";
}
echo "</table>";
echo "</center>";
?>


</div>
</body>
</html>

