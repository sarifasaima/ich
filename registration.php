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
    <div class="col-md-5 col-md-offset-3">
        <hr class="colorgraph">
        <form method="POST" action="" class="form-signin">
            <fieldset>
                <legend class="btn-info text-center">Registration Form</legend>

               <!-- <div class="form-group">
                    <label class="form-group form-inline">First Name: </label>
                    <input type="text" class="form-group form-inline" placeholder="First Name" name="firstname">
                </div>
                <div class="form-group text-center">
                    <label class="form-group form-inline">Last Name: </label>
                    <input type="text" class="form-group form-inline" placeholder="Last Name" name="Lastname">
                </div>-->
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <input class="form-control" placeholder="First Name" name="firstname" type="text">
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" placeholder="Last Name" name="lastname" type="text">
                        </div>
                    </div>
                </div>

                <input class="form-control" placeholder="E-mail" name="email" type="email"><br>
                <input class="form-control" placeholder="Username" name="username" type="text"><br>
                <input class="form-control" placeholder="Password" name="password" value="" type="password"><br>

                <div class="form-group form-inline">
                    <label>Birth Date:</label>
                    <select name="dobyear">
                        <option value="1" selected="selected">--Year--</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                    </select>
                    <select name="dobmonth">
                        <option value="0" selected="selected">--Month--</option>
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                    </select>
                    <select name="dobday">
                        <option value="0" selected="selected">--Day--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>

                <div class="form-group form-inline">
                    <label class="form-group form-inline">Gender: </label>
                    <input class="form-group from-inline" value="Male" id="male" name="gender" type="radio">
                    <label class="form-group form-inline">Male</label>
                    <input class="form-group from-inline" value="Female" id="Female" name="gender" type="radio">
                    <label class="form-group form-inline">Female</label>
                </div>

                <div class="form-group form-inline">
                    <input type="checkbox" name="hobby[]" value="Reading Book"> Reading Book<br />
                    <input type="checkbox" name="hobby[]" value="Travelling"> Travelling<br />
                    <input type="checkbox" name="hobby[]" value="Programming"> Programming<br />
                    <input type="checkbox" name="hobby[]" value="Games"> Games<br />
                </div>

                <div class="form-group form-inline">
                    <select name="cities[]" multiple="multiple">
                        <option value="Dhaka">Dhaka</option>
                        <option value="Chittagong">Chittagong</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Jshore">Jshore</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Borishal">Borishal</option>
                        <option value="Comilla">Comilla</option>
                        <option value="Dinajpur">Dinajpur</option>
                        <option value="Faridpur">Faridpur</option>
                        <option value="Narayangonj">Narayangonj</option>
                        <option value="Rangamati">Rangamati</option>
                        <option value="Kagrachori">Kagrachori</option>
                        <option value="Jorachori">Jorachori</option>
                        <option value="Noakhali">Noakhali</option>
                        <option value="Bbaria">Bbaria</option>
                    </select>
                </div>

                <input class="form-group form-inline" type="hidden" name="created" />
                <input class="form-group form-inline" type="hidden" name="modified" />

                <div class="checkbox pull-left">
                    <p class="text-center"><a href="login.php">Already have an account?</a></p>
                </div>

                <button class="btn btn-ar btn-primary pull-right btn-md" type="submit">
                    <span aria-hidden="true" class="glyphicon glyphicon-ok-sign"></span>
                    Register
                </button>
                <div class="clearfix"></div>
            </fieldset>
        </form>
    </div>
</section>
<footer class="container">

</footer>
</body>
</html>