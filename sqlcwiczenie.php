<?php
    echo 'Przeslano dane z formularza: <br>';
    echo 'Imię: ' . $_POST['imie'] . '<br>';
    echo 'Data urodzenia: ' . $_POST['data_urodzenia'] . '<br>';
    echo 'Wzrost: ' . $_POST['wzrost'] . '<br>';

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password);
    if(!$conn){
        die("Połączenie nieudane: " . mysqli_connect_error());
    }
    echo 'Połączenie udane <br>';

    $database = "szkola_goetel";

    $sql = "CREATE DATABASE IF NOT EXISTS $database";

    if (mysqli_query($conn, $sql)){
        echo "Baza danych została utworzona pomyślnie <br>";
    } else {
        echo "Błąd podczas tworzenia bazy danych: " . mysqli_error($conn) . "<br>";
    }

    if (mysqli_select_db($conn, $database)){
        echo "Baza danych została wybrana pomyślnie <br>";
    } else {
        echo "Błąd podczas wybierania bazy danych: " . mysqli_error($conn) . "<br>";
    }

    $sql = "CREATE TABLE IF NOT EXISTS uczen (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        imie VARCHAR(30) NOT NULL,
        data_urodzenia DATE,
        wzrost INT(3)
    )";

    if (mysqli_query($conn, $sql)){
        echo "Tabela została utworzona pomyślnie <br>";
    } else {
        echo "Błąd podczas tworzenia tabeli: " . mysqli_error($conn) . "<br>";
    }

    $sql = "INSERT INTO uczen (imie, data_urodzenia, wzrost)
    Values ('" .$_POST['imie']."', '".$_POST['data_urodzenia']."', '" .$_POST['wzrost']."')";

    if (mysqli_query($conn, $sql)){
        echo "Rekord został dodany pomyślnie <br>";
    } else {
        echo "Błąd podczas dodawania rekordu: " . mysqli_error($conn) . "<br>";
    }

    $sql = "SELECT * FROM uczen";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "Rekordy w tabeli: <br>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "ID: " . $row["id"]. " - Imię: " . $row["imie"]. " - Data urodzenia: " . $row["data_urodzenia"]. " - Wzrost: " . $row["wzrost"]. "<br>";
        }
    } else {
        echo "Brak rekordów w tabeli <br>";
    }

    mysqli_close($conn);
?>