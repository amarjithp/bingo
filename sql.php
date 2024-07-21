<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bingo_game";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "USE bingo_game;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL
);

CREATE TABLE games (
    id INT AUTO_INCREMENT PRIMARY KEY,
    game_name VARCHAR(50) NOT NULL,
    status ENUM('waiting', 'started', 'finished') DEFAULT 'waiting'
);

CREATE TABLE game_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    game_id INT,
    user_id INT,
    card BLOB,
    FOREIGN KEY (game_id) REFERENCES games(id),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE game_calls (
    id INT AUTO_INCREMENT PRIMARY KEY,
    game_id INT,
    number_called INT,
    FOREIGN KEY (game_id) REFERENCES games(id)
);"


?>