Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "goetel2";
$conn = new mysqli($servername, $username, $password, $database);
if (!$conn){
    die("Połączenie nieudane: " . mysqli_connect_error());
}
echo "Połączenie udane";

$name = $_POST["name"];
$email = $_POST["email"];

$sql = "INSERT INTO users (username, email) VALUES ('$name', '$email')";
if (mysqli_query($conn, $sql)){
    echo "Rekord został dodany pomyślnie";
} else {
    echo "Błąd podczas dodawania rekordu: " . mysqli_error($conn);
}
?>