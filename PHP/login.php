<?php
$login = $_POST["name"];
$password = sha1($_POST["haslo"]);
$sql = "SELECT login, password FROM MyGuests WHERE login = '$login'";
if ($result = mysqli_query($conn, $sql)){
    $row = mysqli_fetch_assoc($result);
    if ( $password == $row['password']){
        echo "Zalogowano pomyślnie";
    } else {
        echo "Nieprawidłowe hasło";
}
}
?>