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
                <i class="fa fa-envelope"></i>
                <h1>Contact Me /</h1>
                <p>Here is how you can contact me</p>
            </div>
        </div>
    </div>
</div>
<!-- page title ends -->

<!-- Contact Us -->
<div class="contact-us-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 contact-form wow fadeInLeft">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper <a href="">suscipit lobortis</a>
                    nisl ut aliquip ex ea commodo consequat.
                </p>
                <form role="form" action="assets/contact.php" method="post">
                    <div class="form-group">
                        <label for="contact-name">Name</label>
                        <input type="text" name="name" placeholder="Enter your name..." class="contact-name" id="contact-name">
                    </div>
                    <div class="form-group">
                        <label for="contact-email">Email</label>
                        <input type="text" name="email" placeholder="Enter your email..." class="contact-email" id="contact-email">
                    </div>
                    <div class="form-group">
                        <label for="contact-subject">Subject</label>
                        <input type="text" name="subject" placeholder="Your subject..." class="contact-subject" id="contact-subject">
                    </div>
                    <div class="form-group">
                        <label for="contact-message">Message</label>
                        <textarea name="message" placeholder="Your message..." class="contact-message" id="contact-message"></textarea>
                    </div>
                    <button type="submit" class="btn" title="send">Send</button>
                </form>
            </div>
            <div class="col-sm-5 contact-address wow fadeInUp">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">I'm here</h3>
                    </div>
                    <div class="panel-body">
                        <h3>Address</h3>
                        <p>Mirpur <br>Dhaka</p>
                        <p>Phone: 0039 333 12 68 347</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<?php
    include_once('includes/footer.php');
?>