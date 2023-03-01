<?php
  /* Принимаем данные из формы */
  $name = $_POST["name"];
  $email = $_POST["email"];
  $comment = $_POST["comment"];
  $name = htmlspecialchars($name);
  $comment = htmlspecialchars($comment);
  $mysqli = new mysqli("localhost", "root", "root", "tutorial");
  $mysqli->query("INSERT INTO `comments` (`name`, `email`, `comment`) VALUES ('$name', '$email', '$comment')");
  header("Location: ".$_SERVER["HTTP_REFERER"]);
?>
