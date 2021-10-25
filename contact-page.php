<?php
/*

Template Name: Contact Page Template

*/

 ?>

<?php get_header(); ?>
<div class="container mt-5">

<div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <h1 class="form-title">Get in Touch</h1>
          </div>
      </div>

      <div class="row">

          <div class="col-6 my-5 mx-auto">

              <form id="contact-form" name="myForm" class="form " action="#" onsubmit="return validateForm()" method="POST" role="form">

                  <div class="form-group">
                      <label class="form-label" id="nameLabel" for="name"></label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Your name" tabindex="1">
                  </div>

                  <div class="form-group">
                      <label class="form-label" id="emailLabel" for="email"></label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" tabindex="2">
                  </div>

                  <div class="form-group">
                      <label class="form-label" id="subjectLabel" for="sublect"></label>
                      <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" tabindex="3">
                  </div>

                  <div class="form-group">
                      <label class="form-label" id="messageLabel" for="message"></label>
                      <textarea rows="6" cols="60" name="message" class="form-control" id="message" placeholder="Your message" tabindex="4"></textarea>
                  </div>

                  <div class="text-center margin-top-25">
                      <button type="submit" class="my-btn red-fill my-3">Send Message</button>
                  </div>

              </form><!-- End form -->

          </div><!-- End col -->

      </div><!-- End row -->
</div>

<?php get_footer(); ?>
