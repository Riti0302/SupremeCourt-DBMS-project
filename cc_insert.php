<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scdatabase";
$caset=$_POST["c_type"];
$ccateg=$_POST["category"];
$csbcateg=$_POST["sub_category"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `casec` (`ccode`, `category`, `scategory`) VALUES ('$caset', '$ccateg', '$csbcateg');";

if ($conn->query($sql) === TRUE) {
    echo "<script>
     alert('New Recoed Created Successfully');
     window.location.href='loggedincasecategory.html';
     </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>