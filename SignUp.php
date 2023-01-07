<?php
    
$showAlert = false; 
$showError = false; 
$exists=false;
    
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // Include file which makes the
    // Database Connection.
    include 'dbconnect.php';   
    
    $username = $_POST["username"]; 
    $password = $_POST["password"]; 
    $cpassword = $_POST["cpassword"];
            
    
    $sql = "Select * from users where username='$username'";
    
    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result); 
    
    // This sql query is use to check if
    // the username is already present 
    // or not in our Database
    if($num == 0) {
        if(($password == $cpassword) && $exists==false) {
    
            // Password Hashing is used here. 
            $sql = "INSERT INTO `users` ( `username`, 
                `password`) VALUES ('$username', 
                '$password')";
    
            $result = mysqli_query($conn, $sql);
    
            if ($result) {
                echo "<script> 
            alert('Success! Your account is now created and you can login.');
            window.location.href='StaffLogin.html';
            </script>"; 
            }
        } 
        else { 
            echo "<script> 
         alert('Passwords do not match');
         window.location.href='StaffSignUp.php';
         </script>";
        }      
    }// end if 
    
   if($num>0) 
   {
      echo "<script> 
         alert('Username not available');
         window.location.href='StaffSignUp.php';
         </script>"; 
   } 
    
}//end if  
    
//     if($showAlert) {
//         echo "<script> 
//          alert('Success! Your account is now created and you can login.');
//          window.location.href='StaffLogin.html';
//          </script>"; 
//     }
    
//     if($showError) {
    
//         echo ' <div class="alert alert-danger 
//             alert-dismissible fade show" role="alert"> 
//         <strong>Error!</strong> '. $showError.'
    
//        <button type="button" class="close" 
//             data-dismiss="alert aria-label="Close">
//             <span aria-hidden="true">×</span> 
//        </button> 
//      </div> ';
//    }
        
//     if($exists) {
//         echo ' <div class="alert alert-danger 
//             alert-dismissible fade show" role="alert">
    
//         <strong>Error!</strong> '. $exists.'
//         <button type="button" class="close" 
//             data-dismiss="alert" aria-label="Close"> 
//             <span aria-hidden="true">×</span> 
//         </button>
//        </div> '; 
//      }
   
?>