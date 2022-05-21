<!DOCTYPE html>
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
                    $sql = "SELECT * FROM posting";
                    $result = $conn->query($sql);
                    if (!empty($result) && $result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                           echo '<div class="gaming-club" id="leftbox">';
                           echo '<img src="'.$row['LOGO'].'"/> <br/>';
                           echo $row['NAME'].'<br/><br/>';
                           echo 'POSITION: '.$row['POSITION'].'<br/><br/>';
                           echo '<div class="applied">';
                           echo '<img src="image/control.png" id="applier"/>';
                           echo '<p style="font-size:120%">'.$row['APPLIED'].'</p>';
                           echo '</div>';
                           echo '<br/><br/>';
                           echo '<p><br/>ENDS IN</p>';
                           echo '<p><br/>'.$row['TIME'].'</p>';
                           echo '<form action="postingsdetails.php" method="get" id="formpost">';
                           echo'<input type="hidden" id="custId" name="name" value="'.$row['NAME'].'">'
                           . '<button type="submit" form="formpost" class="button-85">Apply1</button>';
                           echo '</form></div>';
                      }
                    } else {
                      echo "0 results";
                    }
                    $result->close();
                    $conn->close();
                   ?>
                  <!--Template
                  <div class="gaming-club" id="leftbox">
                    <img src="PHP SHOULD CONTAIN LOGO OF AMING CLUB"/>
                    PHP CLUB NAME
                    <br/>
                  SPORT: VALORANT<br/><br/>POSITION: PHP ADD HERE<br/><br/>
                    <div class="applied">
                      <img src="control.png" id="applier"/>
                    </div>
                    <br/><br/>
                    <p><br/>ENDS IN</p>
                    PHP FOR TIME LEFT (SUBTRACT FUNCTION)
                    <p><br/>DAYS  &nbsp&nbspHOURS &nbsp&nbspMINUTES</p>
                    <button class="button-85">Apply</button>
                  </div>

                  </template>-->

                  <div class="gaming-club" id="leftbox">
                    <img src="image/PURPLE DEATH.png"/>
                    PURPLE DEATH CADETS
                    <br/>
                  SPORT: VALORANT<br/><br/>POSITION: SENTINEL<br/><br/>
                    <div class="applied">
                      <img src="image/control.png" id="applier"/>
                    </div>
                    <br/><br/>
                    <p><br/>ENDS IN</p>
                    <p><br/>DAYS  &nbsp&nbspHOURS &nbsp&nbspMINUTES</p>
                    <button class="button-85">Apply</button>
                  </div>

                  <div class="gaming-club" id="leftbox">
                  <img src="image/skull_cookie.png"/>
                    SKULL COOKIE
                    <br/>
                  SPORT: CS:GO<br/><br/>POSITION: LURKER<br/><br/>
                    <div class="applied">
                      <img src="image/control.png" id="applier"/>
                    </div>
                    <br/><br/>
                    <p><br/>ENDS IN</p>
                    <p><br/>DAYS  &nbsp&nbspHOURS &nbsp&nbspMINUTES</p>
                    <button class="button-85">Apply</button>
                  </div>

                  <div class="gaming-club" id="leftbox">
                    <img src="image/akira.png"/>
                      AKIRA
                      <br/>
                    SPORT: CS:GO<br/><br/>POSITION: CARRY<br/><br/>
                      <div class="applied">
                        <img src="image/control.png" id="applier"/>
                      </div>
                      <br/><br/>
                      <p><br/>ENDS IN</p>
                      <p><br/>DAYS  &nbsp&nbspHOURS &nbsp&nbspMINUTES</p>
                      <button class="button-85">Apply</button>
                  </div>

                  <div class="gaming-club" id="leftbox">
                    <img src="image/raktta.png"/>
                      RAKTTA
                      <br/>
                    SPORT: LOL<br/><br/>POSITION: TOP LANER<br/><br/>
                      <div class="applied">
                        <img src="image/control.png" id="applier"/>
                      </div>
                      <br/><br/>
                      <p><br/>ENDS IN</p>
                      <p><br/>DAYS  &nbsp&nbspHOURS &nbsp&nbspMINUTES</p>
                      <button class="button-85">Apply</button>
                  </div>

                  <div class="gaming-club" id="leftbox">
                    <img src="image/fantasy_isn't_faction.png"/>
                      WAAR
                      <br/>
                    SPORT: APEX LEGENDS<br/><br/>POSITION: TOP LANER<br/><br/>
                      <div class="applied">
                        <img src="image/control.png" id="applier"/>
                      </div>
                      <br/><br/>
                      <p><br/>ENDS IN</p>
                      <p><br/>DAYS  &nbsp&nbspHOURS &nbsp&nbspMINUTES</p>
                      <button class="button-85">Apply</button>
                  </div>
                  <div class="gaming-club" id="leftbox">BLUE EYES HYPNOTIZE</div>
              </div>
            </div>

</body>
</html
