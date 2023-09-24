<?php
//Procedural
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername,$username,$password);

// Create a database named "busbooking"
$sql = "CREATE DATABASE IF NOT EXISTS busbooking";
mysqli_query($conn, $sql);

// Select the "busbooking" database
mysqli_select_db($conn, "busbooking");

// Create a table named "users"
$sql = "CREATE TABLE IF NOT EXISTS users (
        serialnumber INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        userid VARCHAR(10) NOT NULL,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        phoneNumber VARCHAR(12) NOT NULL
        
)";
mysqli_query($conn, $sql);

// Create a table named "bus table"
$sql = "CREATE TABLE IF NOT EXISTS bustable (
    busid INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    busnumber INT(10) NOT NULL,
    bustype VARCHAR(255) NOT NULL,
    total_seats INT(10) NOT NULL,
    available_seats INT(10) NOT NULL,
    source VARCHAR(255) NOT NULL,
    destination VARCHAR(255) NOT NULL
)";
mysqli_query($conn, $sql);

   // Insert data into the "bustable" table
// $sql = "INSERT INTO bustable (busnumber,bustype,total_seats,available_seats,source,destination,departure_time,pickup_point,drop_point) VALUES
// ('9537', 'AC Semi Sleeper', '100','22','Vijayawada','Banglore'),
// ('9111', 'NON-AC Semi Sleeper', '70','30','Vishakapatnam','Vizayanagaram'),
// ('9407', 'AC Sleeper', '80','50','Hyderabad','Mumbai'),
// ('9444', 'AC Semi Sleeper', '100','22','Vijayawada','Banglore'),
// ('9200', 'NON-AC Semi Sleeper', '70','30','Vishakapatnam','Vizayanagaram'),
// ('9231', 'AC Sleeper', '80','50','Hyderabad','Mumbai'),
// ('9876', 'AC Semi Sleeper', '100','22','Vijayawada','Banglore'),
// ('9000', 'NON-AC Semi Sleeper', '70','30','Vishakapatnam','Vizayanagaram'),
// ('9666', 'AC Sleeper', '80','50','Hyderabad','Mumbai'),
// ('8970', 'AC Semi Sleeper', '100','22','Vijayawada','Banglore'),
// ('8867', 'NON-AC Semi Sleeper', '70','30','Vishakapatnam','Vizayanagaram'),
// ('7676', 'AC Sleeper', '80','50','Hyderabad','Mumbai')
// ";


// mysqli_query($conn, $sql);

// $sql = "ALTER TABLE bustable ADD COLUMN date&time varar"





$sql = "CREATE TABLE IF NOT EXISTS bookingdata (
  serial_no INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  userid VARCHAR(255) NOT NULL,
  cardnumber VARCHAR(255) NOT NULL,
  mobilenumber INT(10) NOT NULL,
  source VARCHAR(255) NOT NULL,
  destination VARCHAR(255) NOT NULL,
  bustype VARCHAR(255) NOT NULL
  
)";
mysqli_query($conn, $sql);


if(!$conn){
  die("Connection failed : ".mysqli_connect_error());
}
else{
    echo ".";
}
?>