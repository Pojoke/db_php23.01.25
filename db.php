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
$sql = "SELECT * FROM Tovar ORDER BY `Назва`";
$result = $conn->query($sql); 

// if ($result->num_rows > 0) {
//      // output data of each row
//      while ($row = $result->fetch_assoc()) {
//          echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . " ";
//      }
//  } else {
//      echo "0 results";
//  } 
$conn->close();