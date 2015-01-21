        <!-- Contact Section -->
    <footer id="contact" class="section">

            <!-- .footer start -->
            <!-- ================ -->
            <div class="footer">
              <div class="container">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="footer-content">
                      <div class="logo-footer"><img id="logo-footer" src="img/stlogo.png" alt=""></div>
                      <br>
                      <br>
                      <div class="row">
                        <div class="col-md-12">
                          <ul class="list-icons">
                            <li><i class="fa fa-map-marker pr-10"></i> TechNation Offices, 5th Seelo Street, Dehnaw, Dehboori, Kabul. </li>
                            <li><i class="fa fa-phone pr-10"></i> +93 788 161 862</li>
                            <li><i class="fa fa-envelope-o pr-10"></i> info@startup.af</li>
                          </ul>
                          <br>
                          <div class="text-center center-block">
                            <a href="#"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
                            <a href="#"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a>
                            <a href="#"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
                            <a href="#"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a>
                            <a href="#"><i id="social" class="fa fa-globe fa-3x social-em"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="footer-content">
                      <h2 class="title"><b>Contact Us<b></h2>
                      <div class="alert alert-success hidden" id="contactSuccess2">
                        <strong>Success!</strong> Your message has been sent to us.
                      </div>
                      <div class="alert alert-error hidden" id="contactError2">
                        <strong>Error!</strong> There was an error sending your message.
                      </div>
                      <form method="post" id="contact-form" novalidate="novalidate" action="includes/handle_contact.php">
                        <div class="form-group has-feedback">
                          <label class="sr-only" >Name</label>
                          <input type="text" class="form-control validate[required]" id="name2" placeholder="Name" name="contactName">
                          <i class="fa fa-user form-control-feedback"></i>
                        </div>
                        <div class="form-group has-feedback">
                          <label class="sr-only" for="email2">Email address</label>
                          <input type="email" class="form-control validate[required,custom[email]]" id="email2" placeholder="Enter email" name="contactEmail">
                          <i class="fa fa-envelope form-control-feedback"></i>
                        </div>
                        <div class="form-group has-feedback">
                          <label class="sr-only" for="email2">Phone No.</label>
                          <input type="text" class="form-control" id="email2" placeholder="Enter Phone No." name="contactPhone">
                          <i class="fa fa-mobile form-control-feedback"></i>
                        </div>
                        <div class="form-group has-feedback">
                          <label class="sr-only" for="message2">Message</label>
                          <textarea class="form-control validate[required,minSize[10],maxSize[500]]" rows="6" id="message2" placeholder="Message" name="contactMsg"></textarea>
                          <i class="fa fa-pencil form-control-feedback"></i>
                        </div>
                        <input type="submit"  name="contactSubmit" value="Send" class="submit btn btn-cta-primary">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- .footer end -->

            <!-- .subfooter start -->
            <!-- ================ -->
            <div class="subfooter">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <p>Copyright © <?php echo date("Y"); ?> Startup by <a target="_blank" href="index.php">Startup</a>. All Rights Reserved</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- .subfooter end -->

          </footer>
    <!-- /Contact -->