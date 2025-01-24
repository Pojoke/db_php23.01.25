<?php
require "program.php";

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





$sql = "INSERT INTO Tovar (nazva, cena, prodaz) 
 VALUES ('Хліб', '25 ', '200 ');";
$sql .= "INSERT INTO Tovar (nazva, cena, prodaz) 
 VALUES ('Молоко', '30 ', '150 ');";
$sql .= "INSERT INTO Tovar (nazva, cena, prodaz)  
 VALUES ('Яблуко', '10 ', '100 ');";
 $sql .= "INSERT INTO Tovar (nazva, cena, prodaz)  
 VALUES ('Банани', '15 ', '120 ');";
 $sql .= "INSERT INTO Tovar (nazva, cena, prodaz)  
 VALUES ('Кава', '150 ', '300 ');";




if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}






if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);
