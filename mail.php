<?php

$recepient = "rpathirana836@gmail.com";
$sitename = "Ruwan";

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$message = trim($_POST["message"]);


$pagetitle = "New message from the" .$name."<".$email.">";
mail($recepient, ,$message,$pagetitle )
or die("Error!");


