<?php
session_start();
//koneksi ke datebase
include'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>PT. Visi Catur Mitra | Documentation</title>
    <!--  
    Favicons
    =============================================
    -->
    <?php include 'favicons.php'; ?>

    <!--  
    Stylesheets
    =============================================
    -->
    <?php include 'stylesheets.php'; ?>
  </head>



  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>

      <?php include 'mnavbar.php'; ?>

      
      <div class="main documentation-page">

        <section class="module-medium" id="contact">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Contact Form</h2>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <p>Open the file &nbsp;<strong>assets/php/contact.php</strong>&nbsp; and enter your data:</p>
                <pre class="prettyprint lang-basic">$to = 'info@example.com';  // please change this email id
$subject = 'Contact Form : Titan - The best downloaded template ever';</pre>
                <h4>If Contact form form not working</h4>
                <p>You need to check is PHP mail() function working.</p>
                <p>
                  <textarea rows="4" style="width:100%; text-transform: lowercase;">
                    <?php
                    mail('you@yourmail.com','Test mail','The mail function is working!');
                    echo 'Mail sent!';
                    ?> 
                  </textarea>
                </p>
                <ul>
                  <li>Save this code as mailtest.php</li>
                  <li>change you@yourmail.com to your e-mail address</li>
                  <li>upload mailtest.php to your server</li>
                  <li>open mailtest.php in your browser (http://yourwebsite.com/mailtest.php)</li>
                  <li>check your inbox to see if a test message arrived.</li>
                </ul><strong>If it works:</strong>
                <ul>
                  <li>double-check your form script for errors (like e-mail address misspelling)</li>
                  <li>use the same e-mail address as your form recipient</li>
                  <li>double-check your SPAM filters and SPAM/Junk/Bulk mailboxes</li>
                </ul><strong>If it not</strong>
                <p>Contact your host and ask them to check PHP mail() setting.</p>
              </div>
            </div>
          </div>
        </section>


        <section class="module-medium" id="reservation">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Reservation Form</h2>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <p>Open the file &nbsp;<strong>assets/php/reservation.php</strong>&nbsp; and enter your data:</p>
                <pre class="prettyprint lang-basic">$from = $email;
$to = 'info@example.com';  // please change this email id
$subject = 'Table Booking : Titan';

</pre>
              </div>
            </div>
          </div>
        </section>
        <section class="module-medium" id="mailchimp">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Configuring Mailchimp</h2>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <p>Open the file &nbsp;<strong>assets/php/subscribe.php</strong>&nbsp; and enter your data:</p>
                <pre class="prettyprint lang-basic">\n// MailChimp
$APIKey = '53bb3bcad3947b9c5b45884b439097******';
$listID = 'fd1b8b****';</pre>
                <div class="alert alert-info">Grab an API Key from http://admin.mailchimp.com/account/api/</div>
                <div class="alert alert-info">Grab your List&apos;s Unique Id by going to http://admin.mailchimp.com/lists/</div>
              </div>
            </div>
          </div>
        </section>
        <section class="module-medium" id="gmap">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Google Maps</h2>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <p>Open the file &nbsp;<strong>assets/js/main.js</strong>&nbsp; and enter your latitude &amp; longitude:</p>
                <pre class="prettyprint lang-js">\n/* ---------------------------------------------- /*
 * Google Map
/* ---------------------------------------------- */

var $mapis = $('#map');

if ($mapis.length > 0) {

    var mapLocation = new google.maps.LatLng(34.031428,-118.2071542,17);

</pre>
              </div>
            </div>
          </div>
        </section>
        <section class="module-medium" id="plugin">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Plugin Settings</h2>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <p>All plugins setting is in &nbsp;<strong>assets/js/custom.js</strong>&nbsp; file</p>
                <ul>
                  <li><a href="https://github.com/bas2k/jquery.appear/">Appear</a> - Progress bars, CountTo</li>
                  <li><a href="http://www.thepetedesign.com/demos/jquery_super_simple_text_rotator_demo.html">Text rotator</a> - Changes to different text in same place. Mainly used in Header</li>
                  <li><a href="http://isotope.metafizzy.co/">Isotope</a> - Portfolio</li>
                  <li><a href="https://github.com/woothemes/FlexSlider/wiki/FlexSlider-Properties">FlexSlider</a> - Sliders</li>
                  <li><a href="http://owlgraphic.com/owlcarousel/#how-to">OWL Carousel</a> - Team carousel, client logos carousel</li>
                  <li><a href="http://dimsemenov.com/plugins/magnific-popup/">Magnific-popup</a> - Modal window, gallery, modal video</li>
                  <li><a href="https://github.com/pupunzi/jquery.mb.YTPlayer">Video background</a> - Header video background or any section with video</li>
                </ul>
                <p>If you have any questions please feel free to email<a href="mailto:info@themewagon.com">&nbsp; here</a></p>
              </div>
            </div>
          </div>
        </section>
        <section class="module-medium" id="changelog">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Changelog</h2>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <p> Version 1.0 - Initial Release</p>
              </div>
            </div>
          </div>
        </section>
      </div>
      <script src="assets/lib/prettify.js"></script>
      <script>
        !function ($) {
            $(function () {
                window.prettyPrint && prettyPrint()
            })
        }(jQuery)
      </script>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/lib/prettify.js"></script>
    <script>
      !function ($) {
          $(function () {
              window.prettyPrint && prettyPrint()
          })
      }(jQuery)
    </script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>