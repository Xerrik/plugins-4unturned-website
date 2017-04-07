<?php $ToEmail = 'teyhota@4unturned.tk'; $EmailSubject = 'Contact Form'; $body = "Name: ".$_POST["name"]."\r\n"; $body .= "Email: ".$_POST["email"]."\r\n"; $body .= "Message: ".$_POST["message"]."\r\n"; mail($ToEmail, $EmailSubject, $body); ?>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Plugins 4Unturned!</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

<style>
@font-face
{
font-family: N0c8y_dasvG2CzM7uYqPLn06qf9KHRHwsVx7iw5MXmY;
src: url('http://plugins.4unturned.tk/N0c8y_dasvG2CzM7uYqPLn06qf9KHRHwsVx7iw5MXmY.ttf');
}

h7
{
font-family: 'N0c8y_dasvG2CzM7uYqPLn06qf9KHRHwsVx7iw5MXmY', Times, serif;
}

h2
{
font-family: 'N0c8y_dasvG2CzM7uYqPLn06qf9KHRHwsVx7iw5MXmY', Times, serif;
}

.modal.in {
   display:block;
}
</style>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container">
      <a href="/" class="brand-logo waves-effect"><img src="img/logo.png" height="45" width="45" align="center"/><font face="N0c8y_dasvG2CzM7uYqPLn06qf9KHRHwsVx7iw5MXmY">&nbsp;Plugins 4Unturned</font></a>
      <ul class="right hide-on-med-and-down">

<ul id="dropdown1" class="dropdown-content">
    <li><a href="plugin/AdvancedChatControl" class="waves-effect"><font color="#01e576">AdvancedChatControl</font></a></li>
    <li><a href="plugin/CustomKits" class="waves-effect"><font color="#01e576">CustomKits</font></a></li>
    <li><a href="plugin/NameKicker" class="waves-effect"><font color="#01e576">NameKicker</font></a></li>
  </ul>
<ul id="dropdown2" class="dropdown-content">
    <li><a href="plugin/AdvancedChatControl" class="waves-effect"><font color="#01e576">AdvancedChatControl</font></a></li>
    <li><a href="plugin/CustomKits" class="waves-effect"><font color="#01e576">CustomKits</font></a></li>
    <li><a href="plugin/NameKicker" class="waves-effect"><font color="#01e576">NameKicker</font></a></li>
  </ul>
        <li><a class="dropdown-button waves-effect" href="#" data-activates="dropdown1" data-constrainWidth="false" data-hover="true"><i class="material-icons">apps arrow_drop_down</i></a></li>
        <li><a class="tooltipped" data-position="bottom" data-delay="250" data-tooltip="Support" href="support"><i class="material-icons">accessibility</i></a></li>
        <li><a class="tooltipped" data-position="bottom" data-delay="250" data-tooltip="Contact" href="contact"><i class="material-icons">contact_mail</i></a></li>
        <li><a class="tooltipped" data-position="bottom" data-delay="250" data-tooltip="About" href="about"><i class="material-icons">info_outline</i></a></li>
      </ul>

<!-- MOBILE NAV BAR -->
<ul id="nav-mobile" class="side-nav">
           <li><a class="dropdown-button waves-effect" href="#" data-activates="dropdown2" data-constrainWidth="false"><i class="material-icons">apps arrow_drop_down</i>Plugins</a></li>
           <li><a href="support"><i class="material-icons">accessibility</i>Support</a></li>
           <li><a href="contact"><i class="material-icons">contact_mail</i>Contact</a></li>
           <li><a href="about"><i class="material-icons">info_outline</i>About</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"></a>

    </div>
  </nav>

  <!-- stuff here -->
<br><br><br><br><br><br><br><br><br>

  <div id="modal" class="modal in">
    <div class="modal-content">
      <h4>Success!</h4>
      <p>Your form has been submitted! Please wait up to 72 hours for a response.</p>
      <a href="contact" class="modal-action modal-close waves-effect btn-flat" style="float:right;">OK</a>
    </div>
  </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  <!-- END stuff here -->

  <footer class="page-footer orange">

    <div class="container">
        <div class="col l6 s12">
           <center>
            <h7>
              <a class="white-text" href="terms">Terms of Service</a><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;</font>
              <a class="white-text" href="privacy-policy">Privacy Policy</a><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;</font>
              <a class="white-text" href="beta-program">Beta Program</a><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;</font>
              <a class="white-text" href="faq">FAQ</a><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;</font>
              <a class="white-text" href="about">About</a>
           </h7>
          </center>
        </div>
    </div>
              <br>

    <div class="footer-copyright">
       <center>
        <h7>
          <a class="white-text" href="http://steamcommunity.com/id/Teyhota"><b>Teyhota</b></a> (C) Copyright 2017
        </h7>
       </center>
    </div>

  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>