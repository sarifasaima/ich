<?php
    session_start();
    include_once('includes/core.php');
    include_once('includes/header.php');
?>



<!-- Page Title -->
<div class="page-title-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow fadeIn">
                <i class="fa fa-user"></i>
                <h1>Login/</h1>
                <p>Below you can find more information about me</p>
            </div>
        </div>
    </div>
</div><!-- content Text -->

<!---login-->
<section class="container">
    <div class="row">
        <div class="col-md-offset-4 col-md-4">
            <hr class="colorgraph">
            <div class="panel panel-success">
                <form action="checkuser.php" method="post">
                    <fieldset>
                       <!-- <legend class="btn-info text-center">Login Form</legend> -->
                        <?php if(isset($_SESSION['msg'])){?>
                            <div class="alert alert-danger text-center">
                                <?php echo "<strong>".$_SESSION['msg']."</strong>"; session_unset();session_destroy(); ?>
                            </div>
                        <?php } ?>
                        <div class="form-group">
                            <div class="input-group login-input">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input class="form-control form-inline" placeholder="Username" type="text" name="username">
                            </div>
                            <br>
                            <div class="input-group login-input">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input class="form-control form-inline" placeholder="Password" type="password" name="password">
                            </div>
                            <br>
                           <!-- <div class="checkbox pull-left">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>-->
                            <div class="pull-left">
                                <a href="registration.php">Don't Have an account, Signup?</a>
                            </div>

                            <button class="btn btn-md btn-info pull-right" type="submit" name="submit">
                                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                                Login
                            </button>
                            <div class="clearfix"></div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
    include_once('includes/footer.php');
?>