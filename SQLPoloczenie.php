Połączenie z bazą danych MySQL
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Tworzenie połączenia
    $conn = new mysqli($servername, $username, $password);

    // Sprawdzenie połączenia
    if (!$conn) {
        die("Połączenie nieudane: " . mysqli_connect_error());
    }
    echo "Połączenie udane";

    $database = "goetel2";
    //Tworzenie bazy danych
    $sql = "CREATE DATABASE $database";
    /*if (mysqli_query($conn, $sql)){
        echo "Databasa została utworzona pomyślnie";
    } else {
        echo "Błąd podczas tworzenia bazy danych: " . mysqli_error($conn);
    }
    */

    if (mysqli_select_db($conn, $database)){
        echo "Baza danych została wybrana pomyślnie";
    } else {
        echo "Błąd podczas wybierania bazy danych: " . mysqli_error($conn);
    }

    $sql1 = "CREATE TABLE users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

/*    
if (mysqli_query($conn, $sql1)){
        echo "Tabela została utworzona pomyślnie";
    } else {
        echo "Błąd podczas tworzenia tabeli: " . mysqli_error($conn);
    }
*/
/*
    $sql = "INSERT INTO users (username, email) VALUES ('Kocur', 'Kocur@example.com')";
    if (mysqli_query($conn, $sql)){
        echo "Rekord został dodany pomyślnie";
    } else {
        echo "Błąd podczas dodawania rekordu: " . mysqli_error($conn);
    }
*/
    // Pobieranie danych z tabeli
    $sql = "SELECT id, username, email FROM users";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo "id: " . $row["id"]. " - Nazwa użytkownika: " . $row["username"]. " - Email: " . $row["email"]. "<br>";
        }
    } else {
        echo "Brak wyników";
    }

    // Pobieranie danych z bazy danych przy użyciu mysqli_fetch_row()
    $sql = "SELECT id, username, email FROM users";
    $result = mysqli_query($conn, $sql);

    //Generowanie listy z wynikami zapytania
    if (mysqli_num_rows($result) > 0){
        echo "<ul>";
        while ($row = mysqli_fetch_row($result)){
            echo "<li> " . $row[0]. " " . $row[1]. " " . $row[2]."</li>". "<br>";
        }
        echo "</ul>";
    } else {
        echo "Brak wyników";
    }

    //Generowanie tabeli 

    $sql = "SELECT id, username, email FROM users";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0){
        echo "<table>";
        while ($row = mysqli_fetch_row($result)){
            echo "<tr><td>" . $row[0]. "</td><td>" . $row[1]. "</td><td>" . $row[2]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Brak wyników";
    }

    //Kasowanie danych z tabeli
    $sql = "DELETE FROM users WHERE id=1";
    if (mysqli_query($conn, $sql)){
        echo "Rekord został usunięty pomyślnie";
    } else {
        echo "Błąd podczas usuwania rekordu: " . mysqli_error($conn);
    }

    //Aktualizacja danych w tabeli
    $sql = "UPDATE users SET username='NowyUzytkownik' WHERE id=2";
    if (mysqli_query($conn, $sql)){
        echo "Rekord został zaktualizowany pomyślnie";
    } else {
        echo "Błąd podczas aktualizacji rekordu: " . mysqli_error($conn);
    }

    //Limity
/* $sql = "SELECT * FROM users LIMIT 2";
    $sql = "SELECT * FROM users LIMIT 2 OFFSET 4";
*/
    $sql = "SELECT * FROM users LIMIT 2";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0){
        echo "<table>";
        while ($row = mysqli_fetch_row($result)){
            echo "<tr><td>" . $row[0]. "</td><td>" . $row[1]. "</td><td>" . $row[2]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Brak wyników";
    }
?>