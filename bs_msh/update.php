<?php
    include('connection.php');

    $id=$_GET['id'];
    $query="SELECT * FROM `website_db`.`users_db` WHERE `users_db`.`id` = $id";
    $result=mysqli_query($con,$query);
    $rows=mysqli_fetch_array($result);

    $radio=$rows['gender'];

    $dob=$rows['dob'];
    $dob2=explode('-',$dob);

    $hob=explode(',',$rows['hobby']);
    $location=explode(',',$rows['cities']);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>
<body>
<header class="container">

</header>
<section class="container">
    <div class="row">
        <div class="col-md-5 col-md-offset-3">
            <hr class="colorgraph">
            <form class="form-signin" action="dashboard.php?id=<?php echo $_GET['id'] ?>" method="post">
                <input type="hidden" id="update_id" value="<?php echo $id ?>" />
                <fieldset>
                    <legend class="btn-info text-center">Registration Form</legend>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control" placeholder="First Name" name="firstname" type="text" value="<?php echo $rows['firstname']?>">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" placeholder="Last Name" name="lastname" type="text" value="<?php echo $rows['lastname']?>">
                            </div>
                        </div>
                    </div>

                    <input class="form-control" placeholder="E-mail" name="email" type="email" value="<?php echo $rows['email']?>"><br>
                    <input class="form-control" placeholder="Username" name="username" type="text" value="<?php echo $rows['username']?>"><br>
                    <input class="form-control" placeholder="Password" name="password" type="text" value="<?php echo $rows['password']?>"><br>

                    <div class="form-group form-inline">
                        <label>Birth Date:</label>
                        <select name="dobyear">
                            <option value="1" selected="selected">--Year--</option>
                            <option <?php if ($dob2[0] == '2014' ) echo 'selected'; ?> value="2014">2014</option>
                            <option <?php if ($dob2[0] == '2013' ) echo 'selected'; ?> value="2013">2013</option>
                            <option <?php if ($dob2[0] == '2012' ) echo 'selected'; ?> value="2012">2012</option>
                            <option <?php if ($dob2[0] == '2011' ) echo 'selected'; ?> value="2011">2011</option>
                        </select>
                        <select name="dobmonth">
                            <option value="0" selected="selected">--Month--</option>
                            <option <?php if ($dob2[1] == '01' ) echo 'selected'; ?> value="01">January</option>
                            <option <?php if ($dob2[1] == '02' ) echo 'selected'; ?> value="02">February</option>
                            <option <?php if ($dob2[1] == '03' ) echo 'selected'; ?> value="03">March</option>
                            <option <?php if ($dob2[1] == '04' ) echo 'selected'; ?> value="04">April</option>
                        </select>
                        <select name="dobday">
                            <option value="0" selected="selected">--Day--</option>
                            <option <?php if ($dob2[2] == '1' ) echo 'selected'; ?> value="1">1</option>
                            <option <?php if ($dob2[2] == '2' ) echo 'selected'; ?> value="2">2</option>
                            <option <?php if ($dob2[2] == '3' ) echo 'selected'; ?> value="3">3</option>
                            <option <?php if ($dob2[2] == '4' ) echo 'selected'; ?> value="4">4</option>
                        </select>
                    </div>

                    <div class="form-group form-inline">
                        <label class="form-group form-inline">Gender: </label>
                        <input class="form-group from-inline" value="Male" id="male" name="gender" type="radio" <?php if($radio=='Male') echo 'checked="checked"'; ?> />
                        <label class="form-group form-inline">Male</label>
                        <input class="form-group from-inline" value="Female" id="Female" name="gender" type="radio" <?php if($radio=='Female') echo 'checked="checked"'; ?> />
                        <label class="form-group form-inline">Female</label>
                    </div>

                    <div class="form-group form-inline">
                        <input type="checkbox" name="hobby[]" <?php if(in_array("Reading Book",$hob)) echo 'checked="checked"'; ?> value="Reading Book">Reading Book<br />
                        <input type="checkbox" name="hobby[]" <?php if(in_array("Travelling",$hob)) echo 'checked="checked"'; ?> value="Travelling">Travelling<br />
                        <input type="checkbox" name="hobby[]" <?php if(in_array("Programming",$hob)) echo 'checked="checked"'; ?> value="Programming">Programming<br />
                        <input type="checkbox" name="hobby[]" <?php if(in_array("Games",$hob)) echo 'checked="checked"'; ?> value="Games">Games<br />
                    </div>

                    <div class="form-group form-inline">
                        <select name="cities[]" multiple="multiple" >
                            <option <?php if(in_array('Dhaka',$location)) echo 'selected="selected"'; ?> value="Dhaka">Dhaka</option>
                            <option <?php if(in_array('Chittagong',$location)) echo 'selected="selected"'; ?> value="Chittagong">Chittagong</option>
                            <option <?php if(in_array('Khulna',$location)) echo 'selected="selected"'; ?> value="Khulna">Khulna</option>
                            <option <?php if(in_array('Jshore',$location)) echo 'selected="selected"'; ?> value="Jshore">Jshore</option>
                            <option <?php if(in_array('Rajshahi',$location)) echo 'selected="selected"'; ?> value="Rajshahi">Rajshahi</option>
                            <option <?php if(in_array('Borishal',$location)) echo 'selected="selected"'; ?> value="Borishal">Borishal</option>
                            <option <?php if(in_array('Comilla',$location)) echo 'selected="selected"'; ?> value="Comilla">Comilla</option>
                            <option <?php if(in_array('Dinajpur',$location)) echo 'selected="selected"'; ?> value="Dinajpur">Dinajpur</option>
                            <option <?php if(in_array('Faridpur',$location)) echo 'selected="selected"'; ?> value="Faridpur">Faridpur</option>
                            <option <?php if(in_array('Narayangonj',$location)) echo 'selected="selected"'; ?> value="Narayangonj">Narayangonj</option>
                            <option <?php if(in_array('Rangamati',$location)) echo 'selected="selected"'; ?> value="Rangamati">Rangamati</option>
                            <option <?php if(in_array('Kagrachori',$location)) echo 'selected="selected"'; ?> value="Kagrachori">Kagrachori</option>
                            <option <?php if(in_array('Jorachori',$location)) echo 'selected="selected"'; ?> value="Jorachori">Jorachori</option>
                            <option <?php if(in_array('Noakhali',$location)) echo 'selected="selected"'; ?> value="Noakhali">Noakhali</option>
                            <option <?php if(in_array('Bbaria',$location)) echo 'selected="selected"'; ?> value="Bbaria">Bbaria</option>
                        </select>
                    </div>

                    <input class="form-group form-inline" type="hidden" name="created" />
                    <input class="form-group form-inline" type="hidden" name="modified" />

                    <div class="pull-left">
                        <a class="btn btn-success" href="dashboard.php"><strong>Back</strong></a>
                    </div>

                    <button class="btn btn-ar btn-primary pull-right btn-md" type="submit" name="update">
                        <span aria-hidden="true" class="glyphicon glyphicon-ok-sign"></span>
                        Update
                    </button>
                    <div class="clearfix"></div>
                </fieldset>
            </form>
        </div>
    </div>
</section>
<footer class="container">

</footer>
</body>
</html>