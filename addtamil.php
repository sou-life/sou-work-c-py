<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Page</title>
  <link rel="stylesheet" href="addtamil.css">
</head>
<body>
  <h1>Upload Tamil Music</h1>
  <div>
      <a href="user.php">back</a>
    </div>
  <form method="post" enctype="multipart/form-data">
    <label>Title:</label>
    <input type="text" name="title"><br>
    <label>Singer:</label>
    <input type="text" name="singer"><br>
    <label>Image:</label>
    <input type="file" name="image"><br>
    <label>Music:</label>
    <input type="file" name="music"><br>
    <button type="submit">Upload</button>

<?php
error_reporting(0);
require('server.php');
$title = $_POST['title'];
$singer = $_POST['singer'];
$image_name = $_FILES['image']['name'];
$image_temp = $_FILES['image']['tmp_name'];
$image_path = "images/" . $image_name;
move_uploaded_file($image_temp, $image_path);
$music_name = $_FILES['music']['name'];
$music_temp = $_FILES['music']['tmp_name'];
$music_path = "music/" . $music_name;
move_uploaded_file($music_temp, $music_path);

$sql = "INSERT INTO tamil (title, singer, image_path, music_path) VALUES ('$title', '$singer', '$image_path', '$music_path')";

if ($conn->query($sql) === TRUE) {
  echo "Music uploaded successfully.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</form>
</body>
</html>
