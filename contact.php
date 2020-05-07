<?php include "header.php"; ?>
<?php include "mail.php"; ?>

<div class="container contact-form">
      <div class="contact-image">
          <span class="mail-icon">📧</span>
      </div>

      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <h3>Drop Me a Message</h3>
      <p>
        Alternatively email me on, <a href="mailto:mbspanishonline@hotmail.com" alt="Email address" aria-hidden="true"> mbspanishonline&#64;hotmail.com</a>
      </p>
      <span class="form-error"><?php print_r($gtokenEr);?></span>
      <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Your Name *" value="<?php echo $name; ?>" tabindex="1" required/>
                </div>
                <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="Your Email *" value="<?php echo $email; ?>" tabindex="2" required/>
                </div>
                <div class="form-group">
                    <input type="text" name="subject" class="form-control" placeholder="Subject *" value="<?php echo $subject; ?>" tabindex="3" required/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <textarea name="message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;" tabindex="4" required><?php echo $message; ?></textarea>
                </div>
            </div>
        </div><!-- /row -->

         <div class="row">
           <div class="col-md-6">
             <div class="form-group text-center">
                 <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" tabindex="5"/>
             </div>
             <div class="form-group">
               <input type="hidden" id="g-token" value="" name="g-token" />
             </div>
           </div>
         </div><!-- /row -->

         <div class="row">
           <div class="col">
             <div class="form-group text-center">
                 <span class="form-error"><?php print_r($nameEr . "<br/>" . $emailEr . "<br/>" . $subjectEr . "<br/>" . $messageEr);?></span>
             </div>
           </div>
         </div><!-- /row -->
      </form>
</div>

<!-- Contact form recaptcha -->
<script src="https://www.google.com/recaptcha/api.js?render=6LdnzOkUAAAAAK1-fzqQ5qzzXlJDZeJdi3_XK18B"></script>

<script>
  // populate the input g-token element with the token from the server when the page loads.
  grecaptcha.ready(function() {
      grecaptcha.execute('6LdnzOkUAAAAAK1-fzqQ5qzzXlJDZeJdi3_XK18B', {action: 'homepage'}).then(function(token) {
         document.getElementById("g-token").value = token;
      });
  });
</script>

<?php include "footer.php"; ?>
