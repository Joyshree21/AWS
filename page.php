<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $movie = $_POST['movie'] ?? '';
    $date = $_POST['date'] ?? '';
    $time = $_POST['time'] ?? '';
    $seats = $_POST['seats'] ?? '';

    if ($movie && $date && $time && $seats) {
        echo "<h1>Booking Confirmation</h1>";
        echo "<p><strong>Movie:</strong> $movie</p>";
        echo "<p><strong>Date:</strong> $date</p>";
        echo "<p><strong>Time:</strong> $time</p>";
        echo "<p><strong>Number of Seats:</strong> $seats</p>";
        echo "<p>Thank you for booking with us!</p>";
    } else {
        echo "<p style='color: red;'>All fields are required. Please go back and fill in the form.</p>";
    }
} else {
    echo "<p style='color: red;'>Invalid Request</p>";
}
?>