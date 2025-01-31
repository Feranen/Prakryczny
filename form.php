<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $lowisko = htmlspecialchars($_POST['lowisko']);
    $data = htmlspecialchars($_POST['data']);
    $sedzia = htmlspecialchars($_POST['sedzia']);

    // Display the submitted data
    echo "<h2>Dodane zawody wędkarskie:</h2>";
    echo "<p><strong>Łowisko:</strong> " . $lowisko . "</p>";
    echo "<p><strong>Data:</strong> " . $data . "</p>";
    echo "<p><strong>Sędzia:</strong> " . $sedzia . "</p>";
} else {
    echo "<p>Formularz nie został poprawnie przesłany.</p>";
}
?>
