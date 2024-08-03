<?php
// Start session if not already started
session_start();

// Redirect to login page if user is not logged in
if (!isset($_SESSION['uid'])) {
    header('location: Admin Login .php');
    exit; // Stop further execution
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $mid = $_POST['mid'];
    $name = $_POST['mname'];
    $cat1 = $_POST['mcategory1'];
    $cat2 = $_POST['mcategory2'];
    $poster = $_FILES['fn']['name'];
    $rate = $_POST['rate'];
    $rdate = $_POST['rdate'];
    $duration = $_POST['dh'] . " hrs " . $_POST['dm'] . " mins";
    $lang = $_POST['lan'];

    // Establish database connection
    $con = mysqli_connect('localhost', 'root', '', 'movie nation');

    // Check connection
    if (mysqli_connect_errno()) {
        die("Failed to connect to MySQL: " . mysqli_connect_error());
    }

    // Prepare SQL statement
    $query = "INSERT INTO now_available (id, name, poster, rate, rdate, duration, language, category, category2) 
              VALUES ('$mid', '$name', '$poster', '$rate', '$rdate', '$duration', '$lang', '$cat1', '$cat2')";

    // Execute query
    if (mysqli_query($con, $query)) {
        // Move uploaded file
        $posterpath = "poster/" . $poster;
        if (move_uploaded_file($_FILES['fn']['tmp_name'], $posterpath)) {
            // Redirect to success page
            header('Location: Admin Add Movie Menu.php');
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
