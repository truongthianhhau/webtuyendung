<?php require_once './Model/db-connect.php';
session_start();
    if(isset($_POST['login'])){
        $email = $_POST['login_mail'];
        $password = $_POST['login_pass'];

        $query = "SELECT id,email, password, role FROM users WHERE email = '$email' AND password = '$password'";
        $run = $conn->query($query);
        $count = $run->num_rows;

        if($count < 1)
            echo '<script> alert("Email hoặc mật khẩu không đúng") </script>';
        else{
            while ($row = $run->fetch_assoc()) {
                $_SESSION['role'] = $row['role'];
                $_SESSION['id'] = $row['id'];
            }

            $get_profile = $conn->query("SELECT * FROM profile WHERE Email = '$email'");

            while ($row = $get_profile->fetch_assoc()) {
                $_SESSION['fullname']  = $row["Fullname"];
            }

            $_SESSION['email']  = $email;

            echo '<script> alert("Đăng nhập thành công") </script>';
            echo '<script> window.location="./index.php" </script>';

        }
        echo '<script> window.location="./login.html" </script>';
    }
?>

