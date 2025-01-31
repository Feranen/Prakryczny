<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zawody";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lowisko = $_POST['lowisko'];
    $data = $_POST['data'];
    $sedzia = $_POST['Sedzia'];

    if (!empty($lowisko) && !empty($data) && !empty($sedzia)) {
        $stmt = $conn->prepare("INSERT INTO zawody (lowisko, data, sedzia) VALUES (?, ?, ?)");
        $stmt->bind_param("iss", $lowisko, $data, $sedzia);

        if ($stmt->execute()) {
            echo "Zawody dodane pomyślnie.";
        } else {
            echo "Błąd: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Wszystkie pola są wymagane.";
    }
}

$conn->close();
?>