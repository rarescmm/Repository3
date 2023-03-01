<?php 
    
    require "vendor/components/connect.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="Style.css">
<title>Форум</title>
</head>
<body>
<div class="header">
  <h1>Онлайн учебник</h1>
  <p>HTMLиCSS</p>
</div>


<div class="navbar">
<a href="index.php">Главная</a>
<a href="html.php">HTML</a>
<a href="css.php">CSS</a>
<a href="task.php">Задачи</a>
<a href="comm.php" class="right">Форум</a>
</div>
<main>
<form name= "comment" action="vendor/action/comment.php" method="post">
<label for="name">Имя</label>
<input type="text" id="name" name="name" required>


<label for="email">Email:</label>
<input type="email" id="email" name="email" required>


<label for="comment">Сообщение:</label>
<textarea type="text" id="comment" name="comment" required></textarea>


<input type="submit" value="Отправить" >
</form>
<hr>
<h2>Комментарии</h2>
<div class="comments">
<div class="comment">
<?php
$comments = mysqli_query($link, 'SELECT * FROM `comments`'); 
while($comment = mysqli_fetch_array($comments)){
    ?>
    <section>
        
        <div>
         <p><strong> Имя:</strong> <?php echo $comment['name'] ?></p>
        </div>
        <div>
      	 <p><strong>Комментарий:</strong><?php echo $comment['comment'] ?></p>
        </div>
    </section>
<?php
}
?>
</div>
</div>
</main>
<footer>
<p>&copy;2023 </p>
</footer>
</body>
</html>