<?php
 require 'connect.php';
 ?>
<html>
<head>
  <link rel="stylesheet" href="mystyle.css">
  <style>
  </style>
<title>Page of Postings</title>
</head>
<body>
  <!--Horizontal Navigation Bar-->
  <ul>
    <li><a >Posting</a></li>
    <!--<p style="color: #0000FF">-->
    <!--<li><a href="#news">News</a></li>-->
    <li><a href="#news">News</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#about"><div id="filter">
      <form action="searchposting.php" method="get" id="filter">
          GAME: <input type="text" name="game">
          POSITION: <input type="text" name="position">
          <input type="submit" class="button-85" value="Filter">
      </div></a></li>
  </ul>

  <div class="container">
            <!--Filter
            <div id="filter">
              <form action="welcome_get.php" method="get" id="filter">
                  GAME: <input type="text" name="game">
                  POSITION: <input type="text" name="position">
                  <input type="submit" class="button-85" value="Filter">
              </div>-->
              <!--MongoDB
              It gets redirected to welcome_get.php which should be same code but with filtered content
              db.users.find({"game": /.*m.*/})
                  db.users.find({"position": /.*m.*/})-->


            <!--Postings part-->
            <div id="st-box">
              <div id="follow-up">
                   <?php
                    $sql = "SELECT * FROM posting WHERE SPORT='".strtoupper($_GET['game'])."' AND POSITION='".strtoupper($_GET['position'])."';";
                    $result = $conn->query($sql);
                    if (!empty($result) && $result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                           echo '<div class="gaming-club" id="leftbox">';
                           echo '<img src="'.$row['LOGO'].'"/> <br/>';
                           echo $row['NAME'].'<br/><br/>';
                           echo 'SPORT: '.$row['SPORT'].'<br/><br/>';
                           echo 'POSITION: '.$row['POSITION'].'<br/><br/>';
                           echo '<div class="applied">';
                           echo '<img src="image/control.png" id="applier"/>';
                           echo '<p style="font-size:120%">'.$row['APPLIED'].'</p>';
                           echo '</div>';
                           echo '<br/><br/>';
                           echo '<p><br/>ENDS IN</p>';
                           echo '<p><br/>'.$row['TIME'].'</p>';
                           echo'<button class="button-85">Apply</button>';
                           echo '</div>';
                      }
                    } else {
                      echo "0 results";
                    }
                   ?>
