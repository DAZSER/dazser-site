<?
  $first = $_REQUEST['first'] ;
  $last = $_REQUEST['last'] ;
  $email = $_REQUEST['email'] ;
  $phone = $_REQUEST['phone'] ;
  $area = $_REQUEST['area'] ;
  $comments = $_REQUEST['comments'] ;
  $message = " Name:  $first $last \n Email:  $email \n Phone Number:  $phone \n Interest:  $area \n Comments:  $comments \n ";
  

  if (!isset($_REQUEST['email'])) {
    header( "Location: http://dazser.com/php/index.php?page=contact" );
  }
  elseif (empty($email) || empty($message)) {
    ?>

    <html>
    <head><title>Error</title>
    <link href="../main.css" rel="stylesheet" type="text/css">
    <style type="text/css">
<!--
.style1 {font-size: x-large}
-->
    </style>
    </head>
    <body>
    <h1 class="style1">Error</h1>
    <p>
    Oops, it appears you forgot to enter either your
    email address or your message. Please press the BACK
    button in your browser and try again.    </p>
    </body>
    </html>

    <?
  }
  else {
   mail( "glitch1501@yahoo.com", "Contact Form Submission",
          $message, "From: $email" );
   header( "Location: http://www.dazser.com/php/thankyou.php" );
  }
?>