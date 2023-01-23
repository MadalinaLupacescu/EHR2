<?php

include "connect.php";


// Execute the query
$sql = "SELECT Name, Emailp, Address, Phone FROM patients";
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    // Output the data as rows in the table
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td><span class='custom-checkbox'><input type='checkbox' id='checkbox'><label for='checkbox'></label></span></td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "<td>" . $row["phone"] . "</td>";
        echo "<td><a href='#editpatient' class='edit' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Edit'>&#xE254;</i></a>
        <a href='#deletepatient' class='delete' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Delete'>&#xE872;</i></a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>0 results</td></tr>";
}
$conn->close();
?>

