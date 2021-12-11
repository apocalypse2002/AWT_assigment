<?php
session_start();
unset($_SESSION["reg__"]);
unset($_SESSION["name__"]);
unset($_SESSION["avg__"]);
unset($_SESSION["data_entered__"]);
unset($_SESSION["no_data_retrieval"]);
extract($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/Home.css">
    <script src="./nav.js" defer ></script>
    <style>
      body{
        margin:0px;
        padding: 0px;
      }
    </style>
    <title>Home</title>
  </head>
  <body>
    <div class="header">
      <p >Welcome to student Information Centre
      </p>
      <a href="logout.php"  ><button class="logout">Logout</button></a>  
    </div>
      <div class="buttons">
        <div class="clicks">

          <button onclick="Data_E()" >Data Entry</button>
          
          <button onclick="Data_R()" >Data Retrieval</button>
        </div>

      </div>
      <div class="sports">
        <p>My Favourite Players</p>
      </div>
      <div class="images">
          <div class="image"> <a href="https://en.wikipedia.org/wiki/Shikhar_Dhawan"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/SHIKHAR_DHAWAN_%2816005494418%29.jpg/260px-SHIKHAR_DHAWAN_%2816005494418%29.jpg" alt="Shikhar_Dhawan"></a> 
          </div>
          <div class="image">
            <a href="https://en.wikipedia.org/wiki/David_Warner_(cricketer)"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/DAVID_WARNER_%2811704782453%29.jpg/260px-DAVID_WARNER_%2811704782453%29.jpg" alt="David Warner"></a>
            </div>
          <div class="image">
            <a href="https://en.wikipedia.org/wiki/Bhuvneshwar_Kumar"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/80/Bhuvneshwar_Kumar.jpg/260px-Bhuvneshwar_Kumar.jpg" alt="Bhuvneshwar Kumar"></a>
            </div>
          <div class="image">
          <a href="https://en.wikipedia.org/wiki/Rashid_Khan"><img src="https://images.hindustantimes.com/rf/image_size_630x354/HT/p2/2020/06/14/Pictures/rashid-khan_056f9fa6-ae32-11ea-99c1-b8a846b2b30c.jpg" alt="Rashid Khan"></a>  
          </div>
          <div class="image">
          <a href="https://en.wikipedia.org/wiki/Ravichandran_Ashwin"><img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Ravichandran_Ashwin_%28cropped%29.jpg" alt="Ravichandran Ashwin"></a>  
          </div>
      </div>
      <footer class="foot">
        
          <p><?php  echo $name  ?></p>
          <p><?php  echo $email  ?></p>
          <p><?php  echo $reg  ?></p>
      </footer>
  </body>
</html>
