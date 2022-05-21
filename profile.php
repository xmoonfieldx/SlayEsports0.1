<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <title></title>
    <!--boot-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"/>
    <!---------CSS-------------------------------->
    <link rel="stylesheet" href="SUAstyle.css" type="text/css"/>
    <!--------------Font--------------------------------------->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    body{
      margin: 0;
      padding: 0;
      background:#A79AFF;
      background-size: contain;

    }
    .form-control:focus {

    border-color:rgb(0, 105, 217);

    box-shadow: 0 0 0 0.2rem rgba(0, 105, 217,1);
    }
    #btn{
      display: block;
    }

    </style>



</head>
<body>

  <div class="container-fluid" id="main" style="display:block;">
  <br>
  <div class="jumbotron">
  <h1 class="display-4">Profile Page</h1>
  <p class="lead">Slay Esports</p>
</div>
    <div class="row">
      <div class="col-md-6">
  <form>
  <h4 class="text-center">Personal Information</h4>
  <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">Profile Image :</label>
    <div class="col-sm-9">

  <div class="custom-file">
    <input type="file" class="custom-file-input" id="profile_image" onchange="upload(this.value)">
    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02"></label>
  </div>

  </div>



</div>
  <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">First Name :</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="first_name" placeholder="Enter name">
    </div>
  </div>
   <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">Second Name :</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="second_name" placeholder="Second name">
    </div>
  </div>
  <h4 class="text-center">Age</h4>
  <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">Age :</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" id="age" placeholder="age">
    </div>
    </div>
    <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">Contact number :</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="phone_no" placeholder="Enter contact">
    </div>
    </div>
    <h4 class="text-center">Social Media</h4>
  <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">Email :</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="email" placeholder="eg@gmail.com">
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">Discord Username-Tag :</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="discord" placeholder="">
    </div>

    </div>
    <h4 class="text-center">Languages</h4>
    <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">Language I:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="language1_value" placeholder="">
    </div>


  </div>
  <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">Level :</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" id="language1_level" placeholder="in percent">
    </div>
    </div>
    <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">Language II:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="language2_value" placeholder="">
    </div>


  </div>
  <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">Level :</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" id="language2_level" placeholder="in percent">
    </div>
    </div>


    <h4 class="text-center">Skills I</h4>
    <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">Skill Name :</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="skill1_value" placeholder="write something">
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">Level :</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" id="skill1_level" placeholder="bruh write in percent">
    </div>
  </div>
 
  
  <h4 class="text-center">Gaming Handle</h4>
    <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">Name of the game you play :</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="gameName" placeholder="valo?">
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">Your position in this Game :</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="position1" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">Your Favourite Character(if applicable):</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" id="char" placeholder="sage?">
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">Name of the game you play :</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" id="gameName2" placeholder="apex?">
    </div>
  </div>
  <h4 class="text-center"></h4>
    <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">Your position in this game :</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="position2" placeholder="in percent">
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">Your Favourite Character (if applicable):</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" id="char2" placeholder="bangalore?">
    </div>
  </div>



</form>
</div>
<div class="col-md-6">
  <h4 class="text-center">Tournaments you have won :</h4>
  <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">Game 1:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="tour1" placeholder="">
    </div>
  </div>

  <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">Game 2 :</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="tour2" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">Game 3 :</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="tour3" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">Tournaments you have come close to winning :</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="T1" placeholder="">
    </div>
  </div>
    <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">Game 1 :</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="T2" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">Game 2 :</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="T3" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">Are you a good team player?(Yes/No) :</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="YN" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">Do you have good on spot thinking?(Yes/No) :</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="YN1" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">How many years have you been playing :</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" id="year" placeholder="">
    </div>
  </div>
    <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">What organizations have you been with:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="org1" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">Name them :</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="org2" placeholder="org ">
    </div>
  </div>
  <h4 class="text-center">Link to the recording of matches you wish to highlight</h4>
  <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">link 1:</label>
    <div class="col-sm-9">
      <input type="url" class="form-control" id="link1" placeholder="https://">
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">link 2:</label>
    <div class="col-sm-9">
      <input type="url" class="form-control" id="link2" placeholder="https://">
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">link 3 :</label>
    <div class="col-sm-9">
      <input type="url" class="form-control" id="link3" placeholder="https://">
    </div>
  </div>
  <h4 class="text-center">Personality</h4>
    <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">Personality Type :</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="person" placeholder="">
    </div>
  </div>
  <div class="d-flex position-relative">
    <div>
      <h5 class="center-text">Personality Test</h5>
      <p>Don't know your personailty type? you can take up here!</p>
      <a href="https://www.16personalities.com/free-personality-test" class="stretched-link">click</a>
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-sm-3 col-form-label">Nationality :</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="nation" placeholder="">
    </div>
  </div>
  
  
 

</div>
</div>
</div>
