<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scdatabase";
$cn=$_POST["cno"];
$dn=$_POST["dno"];
$ctype=$_POST["ctype"];
$pname=$_POST["pname"];
$rname=$_POST["rname"];
$rAd=$_POST["rAd"];
$pAd=$_POST["pAd"];
$judges=$_POST["judges"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO triggerjudgement (cno, diaryno, ctype,pname,rname,radvocates,padvocates,judges)
VALUES ('$cn','$dn','$ctype','$pname','$rname','$rAd','$pAd','$judges')";

if ($conn->query($sql) === TRUE) {
    echo "<script>
     alert('New Recoed Created Successfully');
     window.location.href='loggedindo.php';
     </script>";
} else {
    echo "<script>
    alert('Case already Exhist');
    window.location.href='loggedindo.php';
    </script>";
}


$conn->close();
?>