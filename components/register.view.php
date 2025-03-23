<?php
class RegisterView extends View {
    function index($result) {
        ?>
<!---============register section==============--->
<section id="register">
    <div class="coba"></div>
        <div class="register-container">
            <div class="col-sm-4 paddingu paddingb">
                <div class="cardlog1">
                <form action="register.php?component=Register&action=save" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $result->id; ?>">
                        <div class="pmd-card-title card-header-border text- wow fadeInUp">
                            <div class="loginlogo">
                                <a href="index.php"><img src="assets/img/logow.png"></a>
                            </div>
                        </div>
                            <div class="pmd-card-body paddingrl wow fadeIn">
                                <div class="form-group pmd-textfield">
                                    <label for="username" class="labell pull-left">Username</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="material-icons md-light pmd-sm">account_circle</i></div>
                                        <input class="form-control innerinput" id="username" name="username" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group pmd-textfield">
                                    <label for="password" class="labell pull-left">Password</label>
                                    <div class="input-group ">
                                        <div class="input-group-addon"><i class="material-icons md-light pmd-sm">lock</i></div>
                                        <input class="form-control innerinput" type="password" id="password" name="password" required>
                                    </div>
                                </div>
                                <div class="form-group pmd-textfield">
                                    <label for="name" class="labell pull-left">Name</label>
                                    <div class="input-group ">
                                        <div class="input-group-addon"><i class="material-icons md-light pmd-sm">folder_shared</i></div>
                                        <input class="form-control innerinput" id="name" name="name" required>
                                    </div>
                                </div>
                                <div class="form-group pmd-textfield">
                                    <label for="email" class="labell pull-left">Email</label>
                                    <div class="input-group ">
                                        <div class="input-group-addon"><i class="material-icons md-light pmd-sm">email</i></div>
                                        <input class="form-control innerinput" type="email" id="email" name="email" required>
                                    </div>
                                </div>
                                <div class="form-group pmd-textfield">
                                    <label for="phone_number" class="labell pull-left">Phone Number</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="material-icons md-light pmd-sm">phone</i></div>
                                        <input class="form-control innerinput" type="number" id="phone_number" name="phone_number" required>
                                    </div>
                                </div>
                            </div>
                            <div class="pmd-card-footer card-footer-no-border card-footer-p16 text-center wow fadeInDown">
                                <input type="submit" class="btn-get-started" value="Register">  
                                <br>
                                <br>
                                <a href="login.php" class="link">Already have an account? <strong>Log in</strong></a>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
         </div>
    </div>
</section>
<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/wow/wow.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/superfish/superfish.min.js"></script>
    <script src="assets/vendor/hoverIntent/hoverIntent.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>


<?php
    }
}
?>