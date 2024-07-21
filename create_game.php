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
    $gameName = $_POST['game_name'];
    $sql = "INSERT INTO games (game_name) VALUES ('$gameName')";
    if ($conn->query($sql) === TRUE) {
        echo "New game created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form action="create_game.php" method="POST">
    Game Name: <input type="text" name="game_name" required>
    <button type="submit">Create Game</button>
</form>
