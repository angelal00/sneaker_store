<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sneakerstore_";

    $coon = new mysqli($servername, $username, $password, $database);

    if ($coon->connect_error) {
        die("Connection failed: ." $coon->connect_error);
    }

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $card_number = $_POST['card_number'];
    $expiry_month = $_POST['expiry_month'];
    $expiry_year = $_POST['expiry_year'];
    $cvv = $_POST['cvv'];

    // Insert data into data base
    $sql = "INSERT INTO payments (name, phone, address, card_number, expiry_month, expiry_year, cvv)
    VALUES ('$name', '$phone', '$address', '$card_number', '$expiry_month', '$expiry_year', '$cvv')";

    if ($coon->query($sql) === TRUE) {

        echo "<script>alert('checkout complete');</script>";

        echo "<script>window.setTimeout(function(){ window.location.href = 'index.html'; }, 1000);</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $coon->error;
    }
?>
