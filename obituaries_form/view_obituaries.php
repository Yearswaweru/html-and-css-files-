<?php

$conn = mysqli_connect("localhost:3307", "root", "", "obituary_platform");

if (!$conn) {
  die("Connection failed: ". mysqli_connect_error());
}

$sql = "SELECT * FROM obituaries";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  
  echo "<table>";
  echo "<tr>
            <th>Name</th>
            <th>Date of Birth</th>
            <th>Date of Death</th>
            <th>Content</th>
            <th>Author</th>
        </tr>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>". $row["name"]. "</td>";
    echo "<td>". $row["date_of_birth"]. "</td>";
    echo "<td>". $row["date_of_death"]. "</td>";
    echo "<td>". $row["content"]. "</td>";
    echo "<td>". $row["author"]. "</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "No obituaries found";
}

mysqli_close($conn);
?>