<?php
  include ('includes/header.php');
?>

    <!-- Welcome section
    =================== -->
    <div class="container">
        <div class="agile-title">
            <h3> Welcome !</h3>
        </div>
        <div class="w3ls-row">
          <div class="col-md-6 welcome-right">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt lorem sed velit fermentum lobortis. Fusce eu semper lacus, eget placerat mauris. Sed lectus tellus, sodales id elit a, feugiat porttitor nulla. Sed porta magna vitae
                  nisl vulputate lacinia. Morbi malesuada sollicitudin tortor, vitae pharetra nunc lacinia eget. Nulla ornare purus nunc, ut dapibus leo sodales adipiscing. Praesent sit amet justo diam. Quisque sagittis egestas sem vitae vestibulum.
                  Quisque nec lacus ornare, volutpat arcu in lacinia dolor Itaque earum rerum hic tenetur a sapiente delectus . </p>
              <div class="open-hours-row">
                  <div class="col-md-3 open-hours-left">
                      <h4>OPENING HOURS </h4>
                  </div>
                  <div class="col-md-3 open-hours-left">
                      <h6>BREAKFAST</h6>
                      <h5>7am - 12am</h5>
                  </div>
                  <div class="col-md-3 open-hours-left">
                      <h6>MAIN MENU</h6>
                      <h5>12am - 12pm</h5>
                  </div>
                  <div class="col-md-3 open-hours-left">
                      <h6>SPECIALS</h6>
                      <h5>8pm - 11pm</h5>
                  </div>
                  <div class="clearfix"> </div>
              </div>
          </div>
            <div class="col-md-6 welcome-left">
                <div class="welcome-img">
                    <img src="images/menu/img1.jpg" class="img-responsive zoom-img" alt="" />
                </div>
                <div class="col-md-6 welcome-left-grids">
                    <div class="welcome-img">
                        <img src="images/menu/img2.jpg" class="img-responsive zoom-img" alt="" />
                    </div>
                </div>
                <div class="col-md-6 welcome-left-grids">
                    <div class="welcome-img">
                        <img src="images/menu/img3.jpg" class="img-responsive zoom-img" alt="" />
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <!-- Body Section
    =================== -->
    <!-- Menu section -->
    <div class="special-w3">
        <div class="container">
            <div class="agile-title">
                <h3>Menu</h3>
            </div>
            <div class="special-grids">
                <div class="col-md-4 menu-grid">
                    <div class="menu1">
                        <img src="images/menu/m1.jpg" class="img-responsive gray" alt="" />
                    </div>
                    <div class="menu-bottom">
                        <h4>Fried Chicken</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ornare odio et massa dignissim, at accumsan metus viverra.</p>
                        <a href="products.php" class="button  hvr-sweep-to-bottom">Starting Price  $2.0</a>
                    </div>
                </div>
                <div class="col-md-4 menu-grid">
                    <div class="menu1">
                        <img src="images/menu/m2.jpg" class="img-responsive gray" alt="" />

                    </div>
                    <div class="menu-bottom">
                        <h4>Sandwich</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ornare odio et massa dignissim, at accumsan metus viverra.</p>
                        <a href="products.php" class="button  hvr-sweep-to-bottom">Starting Price  $2.0</a>
                    </div>
                </div>
                <div class="col-md-4 menu-grid">
                    <div class="menu1">
                        <img src="images/menu/m3.jpg" class="img-responsive gray" alt="" />
                    </div>
                    <div class="menu-bottom">
                        <h4>Goat Cheese </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ornare odio et massa dignissim, at accumsan metus viverra.</p>
                        <a href="products.php" class="button  hvr-sweep-to-bottom">Starting Price  $2.0</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

        </div>
    </div>

    <!-- Contact/ Book Section
    =================== -->
    <!-- contact -->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="agile-title">
                        <h3>Book Your Table</h3>
                    </div>
                    <p class="header-p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        <br>nibh euismod tincidunt ut laoreet dolore magna aliquam. </p>
                </div>
            </div>
            <div class="row msg-row">
                <div class="col-md-4 col-sm-4 mr-15">
                    <div class="media-2">
                        <div class="media-left">
                            <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-phone"></span></div>
                        </div>
                        <div class="media-body">
                            <h4 class="dark-blue regular">Phone Numbers</h4>
                            <p class="light-blue regular alt-p">+440 875369208 - <span class="contacts-sp">Phone Booking</span></p>
                        </div>
                    </div>
                    <div class="media-2">
                        <div class="media-left">
                            <div class="contact-email bg-14 text-center"><span class="hour-icon fa fa-clock-o"></span></div>
                        </div>
                        <div class="media-body">
                            <h4 class="dark-blue regular">Opening Hours</h4>
                            <p class="light-blue regular alt-p"> Monday to Friday 09.00 - 24:00</p>
                            <p class="light-blue regular alt-p">
                                Friday and Sunday 08:00 - 03.00
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <form action="" method="post" role="form" class="contactForm">
                        <div id="sendmessage">Your booking request has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <div class="col-md-6 col-sm-6 contact-form pad-form">
                            <div class="form-group label-floating is-empty">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-6 contact-form">
                            <div class="form-group">
                                <input type="date" class="form-control label-floating is-empty" name="date" id="date" placeholder="Date" data-rule="required" data-msg="This field is required" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 contact-form pad-form">
                            <div class="form-group">
                                <input type="email" class="form-control label-floating is-empty" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 contact-form">
                            <div class="form-group">
                                <input type="time" class="form-control label-floating is-empty" name="time" id="time" placeholder="Time" data-rule="required" data-msg="This field is required" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 contact-form">
                            <div class="form-group">
                                <input type="text" class="form-control label-floating is-empty" name="phone" id="phone" placeholder="Phone" data-rule="required" data-msg="This field is required" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 contact-form">
                            <div class="form-group">
                                <input type="text" class="form-control label-floating is-empty" name="people" id="people" placeholder="People" data-rule="required" data-msg="This field is required" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-12 contact-form">
                            <div class="form-group label-floating is-empty">
                                <textarea class="form-control" name="message" rows="5" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>

                        </div>
                        <div class="col-md-12 btnpad">
                            <div class="contacts-btn-pad">
                                <button class="contacts-btn">Book Table</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- / contact -->
<?php
  include 'includes/footer.php';
?>
