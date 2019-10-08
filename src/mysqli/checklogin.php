<?php
$username = $_POST['username'];
$password = $_POST['password'];
$conn = new mysqli("db", "root", "root", "test");
$query = "SELECT * from employee WHERE firstname='$username'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row["lastname"] == $password)
            echo $row["id"] . " " . $row["email"];
    }
} else {
    echo "No User Found";
}
?>