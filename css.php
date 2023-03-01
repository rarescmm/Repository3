<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="Style.css">
<title>CSS</title>
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
<section id="basic-elements">
<h2>Цвета</h2>
<p>
	Пример задания цвета через <code>rgb</code>:
</p>
<pre><code>p {
	color: rgb(255, 236, 114);
}</code></pre>
<p>
	Пример задания цвета через <code>#</code>:
</p>
<pre><code>p {
	color: #ff0000;
}</code></pre>
</section>

<section id="basic-elements">
<h2>Ширина и высота</h2>
Для задания ширины и высоты элементов в CSS
	предназначены свойства <code>width</code> и <code>height</code>.
	Значения этих свойств, как правило, задаются
	в пикселях. Пиксели обозначаются как <code>px</code>
	и добавляются к числу. Например, чтобы задать
	размер в <code>100</code> пикселей, значением свойства
	следует указать следующее: <code>100px</code>.
    <p>
	Посмотрим на работу этих свойств на примере.
	Зададим ячейкам какой-нибудь таблицы ширину
	в <code>200px</code> и высоту <code>100px</code>:
</p>
<pre><code>&lt;table border="1"&gt;
	&lt;tr&gt;
		&lt;td&gt;1&lt;/td&gt;
		&lt;td&gt;2&lt;/td&gt;
		&lt;td&gt;3&lt;/td&gt;
	&lt;/tr&gt;
	&lt;tr&gt;
		&lt;td&gt;4&lt;/td&gt;
		&lt;td&gt;5&lt;/td&gt;
		&lt;td&gt;6&lt;/td&gt;
	&lt;/tr&gt;
	&lt;tr&gt;
		&lt;td&gt;7&lt;/td&gt;
		&lt;td&gt;8&lt;/td&gt;
		&lt;td&gt;9&lt;/td&gt;
	&lt;/tr&gt;
&lt;/table&gt;</code></pre>
<pre>
    <code>td {
	width: 200px;
	height: 100px;
}</code>
</pre>
</section>

<section id="basic-elements">
<h2>Размер шрифта</h2>
<p>
Для того чтобы менять размер шрифта предназначено свойство <code>font-size</code>, принимающее значение в пикселях.
</p>
<p>
	Давайте зададим тексту абзаца шрифт в <code>30</code>
	пикселей:
</p>
<pre><code>&lt;p&gt;
	абзац с текстом
&lt;/p&gt;</code></pre>

<pre><code>p {
	font-size: 30px;
}</code></pre>
</section>
</main>
<footer>
<p>&copy; 2023 Онлайн-учебник по HTML и CSS</p>
</footer>
</body>
</html>