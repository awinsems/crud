<?php
// READ: show all books
include "crud_db.php";

// get all books from the table
$result = mysqli_query($conn, "SELECT * FROM books");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Library System</title>
</head>
<body>
    <h1>Library System</h1>

    <!-- link to the add page -->
    <a href="create.php">+ Add Book</a>
    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Year</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <?php
        // go through each book and show it as a table row
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['author']; ?></td>
            <td><?php echo $row['year']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td>
                <!-- edit and delete send the book's id in the link -->
                <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']; ?>"
                   onclick="return confirm('Delete this book?');">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>

<head>
    <title>Library System</title>
</head>
<body>
    <h1>Employee system</h1>

    <!-- link to the add page -->
    <a href="create.php">+ Add Book</a>
    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Year</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <?php
        // go through each book and show it as a table row
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['author']; ?></td>
            <td><?php echo $row['year']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td>
                <!-- edit and delete send the book's id in the link -->
                <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']; ?>"
                   onclick="return confirm('Delete this book?');">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>



</html>
