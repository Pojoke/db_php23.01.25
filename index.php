<?php
$servername = "127.0.0.1";
$username   = "root";
$password   = "";
$dbname     = "dz";
// Створення з'єднання
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Перевірка з'єднання
if (! $conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// запит SQL для створення таблиці
$sql = "CREATE TABLE Tovar (
id INT AUTO_INCREMENT PRIMARY KEY,
nazva VARCHAR(30) NOT NULL,
cena INT ,
prodaz INT
)";
if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);
