    <?php
// CREATE: add a new book
include "crud_db.php";

// runs only when the Save button is clicked
if (isset($_POST['save'])) {

    // get the values typed in the form
    $title  = $_POST['title'];
    $author = $_POST['author'];
    $year   = $_POST['year'];
    $status = $_POST['status'];

    // insert them into the table
    mysqli_query($conn, "INSERT INTO books (title, author, year, status)
                         VALUES ('$title', '$author', '$year', '$status')");

    // go back to the list
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
</head>
<body>
    <h1>Add Book</h1>

    <!-- the form sends the data to this same page -->
    <form method="POST">
        Title: <br>
        <input type="text" name="title" required><br><br>

        Author: <br>
        <input type="text" name="author" required><br><br>

        Year: <br>
        <input type="number" name="year" required><br><br>

        Status: <br>
        <select name="status">
            <option value="Available">Available</option>
            <option value="Borrowed">Borrowed</option>
        </select><br><br>

        <button type="submit" name="save">Save</button>
        <a href="index.php">Cancel</a>
    </form>
</body>

<head>
    <title>Add Book</title>
</head>
<body>
    <h1>Add Book</h1>

    <!-- the form sends the data to this same page -->
    <form method="POST">
        Title: <br>
        <input type="text" name="title" required><br><br>

        Author: <br>
        <input type="text" name="author" required><br><br>

        Year: <br>
        <input type="number" name="year" required><br><br>

        Status: <br>
        <select name="status">
            <option value="Available">Available</option>
            <option value="Borrowed">Borrowed</option>
        </select><br><br>

        <button type="submit" name="save">Save</button>
        <a href="index.php">Cancel</a>
    </form>
</body>


</html>
