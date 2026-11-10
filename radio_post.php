<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $fav_language = $_POST['fav_language'];

    echo "First name: " . $firstname . "<br>";
    echo "Last name: " . $lastname . "<br>";
    echo "Favorite web language: " . $fav_language . "<br>";

    $sql = "INSERT INTO users (firstname, lastname, fav_language) 
                    VALUES ('$firstname', '$lastname', '$fav_language')";
    
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>