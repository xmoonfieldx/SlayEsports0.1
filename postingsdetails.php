<!DOCTYPE html>
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
  </ul>

<div class="container">
  <img src="https://img.wattpad.com/137d285879a87476f381a49ff651f5a16988c7ca/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f776174747061642d6d656469612d736572766963652f53746f7279496d6167652f454e49597a354a66746c356567673d3d2d313232373639393232372e313666313531636436303936646434333533353532333632353733372e706e67" style="width:100%;opacity:1.5">
  <p id="paragraph">
    <!--Display stuff from database-->
    <button class="button-85" style="float:right;">Submit Application</button>
    <?php
    $name=$_GET['name']; 
    include('connect.php');
    $sql = "select * from posting where name='".$name."';";  
        $result = $conn->query($sql);
    if (!empty($result) && $result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                           echo "GAMING CLUB: ".$row["NAME"];
                           echo "<br/><br/>GAME: ".$row["SPORT"];
                           echo "<br/><br/>POSITION: ".$row["POSITION"];
                           echo "<br/><br/>TIME LEFT: ".$row["TIME"];
    }
    ?>
    <br/><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec. Eu sem integer vitae justo eget magna fermentum iaculis eu. Ac ut consequat semper viverra nam. Non odio euismod lacinia at quis risus. Amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus et. Est velit egestas dui id ornare arcu odio ut. Neque laoreet suspendisse interdum consectetur libero id faucibus nisl. Volutpat odio facilisis mauris sit amet. Diam sit amet nisl suscipit adipiscing bibendum. Lacus sed turpis tincidunt id aliquet. Est ullamcorper eget nulla facilisi etiam.
    <br/><br/>
    Faucibus ornare suspendisse sed nisi. Volutpat maecenas volutpat blandit aliquam etiam erat. Sit amet consectetur adipiscing elit pellentesque habitant. Purus sit amet volutpat consequat. In mollis nunc sed id semper. Est ante in nibh mauris cursus mattis molestie a iaculis. Maecenas sed enim ut sem viverra aliquet eget sit. Eu consequat ac felis donec et odio. Et molestie ac feugiat sed lectus vestibulum mattis. At augue eget arcu dictum. Faucibus vitae aliquet nec ullamcorper sit. Ultricies leo integer malesuada nunc vel risus. Enim praesent elementum facilisis leo vel. Sit amet venenatis urna cursus. In hendrerit gravida rutrum quisque non tellus orci. Lorem mollis aliquam ut porttitor.
    <br/><br/>
</p>
    </div>
