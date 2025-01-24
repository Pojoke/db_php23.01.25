<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dz";
// Створення з'єднання 
$conn = new mysqli($servername, $username, $password, $dbname);
// Перевірка з'єднання  
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT id,nazva,prodaz,cena FROM Tovar WHERE prodaz>50 AND cena BETWEEN 30 AND 100";
$result = $conn->query($sql); 

if ($result->num_rows > 0) {
     // output data of each row
     while ($row = $result->fetch_assoc()) {
         echo "id: " . $row["id"] . " - nazva: " . $row["nazva"]. $row["prodaz"] . " " . $row["cena"] . " ";
     }
 } else {
     echo "0 results";
 } 
$conn->close();