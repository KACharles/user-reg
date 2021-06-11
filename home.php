<?php

session_start();

 ?>
 <!DOCTYPE html>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Home Page</title>
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
         <link rel="stylesheet" type="text/css" href="style.css" >
   </head>
   <body>
     <div class="container">
       <a href="logout.php" class="float-right">LOGOUT</a>
       <h1>Welcome <?php echo $_SESSION['username']; ?> </h1>
     </div>

   </body>
 </html>
