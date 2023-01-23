<?php
    
    include 'connect.php';

    
    $name = $_POST['Name'];
    $emailp = $_POST['Emailp'];
    $addressp = $_POST['Address'];
    $insurance = $_POST['Insurance'];
    $phonep = $_POST['Phonep'];
    $gender = $_POST['Gender'];
    
   
    // Create the insert query
    $sql = "INSERT INTO patients (Name, Emailp, Address, Insurance, Phonep, Gender) 
    Values('$name','$emailp', '$addressp', '$insurance', $phonep, '$gender')";

    // Close the connection
    $conn->query($sql);
    $conn->commit();

    if ($conn->query($sql) === TRUE) {
        header('Location: dashboard.html');
        exit;
    }

    ini_set('display_errors', 1)


?>