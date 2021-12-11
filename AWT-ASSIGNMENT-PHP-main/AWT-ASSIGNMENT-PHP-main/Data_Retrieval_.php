<?php
session_start();

extract($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/data_retrieval.css">
    <script src="./nav.js" defer></script>
    <style>
      body{
        margin:0px;
        padding: 0px;
      }
    </style>
    <title>Document</title>
  </head>
  <body>
    <div class="header">
      <p >Data Retrieval of Students
      </p>
     <span><button class="logout" onclick="Go_home()">Go Home</button></span> 
    </div>
    <div class="form_div">

      <form class="form" action="Data_Retrieval.php" method="post">
        <label for="">Enter the registration number</label>
        <input type="text" id="data" name="data" placeholder="Reg no"/>
        <button class="btn_submit" type="submit">Submit</button>
      </form>
 <?php if(isset($name__) && isset($reg__) && isset($avg__)){
       echo "<div class='details'><span class='detail'>Name: $name__ </span><span class='detail'>Regno: $reg__ </span><span class='detail'>Average marks: $avg__ </span></div>";
      

       echo '
       <h4 class="update_me">Update</h4>
       <form class="form2" action="update.php" method="post">
       <div class="mar">
       <label for="first">Serial_no</label><br/>
      <input type="number" id="first" name="update_sno" placeholder="Serial no" /></div>
      <div class="mar">
      <label for="second">Name</label><br/>
      <input type="text" id="second" name="update_name" placeholder="Name" />
      </div>
      <div class="mar">
      <label for="third">Subject_1</label><br/>
      <input type="number" id="third" name="update_sub1" placeholder="Subject1" />
      </div>
      <div class="mar">
      <label for="fourth">Subject_2</label><br/>
      <input type="number" id="fourth" name="update_sub2" placeholder="Subject2"/>
      </div>
      <div class="mar">
      <label for="fifth">Subject_3</label><br/>
      <input type="number" id="fifth" name="update_sub3" placeholder="Subject3"/>
      </div>
      <button class="btn_submit" type="submit">Submit</button>
    </form>
       
       ';
 }
  if(isset($no_data_retrieval) ){
    echo "<h2>$no_data_retrieval</h2>";
  }
 
 ?>
    </div>



  </body>
</html>
