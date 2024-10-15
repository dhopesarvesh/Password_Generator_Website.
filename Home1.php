<!-- starting php code -->
<?php
                  //first we leave this input field blank
                  $recipient = "";
                  $pw = "";
                  //if user click the send button
                  if(isset($_POST['send'])){
                      //access user entered data
                     $recipient = $_POST['email'];
                     $subject  = "Your Password : ";
                     $message1 = "Thank u for using mypasscode";
                     $message  = $_POST['message'] ;  
                 
                      
                 
                    
                     
                     $sender = "mypasscodeproject@gmail.com";
                     //if user leave empty field among one of them
                     if(empty($recipient)){
                         ?>
               <!-- display an alert message if one of them field is empty -->
               <div class="alert alert-danger text-center">
                  <?php echo "All inputs are required!" ?>
               </div>
               <?php
                  }else{
                      // PHP function to send mail
                     if(mail($recipient, $subject, $message1, $message, $sender)){
                      ?>
               <!-- display a success message if once mail sent sucessfully -->
               <div class="alert alert-success text-center">
                  <?php echo "Your mail successfully sent to $recipient"?>
               </div>
               <?php
                  $recipient = "";
                  }else{
                   ?>
               <!-- display an alert message if somehow mail can't be sent -->
               <div class="alert alert-danger text-center">
                  <?php echo "Failed while sending your mail!" ?>
               </div>
               <?php
                  }
                  }
                  }
                  ?> <!-- end of php code -->
<?php
		function randomPassword($alphabet, $pwlen) {
			$pass = array(); 
			$alphaLength = strlen($alphabet) - 1; 
			for ($i = 0; $i < $pwlen; $i++) {
				$n = rand(0, $alphaLength);
				$pass[] = $alphabet[$n];
			}
			return implode($pass); 
		}
		
		function validatepassword($pw){
			global $alphalo;
			global $alphahi;
			global $numeric;
			global $symbol1;
			global $symbol2;
			
			if ($alphalo) {if (preg_match('@[a-z]@', $pw)) {$alphalopm = true;} else {$alphalopm = false;}} else {$alphalopm = true;}
			if ($alphahi) {if (preg_match('@[A-Z]@', $pw)) {$alphahipm = true;} else {$alphahipm = false;}} else {$alphahipm = true;}
			if ($numeric) {if (preg_match('@[0-9]@', $pw)) {$numericpm = true;} else {$numericpm = false;}} else {$numericpm = true;}
			if ($symbol1) {if (preg_match('@[\+\-\_\=\!\#\$\&]@', $pw)) {$symbol1pm = true;} else {$symbol1pm = false;}} else {$symbol1pm = true;}
			if ($symbol2) {if (preg_match('@[\*\,\.\:\?\^\~\%]@', $pw)) {$symbol2pm = true;} else {$symbol2pm = false;}} else {$symbol2pm = true;}

			if ($alphalopm && $alphahipm && $numericpm && $symbol1pm && $symbol2pm){$pwvalid = true;} else {$pwvalid = false;}
			
			return $pwvalid;
		}	

		if (isset($_POST['pwlen'])){$pwlen = $_POST['pwlen'];} else {$pwlen = 12;}
		if (isset($_POST['alphalo'])){$alphalo = $_POST['alphalo'];} else {$alphalo = "";}
		if (isset($_POST['alphahi'])){$alphahi = $_POST['alphahi'];} else {$alphahi = "";}
		if (isset($_POST['numeric'])){$numeric = $_POST['numeric'];} else {$numeric = "";}
		if (isset($_POST['symbol1'])){$symbol1 = $_POST['symbol1'];} else {$symbol1 = "";}
		if (isset($_POST['symbol2'])){$symbol2 = $_POST['symbol2'];} else {$symbol2 = "";}

		?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
   
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">

   
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#4d6eaa">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"> 
    <section class="u-carousel u-slide u-block-4532-1" id="carousel_c698" data-interval="5000" data-u-ride="carousel">
      <ol class="u-absolute-hcenter u-carousel-indicators u-block-4532-2">
        <li data-u-target="#carousel_c698" class="u-active u-grey-30" data-u-slide-to="0"></li>
      </ol>
      <div class="u-carousel-inner" role="listbox">
        <div class="u-active u-align-left u-carousel-item u-clearfix u-palette-5-base u-section-1-1">
          <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
              <div class="u-layout">
                <div class="u-layout-row">
                  <div class="u-container-style u-layout-cell u-right-cell u-size-60 u-layout-cell-1">
                    <div class="u-container-layout u-container-layout-1">
                      <a href="Home.html" class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-none u-text-black u-text-hover-white u-btn-1">Home</a>
                      <a href="Contact.html" class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-none u-text-black u-text-hover-white u-btn-2">contact</a>
                      <p class="u-custom-font u-font-merriweather u-text u-text-1">mypasscode </p>
                      <h3 class="u-custom-font u-font-georgia u-text u-text-2">random password generator website</h3>
                      <img class="u-image u-image-round u-radius-10 u-image-1" src="images/mlogo1.PNG" alt="" data-image-width="863" data-image-height="432">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-hidden u-text-body-alt-color u-block-4532-3" href="#carousel_c698" role="button" data-u-slide="prev">
        <span aria-hidden="true">
          <svg viewBox="0 0 256 256"><g><polygon points="207.093,30.187 176.907,0 48.907,128 176.907,256 207.093,225.813 109.28,128"></polygon>
