<?php
    $title = "Contact";
    require_once 'includes/header.php';
    require_once 'db/conn.php';
?>

<!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4 text-primary">Contact us</h2>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="contactSuccess.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" class="text-info">Your name</label>
                            <input type="text" id="name" name="name" class="form-control">
                           
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                           <label for="email" class="text-info">Your email</label>
                            <input type="text" id="email" name="email" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="subject" class="text-info">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                        
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="message" class="text-info">Your message</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                    <br>
              <div class="text-center text-md-left">
                    <button type="submit" class="btn btn-primary btn-lg" name="send" id="send">Send</button>
              </div>
                <!-- <div class="status"></div> -->

         </form>
        </div>

        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>KIIT UNIVERSITY, India</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+91 63 09 81 41 95</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <a href="http://www.tcoder.site">http://www.tcoder.site</a>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->
<br><br><br>

<?php
    require_once 'includes/footer.php';
?>