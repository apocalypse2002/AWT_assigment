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
    <link rel="stylesheet" href="./css/data_entry.css">
    <script src="./nav.js" defer ></script>
    <style>
      body{
        margin:0px;
        padding: 0px;
      }
    </style>
    <title>data_entry</title>
  </head>
  <body>
    <div class="header">
      <p >Enter Student Data
      </p>
     <span><button class="logout" onclick="Go_home()">Go Home</button></span> 
    </div>
    <div class="form_div">

      <form class="form" action="Data_Entry.php" method="post">
        <label for="serial">Serial no</label>
        <input type="text" id="serial" name="serial_no" placeholder="Serial no"/>
        <label for="regno">Regno</label>
        <input type="text" id="regno" name="regno" placeholder="Reg Number" />
        <label for="name">Name</label>
        <input type="text" id="name" name="Name" placeholder="Name" />
        <label for="sub1">Subject1</label>
        <input type="number" id="sub1" name="sub1" placeholder="Subject1" />
        <label for="sub2">Subject2</label>
        <input type="number" id="sub2" name="sub2" placeholder="Subject2" />
        <label for="sub3">Subject3</label>
        <input type="number" id="sub3" name="sub3" placeholder="Subject3" />
  
        <button type="submit" class="btn_submit">Submit</button>
      </form>
    <?php if(isset($data_entered__)){
       echo"
       <h2 class='data_entered'>$data_entered__ Data Entered</h2>
       ";
 }
 ?>
    </div>
  </body>
</html>
