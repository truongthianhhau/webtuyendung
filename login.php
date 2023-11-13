<?php require_once './connect.php';
    if(isset($_POST['login'])){
        $email = $_POST['login_mail'];
        $password = $_POST['login_pass'];

        $query = "SELECT email, password FROM users WHERE email = '$email' AND password = '$password'";
        $run = $conn->query($query);
        $count = $run->num_rows;

        if($count < 1)
            echo '<script> alert("Email hoặc mật khẩu không đúng") </script>';
        else{
            $get_profile = $conn->query("SELECT * FROM profile WHERE Email = '$email'");
            $row = $get_profile->fetch_assoc();


            $_SESSION['email']  = $email;
            $_SESSION['profile']  = $row;

            // session_start();
            echo '<script> alert("Đăng nhập thành công") </script>';
            echo '<script> window.location="../index.php" </script>';

            // echo $_SESSION['email'];    
            // echo $_SESSION['profile']['Fullname'];
            // echo $_SESSION['profile']['Tell'];

        }
    }
?>
