<?php
    include('connection.php');

    session_start();

    if($_SERVER['REQUEST_METHOD']=="GET"){
        header('location: login.php');
    }

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username!='' && $password!='') {
            $query = "SELECT * FROM users_db WHERE `username`='$username' AND `password`='$password'";
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_array($result);

            if($row){
                /*$_SESSION['id'] = $row['id'];
                $_SESSION['full_name'] = $row['full_name'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['created'] = $row['created'];*/
                $_SESSION['msg']="Welcome to the Dashboard";
                header('location: dashboard.php');
            }else {
                $_SESSION['msg'] = 'Incorrect username or password!!!';
                header('location: login.php');
                //header('location: login.php?msg=Incorrect username or password!!!');
            }
        } else{
            $_SESSION['msg']="Username and password is Required";
            header('location: login.php');
        }
    }