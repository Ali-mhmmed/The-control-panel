<?php
$command = $_POST["direction"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "result";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
    $direction = $_POST["direction"];
    $sql = "INSERT INTO commands (command, timestamp) VALUES ('$command', NOW())";
    $conn->query($sql);
    
    echo "تم تحديث الاتجاه إلى: " . $direction;
}

$conn->close();
?>

