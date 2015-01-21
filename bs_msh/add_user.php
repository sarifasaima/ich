<?php
    include('connection.php');
    session_start();

    if($_SERVER['REQUEST_METHOD']=="GET"){
        header('location: registration.php');
    }
    /*if(empty($_POST['firstname']) && empty($_POST['lastname']) && empty($_POST['email']) && empty($_POST['username']) &&
        empty($_POST['password']) && empty($_POST['dobyear']) && empty($_POST['dobmonth']) && empty($_POST['dobday']) &&
        empty($_POST['gender']) && empty($_POST['hobby']) && empty($_POST['cities'])){*/
    /*if(!isset($_POST['firstname']) && !isset($_POST['lastname']) && !isset($_POST['email']) && !isset($_POST['username']) &&
        !isset($_POST['password']) && !isset($_POST['dobyear']) && !isset($_POST['dobmonth']) && !isset($_POST['dobday']) &&
        !isset($_POST['gender']) && !isset($_POST['hobby']) && !isset($_POST['cities'])) {*/
    /*if(($_POST['firstname']==' ') && ($_POST['lastname']==' ') && ($_POST['email']==' ') && ($_POST['username']==' ') &&
        ($_POST['password']==' ') && ($_POST['dobyear']==' ') && ($_POST['dobmonth']==' ') && ($_POST['dobday']==' ') &&
        ($_POST['gender']==' ') && ($_POST['hobby']==' ') && ($_POST['cities'])==' ') {
        $_SESSION['msg'] = "All Fields are Required";
        header('location: registration.php');
    }else{*/
        //if(isset($_POST['dobyear']) && isset($_POST['dobmonth'])&& isset($_POST['dobday']))
        $dob = $_POST['dobyear'] . "-" . $_POST['dobmonth'] . "-" . $_POST['dobday'];

        //if(isset($_POST['hobby']))
        $hobby = join(",", $_POST['hobby']);
        //if(isset($_POST['cities']))
        $cities = join(",", $_POST['cities']);


        $query = "INSERT INTO `website_db`.`users_db` (`id` ,`firstname` ,`lastname` ,`email` ,`username` ,`password`,`dob` ,`gender`,`hobby` ,`cities`,`created`)
            VALUES ('', '$_POST[firstname]', '$_POST[lastname]', '$_POST[email]','$_POST[username]' ,'$_POST[password]','$dob', '$_POST[gender]', '$hobby','$cities', NOW());";

        if (mysqli_query($con, $query)) {
            //echo "Successfully added 1 data into database";
            $_SESSION['msg']="Your Registration is successful & Welcome to the Dashboard";
            header('location: dashboard.php');
        }
        else
            die("Error: " . mysqli_error($con));

        mysqli_close($con);
    //}
