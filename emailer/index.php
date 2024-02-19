<?php
if (empty($_POST)) {
    http_response_code(400); exit;
}
if(empty($_SERVER['CONTENT_TYPE']))
{ 
 $_SERVER['CONTENT_TYPE'] = "application/x-www-form-urlencoded"; 
}
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Page metadata -->
        <meta charset="utf-8">
        <title>E-portfolio - Contact</title>
		<meta name="description" content="Markus Maal's personal e-portfolio" >
		<meta name="keywords" content="introduction, interests, education" >
		<meta name="author" content="Markus Maal" >
		<meta name="viewport" content="width=device-width, initial-scale=1" >
		<!-- Set favicon -->
        <link rel="icon" type="image/x-icon" href="/veebiarendus/portfoolio/favicon.ico">
		<!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
		<!-- My CSS -->
		<link rel="stylesheet" type="text/css" href="../css/style.css" >
		<!-- Fontawesome -->
	    <script src="https://kit.fontawesome.com/d325d04eee.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- Head of page -->
        <header class="top">
            <!-- Accessible 1/2-tab shortcuts -->
            <a href="#page_main" class="accessible-pointer" tabindex="1">Jump to main content</a>
            <a href="#navbar" class="accessible-pointer" tabindex="2">Jump to navigation</a>
            <!-- Social links -->
            <nav class="navbar navbar-dark bg-white navbar-expand-lg" id="top-nav">
    			<div id="socialNav">
    				<ul class="navbar-nav">
                        <li class="nav-item"><a id="SocialFB" title="Facebook profile" target="_blank" class="nav-link" href="https://www.facebook.com/profile.php?id=100007869184738"><i class="fa-brands fa-facebook"></i></a></li>
                        <li class="nav-item"><a id="SocialYT" title="YouTube channel" target="_blank" class="nav-link" href="https://www.youtube.com/@markusTegelane"><i class="fa-brands fa-youtube"></i></a></li>
                        <li class="nav-item"><a id="SocialTwitter" title="Twitter account" target="_blank" class="nav-link" href="https://www.twitter.com/@markustegelane"><i class="fa-brands fa-twitter"></i></a></li>
                        <li class="nav-item"><a id="SocialGitHub" title="GitHub repositories" target="_blank" class="nav-link" href="https://github.com/MarkusMaal?tab=repositories"><i class="fa-brands fa-github"></i></a></li>
                    </ul>
                </div>
            </nav>
            <!-- Logo -->
            <div class="col-md-12 bg-white" id="Logo">
                <a href="../index.html"><img title="Markus Maal" src="../img/logo_joontega_v5.svg" alt="Markus Maal logo"></a>
            </div>
            <!-- Primary navigation bar -->

            <nav id="navbar" class="navbar navbar-expand-lg navbar-light">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto my-4">
                  <li class="nav-item">
                    <a class="row mx-1 btn btn-outline-primary col-sm" href="../index.html">General info</a>
                  </li>
                  <li class="nav-item">
                    <a class="row mx-1 btn btn-outline-primary col-sm" href="../educations.html">Education</a>
                  </li>
                  <li class="nav-item">
                    <a class="row mx-1 btn btn-outline-primary col-sm" href="../practice.html">Projects</a>
                  </li>
                  <li class="nav-item active">
                    <a class="row mx-1 btn btn-primary col-sm" href="../contact.html">Contact</a>
                  </li>
                </ul>
              </div>
            </nav>
            <!-- Add a line at the end of the header -->
            <hr class="my-0 col-md-12 bg-white">
        </header>
        <!-- START OF Main content -->
        <div id="page_main">
<?php
   // Send e-mail to recipient
   $from = "markusmaal-portfoolio@ikt.khk.ee";
   $to = "markus.maal@voco.ee";
   $subject = "Uus sõnum e-portfoolio kontaktvormist";
   $message = "Teile saadeti sõnum:\n\nVastuse saatmise meiliaadress: " . $_POST["cMail"] . "\n\nSaatja: " . $_POST["cName"] . "\nSisu: " . $_POST["cMessage"] . "\n\nSee kiri saadeti teile, kuna olete Markus Maal-i e-portfoolio omanik. Tegu on automaatse kirjaga, millele pole vaja vastata.";
   $headers = "MIME-Version: 1.0" . "\r\n";
   $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
   $headers = "From:" . $from;
   mail($to,$subject,$message, $headers);
   
   // Send e-mail to sender
   $from = "markusmaal-portfoolio@ikt.khk.ee";
   $to = $_POST["cMail"];
   $subject = "You sent a message through Markus Maal's e-portfolio contact form";
   $message = "The message was sent out successfully and you may recieve a reply from Markus Maal if requested.\n\nSender: " . $_POST["cName"] . "\nContent: " . $_POST["cMessage"] . "\n\nThis e-mail was sent to you, because you filled out and sent a contact form in my e-portfolio. This is an automated message, which you shouldn't reply to.";
   $headers = "MIME-Version: 1.0" . "\r\n";
   $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
   $headers = "From:" . $from;
   mail($to,$subject,$message, $headers);
   echo '<p>The message has been sent.</p>';
?>
    </div>
    <!-- END OF Main content -->
    <!-- Page footer -->
        <footer class="text-white bg-secondary py-5">
            &copy; 2022 Markus Maal<br>
            All rights reserved
        </footer>
        <!-- Bootstrappy Bootstrap stuff -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>