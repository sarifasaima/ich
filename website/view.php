<?php
    include('connection.php');
    $id = $_GET['id'];

    $query = "SELECT * FROM `website_db`.`users_db` WHERE `users_db`.`id` = $id";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-9">
    <title>View</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>
<body>
<header class="container">

</header>

<section class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <hr class="colorgraph"/>
            <div class="panel panel-success">
                <div class="panel-heading text-center"><strong>User Details Information</strong></div>
                <!--<div class="panel-body">Hello</div>-->
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <tbody>
                        <tr class="active">
                            <td class="col-md-3"><strong>ID</strong></td>
                            <td class="col-md-9"><?php echo $row['id'] ?></td>
                        </tr>
                        <tr class="success">
                            <td class="col-md-3"><strong>First Name</strong></td>
                            <td class="col-md-9"><?php echo $row['firstname'] ?></td>
                        </tr>
                        <tr class="info">
                            <td class="col-md-3"><strong>Last Name</strong></td>
                            <td class="col-md-9"><?php echo $row['lastname'] ?></td>
                        </tr>
                        <tr class="warning">
                            <td class="warning col-md-3"><strong>Email</strong></td>
                            <td class="warning col-md-9"><?php echo $row['email'] ?></td>
                        </tr>
                        <tr class="danger">
                            <td class="col-md-3"><strong>Username</strong></td>
                            <td class="col-md-9"><?php echo $row['username'] ?></td>
                        </tr>
                        <tr class="active">
                            <td class="col-md-3"><strong>Password</strong></td>
                            <td class="col-md-9"><?php echo $row['password'] ?></td>
                        </tr>
                        <tr class="success">
                            <td class="col-md-3"><strong>Date of Birth</strong></td>
                            <td class="col-md-9"><?php echo $row['dob'] ?></td>
                        </tr>
                        <tr class="info">
                            <td class="col-md-3"><strong>Gender</strong></td>
                            <td class="col-md-9"><?php echo $row['gender'] ?></td>
                        </tr>
                        <tr class="warning">
                            <td class="col-md-3"><strong>Hobby</strong></td>
                            <td class="col-md-9"><?php echo $row['hobby'] ?></td>
                        </tr>
                        <tr class="danger">
                            <td class="col-md-3"><strong>Location</strong></td>
                            <td class="col-md-9"><?php echo $row['cities'] ?></td>
                        </tr>
                        <tr class="active">
                            <td class="col-md-3"><strong>Created</strong></td>
                            <td class="col-md-9"><?php echo $row['created'] ?></td>
                        </tr>
                        <tr class="info">
                            <td class="col-md-3"><strong>Modified</strong></td>
                            <td class="col-md-9"><?php echo $row['modified'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-center">
                <a class="btn btn-success" href="dashboard.php"><strong>Back</strong></a>
            </div>
        </div>
    </div>
</section>

<footer class="container">

</footer>
</body>
</html>    