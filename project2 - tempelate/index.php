<?php
    include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<scrtip src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- CSS for form -->
<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="styleform.css" rel="stylesheet">
    <title>***form</title>
</head>
<body>


      <div class="container">
    <form id="contactform" method="post" class="form-control" action="send.php">

    <div class="form-group">
        <label>Your Name</label><input type="text" class="form-control" placeholder="Your Name" name="yourname">
    </div>

    <div class="form-group">
        <label>Your Email</label><input type="email"  class="form-control" placeholder="Your Email" name="yournemail">
    </div>
    <div class="form-group">
        <label>Your Message</label>
        <textarea name="yourmessage" placeholder="Your Message" class="form-control"></textarea>
    </div>
    <div class="form-group">
        
        <button type="submit">Submit</button>
    </div>
    </form>
</div>
      
    </div>
  </section>

  <!-- footer -->
  <footer class="page-footer white lighten-1">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="black-text">Contact Us</h5>
          <p class="grey-text">You can reach us from everywhere in the world via sustainablecoffe@gmail.com. <br>Let's share a common ground to the world make better.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text"></h5>
          <ul>
            <li class="left-align"><img src="logo_h2020.png" alt="Unsplashed background img 1"></a></li>
            <li class="row center"><img src="NSFC.jpg" alt="Unsplashed background img 1"></li>
          </ul>
        </div>
      </div>
    </div>
   <div class="footer-copyright green lighten-1">
      <div class="container">
        The entirety of this site is protected by copyright © 1999–2021.<a class="brown-text text-lighten-3" href="http://materializecss.com"></a>
    </div>
    </div>
  </footer>
  <!-- Compiled and minified JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script>
    $(document).ready(function(){

      $('.sidenav').sidenav();
      $('.materialboxed').materialbox();
      $('.parallax').parallax();
      $('.tabs').tabs();
      $('.datepicker').datepicker({
        disableWeekends: true,
        yearRange: 1
      });

    });

    $(document).ready(function(){

$('#contactform').validate({

    submitHandler: function(form){
        var form = $("#contactform").serialize();
        var url= $("#contactform").attr('action');

        $.ajax({

            type:'post',
            url: url,
            data: form,

            success: function(response){
                alert('Email sent');

            }
        })
    }
});

});

  </script>
</body>
</html>