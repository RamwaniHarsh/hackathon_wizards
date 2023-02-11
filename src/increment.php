<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "khelmahakumbh");

// Check if the connection is established
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Increment the ID
$last_id = 0;

// Get the last inserted ID
$query = "SELECT MAX(leader_id) as last_id FROM test";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $last_id = $row["last_id"];
}

$next_id = $last_id + 1;

// Insert the record with the incremented ID
$sql = "INSERT INTO test (leader_id) VALUES ($next_id)";

if (mysqli_query($conn, $sql)) {
    echo "Record inserted successfully";
} else {
    echo "Error inserting record: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);

?>