<?php
$servername = "db";
$username = "root";
$password = "root";
$db = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if (!$conn)
    die("Connection failed: " . mysqli_connect_error());

echo "Connected successfully";

//create table
$createTable = "CREATE TABLE employee(id INT(3) PRIMARY KEY,firstname VARCHAR(20) NOT NULL,lastname VARCHAR(20) NOT NULL,email VARCHAR(50))";
// if (mysqli_query($conn, $createTable)) {
//     echo "Table MyGuests created successfully";
// } else {
//     echo "Error creating table: " . mysqli_error($conn);
// }

//enter values
$enterValues = "INSERT INTO employee VALUES(22,'Enter','Name','enter.name@gmail.com')";

// if (mysqli_query($conn, $enterValues)) {
//     echo "<br/>Values entered";
// } else {
//     echo "Error entering values: " . mysqli_error($conn);
// }

//select query
$databaseQuery = "SELECT * FROM employee WHERE firstname='Rahul'";
$result = mysqli_query($conn, $databaseQuery);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<br/>" . $row['id'] . $row['email'] . $row['firstname'] . "<br/>";
    }
}
