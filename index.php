<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <title>Katia GIL GUZMAN</title>

  <meta name="description" content="Katia Gil Guzman's personal website" />

  <!-- jQuery -->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
-->
  <script src="js/jquery-2.1.0.min.js"></script>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.css"/>
  <script type="text/javascript" src=js/bootstrap.js></script>
<!-- Latest compiled and minified CSS -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
-->
<!-- Optional theme -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
-->
<!-- Latest compiled and minified JavaScript -->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
-->
  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet">

  <!-- Chrome, Firefox OS and Opera custom adress bar color-->
  <meta name="theme-color" content="#c80226">
  <!-- Windows Phone custom adress bar color-->
  <meta name="msapplication-navbutton-color" content="#c80226">
  <!-- iOS Safari custom adress bar color-->
  <meta name="apple-mobile-web-app-status-bar-style" content="#c80226">

  <!-- Personal stylesheet -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Scroll effect JQuery -->
	<script src="js/scroll/jquery.scrolly.min.js"></script>
	<script src="js/scroll/jquery.scrollex.min.js"></script>
	<script src="js/scroll/skel.min.js"></script>
	<script src="js/scroll/util.js"></script>
	<script src="js/scroll/main.js"></script>

  <!-- Google Analytics -->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-89593971-1', 'auto');
  ga('send', 'pageview');
  </script>

</head>

<body align="center">

  <header>
    <div class="row">
    <div id="photo" class="col-md-6">
    </div>

    <div id="description" class="col-md-6">

      <p id="presentation" align="justify-center">
        Hi, my name is Katia Gil Guzman. I enjoy developing apps & games and learning new things.
        I'll soon be working as a Software Engineer at Microsoft, focusing mostly on AI & Mixed Reality.
        If you'd like to see what I do, click on the links below!
      </p>

      <a href="#projects" id="goToProjects">Check out my projects > </a>
    </div>

  </div>

  </header>

  <?php include "php/nav.php" ?>

  <?php include "php/projects.php" ?>

  <div id="overlayBody"></div>
  <div id="detailsProject">
  </div>

  <footer>
    Copyright © 2018 | Katia Gil Guzman
  </footer>

  <script src="js/myJS.js"></script>
</body>

</html>
