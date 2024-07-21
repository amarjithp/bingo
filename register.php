<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bingo_game";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'];
    $sql = "INSERT INTO users (username) VALUES ('$user')";
    if ($conn->query($sql) === TRUE) {
        echo "New user created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form action="register.php" method="POST">
    Username: <input type="text" name="username" required>
    <button type="submit">Register</button>
</form>
