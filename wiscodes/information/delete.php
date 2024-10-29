<?php 
include "db.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Update the table name from 'contacts' to 'users'
    $sql = "DELETE FROM users WHERE id=$id"; // Updated to 'users'
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php?message=User+successfully+deleted");
        exit();
    } else {
        header("Location: index.php?error=Error+deleting+record");
        exit();
    }
} else {
    header("Location: index.php?error=Invalid+ID");
    exit();
}
?>
