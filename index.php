<?php

$host = "localhost";
$user = "root";
$password = "Mamba@100";
$dbname = "Pdopost";

// Set DSN (Data Source Name)
$dsn = "mysql:host=" . $host . ";dbname=" . $dbname;


// Create a new PDO instance
$pdo = new PDO($dsn, $user, $password);

// Set the default fetch mode to PDO::FETCH_OBJ
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

// PDO query: Select all columns from the "Post" table
//     $stmt = $pdo->query("SELECT * FROM Post");

// Loop through the result set
//     while ($row = $stmt->fetch()) {
//         echo $row->title . "<br>";
//     }
// } catch (PDOException $e) {
//     // Handle any exceptions (e.g., database connection error)
//     echo "Error: " . $e->getMessage();
// }

$author = "Brad";
$is_published = true;


$sql = "SELECT * FROM Post WHERE author= ;author && is _published = :is_published";
$stml = $pdo->prepare($sql);
$stml->execute(["author" => $author, "is_published" => $is_published]);
$posts = $stmt->fetchAll();

var_dump($posts);

if ($posts) {
    foreach ($posts as $post) {
        echo $post->title . "<br>";
    }
} else {
    echo "No post found";
}
