<?php require_once './Model/db-connect.php';

if(isset($_POST['register'])){
  $email = $_POST['fname'];
  $password = $_POST['pass'];
  $re_password = $_POST['repass'];

  if($password == $re_password){
    $query = "SELECT * FROM users WHERE users.email = '$email'";

    $run = $conn->query($query);
    $count = $run->num_rows;
  
    if($count == 1)
      echo 'Email đã được đăng kí';
    else{
      $add = "INSERT INTO users (email, password, role) VALUES('$email', '$password', '1')";
  
      $conn->query($add);
      
      echo '<script> alert("Đăng kí thành công") </script>';
      echo '<script> window.location="./login.html" </script>';
    }
  }

  else {
      echo '<script> alert("Yêu cầu Password và Re-type giống nhau") </script>';
      echo '<script> window.location="./login.html" </script>';
  }
 
}

?>