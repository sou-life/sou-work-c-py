<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>view</title>
  <link rel="stylesheet" href="view.css">
</head>
<body>
<div class="container">
<?php
require('server.php');
$sql = "SELECT * FROM tamil";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<div class='helo'>";
echo "<div class='col'><img src='" . $row["image_path"] . "'></div>";
echo "<div class='co'>" . $row["title"] . "</div>";
echo "<div class='coo'>" . $row["singer"] . "</div>";
echo "<div class='col'><audio controls><source src='" . $row["music_path"] . "' type='audio/mpeg'></audio></div>";
echo "</div>";
}
} else {
echo "No music files found.";
}

$conn->close();
?>

</div>
</body>
</html>