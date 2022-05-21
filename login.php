<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  
</head>
<head>
    <style>
        body {
          background-image: url('https://wallpaperaccess.com/full/909679.jpg');
          background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    <div class="center">
       <input type="checkbox" id="show">
       <label for="show" class="show-btn">View Form</label>
       <div class="container">
          <label for="show" class="close-btn fas fa-times" title="close"></label>
          <div class="text">
             Login Form
          </div>
          <?php
             if(isset($username))
                echo"<div style='color:red;text-size:50%;'>login failed </div>";
          ?>
          <form action="authentication.php" method="post">
             <div class="data">
                <label>Email or Phone</label>
                <input type="text" required name="username">
             </div>
             <div class="data">
                <label>Password</label>
                <input type="password" required name="password">
             </div>
             <div class="forgot-pass">
                <a href="#">Forgot Password?</a>
             </div>
             <div class="btn">
                <div class="inner"></div>
                <button type="submit">login</button>
             </div>
             <div class="signup-link">
                Not a member? <a href="#">Signup now</a>
             </div>
          </form>
       </div>
    </div>
 </body>
 <body>
     <div class="textf">
         New Here?
     </div>

 </body>
</html>
<?php


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
