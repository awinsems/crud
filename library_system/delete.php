<?php
// DELETE: remove a book
include "db.php";

// get the book id from the link (delete.php?id=1)
$id = (int) $_GET['id'];

// delete that book from the table
mysqli_query($conn, "DELETE FROM books WHERE id=$id");

// go back to the list
header("Location: index.php");
exit;
?>


