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
    $gameId = $_POST['game_id'];
    $sql = "UPDATE games SET status='started' WHERE id=$gameId";
    if ($conn->query($sql) === TRUE) {
        echo "Game started successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form action="start_game.php" method="POST">
    Game ID: <input type="text" name="game_id" required>
    <button type="submit">Start Game</button>
</form>
