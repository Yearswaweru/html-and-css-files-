<?php
    // Connect to database
    $conn = mysqli_connect("localhost:3307","root","","obituary_platform");

    
    if(!$conn){
        die("connection failed:". mysqli_connect_error());
    }

    $name = $_POST['name'];
    $date_of_birth = $_POST['date_of_birth'];
    $date_of_death = $_POST['date_of_death'];
    $content = $_POST['content'];
    $author = $_POST['author'];
    
    
    $sql = "INSERT INTO obituaries (name, date_of_birth, date_of_death, content, author) VALUES ('$name', '$date_of_birth', '$date_of_death', '$content', '$author')";
    if (mysqli_query($conn, $sql)) {
        echo "Obituary submitted successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
