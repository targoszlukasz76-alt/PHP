<?php
$login = $_POST['name'];
$password = sha1($_POST['haslo']);

$sql = "INSERT INTO MyGuests (username, password) VALUES ('$login', '$password')";
echo $sql;
if (mysqli_query($conn, $sql)){
    echo "Dodano nowego użytkownika pomyślnie";
} else {
    echo "Błąd podczas dodawania uzytkownika: " . mysqli_error($conn);
}