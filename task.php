<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Задачи</title>
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
<button class="accordion"><h2>Задание 1</h2></button>
<div class="panel">
    <p>Создайте веб-страницу, содержащую два коротких предложения, принадлежащих одному абзацу, но расположенных на разных строках. </p>
    <p>Используйте одиночный тег <<span>br</span>> </p>
</div>

<button class="accordion"><h2>Задание 2</h2></button>
<div class="panel">
  <p>Создайте веб-страницу, содержащую два коротких предложения, принадлежащих одному абзацу, но расположенных на разных строках. Сделайте так, чтобы второе предложение не отображалось в окне браузера. Используйте для этого парный тег <<span>span</span>> и универсальный атрибут hidden.</p>
  <p>
    
  </p>
</div>

<button class="accordion"><h2>Задание 3</h2></button>
<div class="panel">
  <p>Создайте веб-страницу, состоящую из двух абзацев, в которых будет по два коротких предложения, расположенных на разных строках. Цвет текста первого абзаца должен быть красным, а второго – синим. При наведении курсора на первый абзац, должна появляться подсказка "Я первый абзац", а при наведении на второй – "Я второй абзац". Используйте атрибут style, а в качестве его значения свойства CSS: "color: red" и "color: blue". Также воспользуйтесь атрибутом title, не путая его с аналогичным элементом. </p>
</div>

<button class="accordion"><h2>Задание 4</h2></button>
<div class="panel">
  <p>Повторите страницу по данному по образцу:</p>
  <p>
    <div class="task">
    <img src="1.jpg" width="200">
    </div>
  </p></p>
</div>

<button class="accordion"><h2>Задание 5</h2></button>
<div class="panel">
    <p>Повторите страницу по данному по образцу:</p>
  <p>
    <div class="task">
    <h1> Списки </h1>
	<h2> Список цветов </h2>
	<ul>
		<li> Красный </li>
		<li> Желтый </li>
		<li> Зеленый </li>
		<li> Синий </li>
	</ul>
    </div>
  </p>
</div>

<button class="accordion"><h2>Задание 6</h2></button>
<div class="panel">
  <p>Повторите страницу по данному по образцу:</p>
  <p>
    <div class="task">
    <table border="1">
		<tr>
			<td> ячейка 1 </td>
			<td> ячейка 2 </td>
			<td> ячейка 3 </td>
		</tr>
		<tr>
			<td> ячейка 4 </td>
			<td> ячейка 5 </td>
			<td> ячейка 6 </td>
		</tr>
		<tr>
			<td> ячейка 7 </td>
			<td> ячейка 8 </td>
			<td> ячейка 9 </td>
		</tr>
	</table>
    </div>
  </p></p>
</div>

<button class="accordion"><h2>Задание 7</h2></button>
<div class="panel">
<p>Повторите страницу по данному по образцу:</p>
  <p>
    <div class="task">
    <table border="1" cellspacing="0"  width="400" height="200">
		<tr>
			<th>номер</th>
			<th>тег</th>
			<th>значение</th>
		</tr>
		<tr align="center">
			<td>1</td>
			<td>p</td>
			<td>абзац</td>
		</tr>
		<tr align="center">
			<td>2</td>
			<td>a</td>
			<td>ссылка</td>
		</tr>
		<tr align="center">
			<td>3</td>
			<td>b</td>
			<td>жирный текст</td>
		</tr>
		<tr align="center">
			<td>4</td>
			<td>i</td>
			<td>курсив</td>
		</tr>
		<tr align="center">
			<td>5</td>
			<td>table</td>
			<td>таблица</td>
		</tr>
		<tr align="center">
			<td>6</td>
			<td>tr</td>
			<td>ряд таблицы</td>
		</tr>
		<tr align="center">
			<td>7</td>
			<td>td</td>
			<td>ячейка таблицы</td>
		</tr>
		<tr align="center">
			<td>8</td>
			<td>th</td>
			<td>заголовок таблицы</td>
		</tr>
	</table>
</div>




<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
</main>
<div class="footer">
  <h3>Copyright &copy; 2023 Онлайн-учебник по HTML и CSS</h3>
</div>
</body>
</html>