<?php
    include('connection.php');
    session_start();

    /*if($_SERVER['REQUEST_METHOD']=='GET'){
        header('location: login.php');
    }*/

    if(isset($_POST['update'])){
        $update_id=$_GET['id'];
        $dob=$_POST['dobyear'].'-'.$_POST['dobmonth'].'-'.$_POST['dobday'];

        if(isset($_POST['hobby']) && !empty($_POST['hobby'])){
            //$hob=join(',',$_POST['hobby']);
            $hob=implode(',',$_POST['hobby']);
        }
        if(isset($_POST['cities']) && !empty($_POST['cities'])){
            $location=join(',',$_POST['cities']);
        }

        if(isset($update_id)){
            $sql = "UPDATE users_db SET firstname='$_POST[firstname]',lastname='$_POST[lastname]',email='$_POST[email]',username='$_POST[username]',password='$_POST[password]',dob='$dob',gender='$_POST[gender]',hobby='$hob',cities='$location',modified=NOW() WHERE id=$update_id";
            mysqli_query($con,$sql);
        }
    }

    $query="SELECT * FROM users_db";
    $result=mysqli_query($con,$query);

    include_once('includes/core.php');
    include_once('includes/header.php');
?>

<!-- <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <style type="text/css" rel="stylesheet">
        thead tr th,tbody tr td{
            text-align: center;
        }
    </style>
</head> -->

<!-- <body>
<header class="container">

</header> -->


<section class="container">
    <div class="row">
        <div class="col-md-12">
            <hr class="colorgraph"/>
            <a class="btn btn-success glyphicon glyphicon-off pull-right" href="logout.php"> Logout </a>
            <div class="panel panel-success">
                <div class="panel-heading text-center"><strong>Dashboard</strong>
                    <?php if(isset($_SESSION['msg'])){?>
                        <div class="alert alert-success text-center">
                            <?php echo "<strong>".$_SESSION['msg']."</strong>"; session_unset();session_destroy(); ?>
                        </div>
                    <?php } ?>
                </div>
                <!--<div class="panel-body">-->
            </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th class="active">ID</th>
                                <th class="success">Name</th>
                                <th class="warning">Email</th>
                                <th class="danger">Username</th>
                                <th class="active">Password</th>
                                <th class="success">Date of Birth</th>
                                <th class="info">Gender</th>
                                <!--<th class="warning">Hobby</th>
                                <th class="danger"">Location</th>
                                <th class="active">Created</th>
                                <th class="info">Modified</th>-->
                                <th class="warning">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($result as $row){ ?>
                                <tr>
                                    <td class="active"><?php echo $row['id'] ?></td>
                                    <td class="success"><?php echo $row['firstname']." ".$row['lastname'] ?></td>
                                   <!-- <td class="info"><?php /*echo $row['lastname'] */?></td>-->
                                    <td class="warning"><?php echo $row['email'] ?></td>
                                    <td class="danger"><?php echo $row['username'] ?></td>
                                    <td class="active"><?php echo $row['password'] ?></td>
                                    <td class="success"><?php echo $row['dob'] ?></td>
                                    <td class="info"><?php echo $row['gender'] ?></td>
                                    <!--<td class="warning"><?php /*echo $row['hobby'] */?></td>
                                    <td class="danger"><?php /*echo $row['cities'] */?></td>
                                    <td class="active"><?php /*echo $row['created'] */?></td>
                                    <td class="info"><?php /*echo $row['modified'] */?></td>-->
                                    <td class="warning">
                                        <a class="btn btn-success" href="view.php?id=<?php echo $row['id']?>">View</a>
                                        <a class="btn btn-info" href="update.php?id=<?php echo $row['id']?>">Edit</a>
                                        <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure want to delete id = <?php echo $row['id'] ?> ?');">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                <!--</div>-->

        </div>
    </div>
</section>

<!-- <footer class="container">

</footer>
</body>
</html> -->

<?php 
    include_once('includes/footer.php');
    mysqli_close($con);
?>
