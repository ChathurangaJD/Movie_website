<?php
// Start session if not already started
session_start();


if (!isset($_SESSION['uid'])) {
    header('location: Admin Login.php');
    exit; // Stop further execution
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $vid = $_POST['vid'];
    $poster = $_FILES['pfn']['name'];
    $video = $_FILES['vfn']['name'];

    // Establish database connection
    $con = mysqli_connect('localhost', 'root', '', 'movie nation');

  
    if (mysqli_connect_errno()) {
        die("Failed to connect to MySQL: " . mysqli_connect_error());
    }

    // Prepare SQL statement
    $query = "INSERT INTO video (id, poster,video) 
              VALUES ('$vid', '$poster','$video' )";

    // Execute query
    if (mysqli_query($con, $query)) {
        // Move uploaded file
        $posterpath = "poster/" . $poster;
        $videopath = "videos/" . $video;
        if (move_uploaded_file($_FILES['pfn']['tmp_name'], $posterpath) && move_uploaded_file ($_FILES['vfn']['tmp_name'], $videopath)) {
            // Redirect to success page
            header('Location: Admin Add Trailer Menu.php');
            exit; // Stop further execution
        } else {
            echo "Failed to move uploaded file.";
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }

    // Close connection
    mysqli_close($con);
}
?>
