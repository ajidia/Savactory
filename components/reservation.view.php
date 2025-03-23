<?php
class ReservationView extends View {
    function index($result) {
        ?>
<!---- reservation menu ---->
<header id="header">
        <div class="container">
        <div id="logo" class="pull-right">
                <a href="main.php"><img src="assets/img/slogo.png" alt=""></a>
        </div>
            <nav id="nav-menu-container">
                 <ul class="nav-menu">
                     <li><a href="main.php">Home</a></li>
                     <li><a href="main.php#aboutmain">About Us</a></li>
                     <li><a href="main.php#menumain">Food Menu</a></li>
                     <li class="menu-active"><a href="#">Reservation</a></li>
                     <li><a href="profile.php">Profile</a></li>
                     <li><a href="main.php#contactmain">Contact</a></li>
                     <li><a href="main.php?component=Home&action=logout">logout</a></li>

                 </ul>
            </nav>
        </div>
    </header>

<!---============reservasi section==============--->
<section id="reservationmenu">
    <div class="coba"></div>
        <div class="reservation-container">
            <div class="col-lg-8 paddingu paddingb">
                <div class="cardlog">
                    <form action="profile.php?component=Reservation&action=save" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $result->id; ?>">
                        <div class="pmd-card-title card-header-border text- wow fadeInUp">
                            <div class="loginlogo pull-left paddinglt">
                                <h2>Reservation</h2>
                            </div>
                        </div>
                        <div class="row about-container mt-lg-5">
                            <div class="col-lg-6 content order-lg-1 order-2">
                                <div class="pmd-card-body paddingrl wow fadeInLeft">
                                    <div class="form-group pmd-textfield">
                                        <label for="name" class="labell pull-left">Name</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="material-icons md-light pmd-sm">account_circle</i></div>
                                                <input class="form-control innerinput" id="name" name="name" required autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group pmd-textfield">
                                        <label for="date" class="labell pull-left">Date</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="material-icons md-light pmd-sm">event</i></div>
                                                <input class="form-control innerinput" type="date" id="date" name="date" required>
                                        </div>
                                    </div>
                                    <div class="form-group pmd-textfield">
                                        <label for="time" class="labell pull-left">Time</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="material-icons md-light pmd-sm">access_time</i></div>
                                                <input class="form-control innerinput" type="time" id="time" name="time" required>
                                        </div>
                                    </div>
                                    <div class="form-group pmd-textfield">
                                        <label for="phone_number" class="labell pull-left">Phone Number</label>
                                            <div class="input-group ">
                                                <div class="input-group-addon"><i class="material-icons md-light pmd-sm">phone</i></div>
                                                <input class="form-control innerinput" id="phone_number" name="phone_number" required>
                                            </div>
                                    </div>
                                    <div class="form-group pmd-textfield">
                                        <label for="number_reserve" class="labell pull-left">Number Of Reserve</label>
                                            <div class="input-group ">
                                                <div class="input-group-addon"><i class="material-icons md-light pmd-sm">format_list_numbered</i></div>
                                                <input class="form-control innerinput" id="number_reserve" name="number_reserve" required>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight">
                                <div class="pmd-card-body paddingrl wow fadeIn">
                                    <div class="form-group pmd-textfield">
                                        <label for="email" class="labell pull-left">Email</label>
                                        <div class="input-group ">
                                            <div class="input-group-addon"><i class="material-icons md-light pmd-sm">email</i></div>
                                                <input class="form-control innerinput" type="email" id="email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group pmd-textfield">
                                        <label for="special_note" class="labell pull-left">Special Note</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="material-icons md-light pmd-sm">event_note</i></div>
                                            <input class="form-control innerinput" type="text" id="special_note" name="special_note" required>
                                        </div>
                                    </div>
                                    <div class="pmd-card-footer card-footer-no-border card-footer-p16 text-center wow fadeInDown">
                                        <input type="submit" class="btn-get-started" value="Reserve">  
                                        <br>
                                        <br>
                                        <a href="profile.php" class="link">already have a reservation? Go to <strong>Profile</strong></strong></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                      
                    </form>
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
