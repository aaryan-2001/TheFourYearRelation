<?php
session_start();
if (isset($_POST['contact-submit'])) {


    //Variable Decleration

    $name = $_POST['name'];
    $phoneno = $_POST['phone'];
    $message = $_POST['message'];

    // Database connection here

    $conn = new mysqli('localhost', 'root', '', 'minor_project_db');
    if ($conn->connect_error) {
        die('Connection Failed - ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into contact(name, phone, message) values(?,?,?)");
        $stmt->bind_param("sis", $name, $phoneno, $message);
        $stmt->execute();
        echo "<script>alert('Thank you for contacting us, We will contact you shortly.......');window.location='../index1.php'</script>";
        $stmt->close();
        $conn->close();
    }
}
