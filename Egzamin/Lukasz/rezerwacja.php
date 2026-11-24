<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baza2";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Nieudane połączenie".mysqli_connect_error());
}

$data = $_POST["data"];
$liczba = $_POST["liczba"];
$telefon = $_POST["telefon"];

$sql = "Insert into rezerwacje(data_rez,liczba_osob,telefon)
values($data,$liczba,$telefon)";

if(mysqli_query($conn,$sql)){
    echo "Dodano rezerwacje do bazy";
}else{
    echo "error: ". mysqli_error($conn);
}
mysqli_close( $conn );
?>