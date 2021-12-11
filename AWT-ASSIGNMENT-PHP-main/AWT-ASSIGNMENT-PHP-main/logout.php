<?php
session_start();
unset($_SESSION["reg"]);
unset($_SESSION["name"]);
unset($_SESSION["email"]);
unset($_SESSION["reg__"]);
unset($_SESSION["name__"]);
unset($_SESSION["avg__"]);
unset($_SESSION["error"]);
unset($_SESSION["data_entered__"]);
unset($_SESSION["no_data_retrieval"]);

header("location: ./login.html");