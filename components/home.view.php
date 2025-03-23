<?php
class HomeView extends View {
    function index() {
?>
  <header id="header">
        <div class="container">
        <div id="logo" class="pull-right">
                <a href="#mainhome"><img src="assets/img/slogo.png" alt=""></a>
        </div>
            <nav id="nav-menu-container">
                 <ul class="nav-menu">
                     <li class="menu-active"><a href="#mainhome">Home</a></li>
                     <li><a href="#aboutmain">About Us</a></li>
                     <li><a href="#menumain">Food Menu</a></li>
                     <li><a href="#reservation">Reservation</a></li>
                     <li><a href="profile.php">Profile</a></li>
                     <li><a href="#contactmain">Contact</a></li>
                     <li><a href="main.php?component=Home&action=logout">logout</a></li>

                 </ul>
            </nav>
        </div>
    </header>
      <!-- ======= Call To Action Section ======= -->
      <section id="mainhome">
        <div class="mainhome-container wow fadeInDown">
                <h3> The Factory of Savour </h3>
                <h2>We Speak The Good Food Language</h2>
                <a href="profile.php" class="cta-btn">Your Profile</a>
            </div>
            

        </div>
    </section>
    <!-- End Call To Action Section -->
    
    <!--========about section=========-->

    <section id="aboutmain">
        <div class="container">
            <div class="row about-container">
        
             <div class="col-lg-6 content order-lg-1 order-2">
                <h2 class="title">About Us</h2>
                <p class="txtabt">
                Savactory berdiri sejak 2015, dengan keinginan untuk dapat meracik cita rasa yang lezat dan memiliki ciri khas tersendiri. Kehadiran kami juga untuk memnuhi misi kami agar dapat berbagi kebahagiaan kepada pelanggan kami, melalui cita rasa masakan yang kami sajikan.
                </p>
                <div class="wow fadeInLeft mt-3"><a href="#contactmain" class="about-btn">Contact Us</a></div>
                

             </div>
            <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
            </div>
        </div>

    </section>
    <!--========== end about section ===========-->

          <!-- ======= Menu Section ======= -->
          <section id="menumain">
            <div class="container wow fadeInUp">
                <div class="section-header">
                    <h3 class="section-title">Menu</h3>
                    <p class="section-descriptiona">These Dishes Are Our Best Choices</p>
                    <p class="section-description">We Wish It Gonna Bring Happiness To Y'all</p></p>
                </div>
                <div class="row">

                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" class="filter-active">All</li>
                            <li data-filter=".filter-app">Food</li>
                            <li data-filter=".filter-card">Beverages</li>
                            <li data-filter=".filter-logo">Dessert</li>
                        </ul>
                    </div>
                </div>

                <div class="row" id="portfolio-wrapper">
                    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <a href="assets/img/fd/rsz_f1.jpg" data-gall="portfolioGallery" class="venobox">
                            <img src="assets/img/fd/rsz_f1.jpg" alt="">
                            <div class="details">
                                <h4>Pan Seared Scallops with Lemon Caper Sauce</h4>
                          </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-card">
                        <a href="assets/img/fd/rsz_d1.jpg" data-gall="portfolioGallery" class="venobox">
                            <img src="assets/img/fd/rsz_d1.jpg" alt="">
                            <div class="details">
                                <h4>Cappucino</h4>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <a href="assets/img/fd/rsz_f2.jpg" data-gall="portfolioGallery" class="venobox">
                            <img src="assets/img/fd/rsz_f2.jpg" alt="">
                            <div class="details">
                                <h4>Pan-Seared Beef Sirloin Steak</h4>
                                
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-card">
                        <a href="assets/img/fd/rsz_d2.jpg" data-gall="portfolioGallery" class="venobox">
                            <img src="assets/img/fd/rsz_d2.jpg" alt="">
                            <div class="details">
                                <h4>Jasmine Tea</h4>
                                
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <a href="assets/img/fd/f3.jpg" data-gall="portfolioGallery" class="venobox">
                            <img src="assets/img/fd/f3.jpg" alt="">
                            <div class="details">
                                <h4>Panzanella</h4>
                                
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-card">
                        <a href="assets/img/fd/rsz_d3.jpg" data-gall="portfolioGallery" class="venobox">
                            <img src="assets/img/fd/rsz_d3.jpg" alt="">
                            <div class="details">
                                <h4>Chocolate Milkshake</h4>
                                
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <a href="assets/img/fd/rsz_f4.jpg" data-gall="portfolioGallery" class="venobox">
                            <img src="assets/img/fd/rsz_f4.jpg" alt="">
                            <div class="details">
                                <h4>Incheon Set Menu</h4>
                                
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-card">
                        <a href="assets/img/fd/rsz_d4.jpg" data-gall="portfolioGallery" class="venobox">
                            <img src="assets/img/fd/rsz_d4.jpg" alt="">
                            <div class="details">
                                <h4>Blue Ocean & Smoothies</h4>
                                
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
                        <a href="assets/img/fd/f5.jpg" data-gall="portfolioGallery" class="venobox">
                            <img src="assets/img/fd/f5.jpg" alt="">
                            <div class="details">
                                <h4>Truffle With Red Sauce and Choco Crumbles</h4>
                                
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-card">
                        <a href="assets/img/fd/rsz_d5.jpg" data-gall="portfolioGallery" class="venobox">
                            <img src="assets/img/fd/rsz_d5.jpg" alt="">
                            <div class="details">
                                <h4>Summer Lemonade With Strawberries</h4>

                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <a href="assets/img/fd/rsz_f6.jpg" data-gall="portfolioGallery" class="venobox">
                            <img src="assets/img/fd/rsz_f6.jpg" alt="">
                            <div class="details">
                                <h4>Oyster Mushroom Pizza With Paprika and Chives</h4>
                    
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-card">
                        <a href="assets/img/fd/rsz_d6.jpg" data-gall="portfolioGallery" class="venobox">
                            <img src="assets/img/fd/rsz_d6.jpg" alt="">
                            <div class="details">
                                <h4>Sunrise Lime</h4>
  
                            </div>
                        </a>
                    </div>

 

                </div>

            </div>
        </section>
        <!-- End menumain Section -->

                <!-- ======= ReservationSection ======= -->
        <section id="reservation">
            <div class="container wow fadeIn">
                <div class="row">
                    <div class="col-lg-9 text-center text-lg-left">
                        <h3 class="cta-title">Reservation</h3>
                        <p class="cta-text"> Mempunyai Rencana Makan Malam, Tapi Takut Kehabisan Meja? Atau Ingin Mengadakan Acara? Silakan Lakukan Reservasi.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="reservation.php">Click To Make A Reservation</a>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Reservation Section -->

        <section id="contactmain">
            <div class="container wow fadeInUp">
                <div class="section-header">
                    <h3 class="section-title colorb">Contact Us</h3>
                    <p class="section-descriptionb colorb">For Business Inquiries or More Information, Reach Us At:</p>
                </div>
            </div>


            <div class="container wow fadeInUp mt-3">
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-4 bxct">

                        <div class="info">
                            <div>
                                <i class="fa fa-map-marker colorb"></i>
                                <p>TIF 4B<br>UIN Suska Riau</p>
                            </div>

                            <div>
                                <i class="fa fa-envelope colorb"></i>
                                <p>11850112157@students.uin-suska.ac.id</p>
                            </div>

                            <div>
                                <i class="fa fa-phone colorb"></i>
                                <p>+62 82139006672</p>
                            </div>
                        </div>

                        <div class="social-links">

                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>

                    </div>



                </div>

            </div>
        </section>
        <!-- End Contact Section -->

        <!-- ======= Footer ======= -->
        <footer id="footer">
        <div class="footer-top">
            <div class="container">

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                 <strong>Savactory</strong>
            </div>
            <div class="credits">
                <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
      -->
                By <a href="#">Kelompok 4</a> TIF 4B
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<?php
    }
}
?>