<style>
    table{
        background-color: white;
        color: black;
        width: 100px;
        height: 100px;
        padding: 10px;
    }
    th{
        background-color: yellow;
        color: blue;
        padding: 10px;
    }
    tr{
        padding: 10px;
    }
    td{
        padding: 10px;

    }
</style>

<?php

include('Database.php');
// Check if the "SEARCH" button is clicked
if (isset($_POST['search'])) {
// Get the firstname input from the user
$source = $_POST['source'];
$destination = $_POST['destination'];
// Retrieve data from the "Employee" table based on the firstname inputS
$sql = "SELECT * FROM bustable WHERE source='$source' AND destination = '$destination'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// Display the data in a table format


echo   "<table border='5px solid blue' width=50px height=50px >
<tr>
<th>Bus ID</th>
<th>SOURCE</th>
<th>DESTINATION</th>
<th>TOTAL SEATS</th>
<th>AVAILABLE SEATS</th>
<th>BUS NUMBER</th>
<th> BUS TYPE </th>
</tr>";
while ($row = mysqli_fetch_assoc($result)) {
echo "<tr>
<td>".$row['busid']."</td>
<td>".$row['source']."</td>
<td>".$row['destination']."</td>
<td>".$row['total_seats']."</td>
<td>".$row['available_seats']."</td>
<td>".$row['busnumber']."</td>
<td>".$row['bustype']."</td>
</tr>";
}
echo "</table>";
header("Location:busbook_data.php");
exit;
} else {
echo " ";
}
}
mysqli_close($conn);
?>