</g></svg>
        </span>
        <span class="sr-only">
          <svg viewBox="0 0 256 256"><g><polygon points="207.093,30.187 176.907,0 48.907,128 176.907,256 207.093,225.813 109.28,128"></polygon>
</g></svg>
        </span>
      </a>
      <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-hidden u-text-body-alt-color u-block-4532-4" href="#carousel_c698" role="button" data-u-slide="next">
        <span aria-hidden="true">
          <svg viewBox="0 0 306 306"><g id="chevron-right"><polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153"></polygon>
</g></svg>
        </span>
        <span class="sr-only">
          <svg viewBox="0 0 306 306"><g id="chevron-right"><polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153"></polygon>
</g></svg>
        </span>
      </a>
    </section>
 <?php

		if (!($alphalo || $alphahi || $numeric || $symbol1 || $symbol2)){
			echo "No password alphabet attributes selected. Please check at least one box above.";
		} else {
			$alphabet = $alphalo.$alphahi.$numeric.$symbol1.$symbol2;
			do {
				$pw = randomPassword($alphabet, $pwlen);
				if (validatepassword($pw)) {
					echo "Your randomly created password: ";
				}
			} while (!(validatepassword($pw)));
		}
	?>
    <section>
      <div class="text-center">
      <label> Generate Password </label>
  </div>
    <form action="Home1.php" method="POST">
                  <div class="form-group">
                     <input class="form-control" name="email" type="email" placeholder="Recipients" value="<?php echo $recipient ?>">
                  </div>
                  <div class="form-group">
                     <input class="form-control" name="subject" type="text" style="display:none;" placeholder="Subject" value="" readonly>
                  </div>
                  <div class="form-group">
                     <input class="form-control" name="message1" type="text" style="display:none;" placeholder="Subject" value="" readonly>
                  </div>
			 <div class="form-group">
                     <input class="form-control" name="message" type="text" style="display:none;" value="<?php echo $pw ?>">
		</div>
    
                  <div class="form-group">
                     <!-- change this tag name into textarea to show textarea field. Due to more textarea I got an error, so I change the name of this field -->
                     <!-- <changeit cols="30" rows="5" class="form-control textarea" name="message" placeholder="Compose your message.."></changeit> -->
                  </div>
                  <div class="form-group">
                    <center>
                  <label for="pwlen">Password Length (between 5 and 18):</label>
			<input type="number" id="pwlen" name="pwlen" min="5" max="18" value="<?php echo $pwlen;?>"><br><br>
			<input type="checkbox" name="alphalo" value="abcdefghijklmnopqrstuvwxyz" <?php if ($alphalo){echo "checked";}?> >Alpha Lower Case</input><br>
			<input type="checkbox" name="alphahi" value="ABCDEFGHIJKLMNOPQRSTUVWXYZ" <?php if ($alphahi){echo "checked";}?> >Alpha Upper Case</input><br>
			<input type="checkbox" name="numeric" value="0123456789" <?php if ($numeric){echo "checked";}?> >Numeric</input><br>
			<input type="checkbox" name="symbol1" value="+-_=!#$&" <?php if ($symbol1){echo "checked";}?> >Symbols: +-_=!#$&</input><br>
			<input type="checkbox" name="symbol2" value="*,.:?^~%" <?php if ($symbol2){echo "checked";}?> >Symbols: *,.:?^~%</input><br><br>
			
                     <input class="form-control button btn-primary" type="submit" name="send" value="Generate">
                    </div>
                    </center>
                  </div>
               </form>
            </div>
         </div>
      </div>
</section>
   
    
  </body>
</html>