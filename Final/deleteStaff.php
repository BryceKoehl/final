<?php
/**
 * Author: Bryce Koehl
 *Date: 12/7/2019
 *File delete_staff.php
 * Description: this will allow only the admin to delete a staff member.
 */
$subtitle = '';
require_once 'includes/header.php';

//if there were problems retrieving staff id, the script must end.
if (!filter_has_var(INPUT_GET, 'pKey')) {
    echo "Deletion cannot continue since there were problems retrieving staff id";
    include('includes/footer.php');
    exit;
}

//retreive the variable ID and filter and sanitize it
$id = filter_input(INPUT_GET, 'pKey', FILTER_SANITIZE_NUMBER_INT);

//MySQL SELECT statement
$sql1 = "SELECT * FROM staff WHERE pKey=$id";

//execute the query
$query1 = @$conn->query($sql1);

//echo ($sql);

//Handle errors
if (!$query1) {
    $error = "Selection failed: " . $conn->error;
    $conn->close();
    header("Location: error.php?m=$error");
    die();
}

$row = $query1->fetch_assoc();
if (!$row) {
    $error = "Staff Member not found";
    $conn->close();
    header("Location: error.php?m=$error");
    die();
}
//display a confirmation message
echo "<div id='mainbody'> <p><br>You have successfully deleted ". $row['fullName']." from the database.</p></div>";

//define the MySQL DELETE statement that will delete the staff member from the 'staff' table in the database
$sql = "DELETE FROM staff WHERE pKey=$id";

//echo($sql);
//exit();

//execute the query
$query = $conn->query($sql);

//Handle selection errors
if (!$query) {
    $errno = $conn->errno;
    $errmsg = $conn->error;
    echo "Selection failed with: ($errno) $errmsg<br/>\n";
    $conn->close();
    exit;
}


//close database connection
$conn->close();


header("refresh:3;url=staff.php");
require_once 'includes/footer.php';