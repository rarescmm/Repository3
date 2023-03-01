<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="Style.css">
<title>HTML</title>
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
<h2>Основные элементы</h2>
<p>HTML состоит из различных элементов, которые используются для структурирования и отображения содержимого на веб-странице. Самым базовым HTML-элементом является &lt;html&gt; элемент, который содержит все остальные элементы. Вот пример простой HTML-страницы:</p>
<pre><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Моя первая сраница;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h1&gt;Добро пожаловать!&lt;/h1&gt;
&lt;p&gt;Пример текста.&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
<p>Этот HTML-код определяет веб-страницу с заголовком и некоторым содержимым, включая заголовок и абзац.</p>
</section>
<section id="basic-elements">
<h2>Абзацы</h2>
<p>Одним из основных элементов страницы являются абзацы. Каждый абзац начинается с новой строки и имеет так называемую красную строку. По умолчанию красной строки нет, но ее легко сделать.</p>
<p>
	Абзац создается с помощью тега <code class="code inline">&lt;p&gt;</code>
	таким образом:
</p>
<pre><code>&lt;p&gt;
	Это абзац.
&lt;/p&gt;
&lt;p&gt;
	Это еще один абзац.
&lt;/p&gt;
&lt;p&gt;
	И еще один абзац.
&lt;/p&gt;</code></code></pre>
</section>
<section id="basic-elements">
<h2>Заголовки страницы</h2>
<p>
	Кроме абзацев важное значение на странице
	имеют заголовки. 
</p>
<p>
	Заголовки создаются с помощью тегов <code class="code inline">&lt;h1&gt;</code>,
	<code class="code inline">&lt;h2&gt;</code>, <code class="code inline">&lt;h3&gt;</code>, <code class="code inline">&lt;h4&gt;</code>,
	<code class="code inline">&lt;h5&gt;</code>, <code class="code inline">&lt;h6&gt;</code>. Они имеют разную
	степень важности. В заголовке <code class="code inline">h1</code> следует
	располагать название всей HTML страницы,
	в <code class="code inline">h2</code> - название блоков страницы, в
	<code class="code inline">h3</code> - название подблоков и так далее.
</p>
<p>
	Все заголовки по умолчанию жирные и имеют
	разный размер. Для примера сделаем заголовки
	всех уровней:
</p>
<pre><code>&lt;h1&gt;Заголовок h1&lt;/h1&gt;
&lt;h2&gt;Заголовок h2&lt;/h2&gt;
&lt;h3&gt;Заголовок h3&lt;/h3&gt;
&lt;h4&gt;Заголовок h4&lt;/h4&gt;
&lt;h5&gt;Заголовок h5&lt;/h5&gt;
&lt;h6&gt;Заголовок h6&lt;/h6&gt;</code></pre>
</section>

<section id="basic-elements">
<h2>Списки</h2>
<p>
Наряду с абзацами и заголовками существует еще один важный элемент страницы - это списки.
</p>
<p>
Списки создаются с помощью тега <code class="code inline">&lt;ul&gt;</code>,
	внутри которого обязательно должны идти теги
	<code>&lt;li&gt;</code>. Тег <code>ul</code> задает сам список,
	а в теги <code>li</code> следует размещать пункты
	списка (то есть одному <code >li</code> соответствует один
	маркер списка). Смотрите пример:
</p>

<pre><code>&lt;ul&gt;
	&lt;li&gt;пункт списка&lt;/li&gt;
	&lt;li&gt;пункт списка&lt;/li&gt;
	&lt;li&gt;пункт списка&lt;/li&gt;
	&lt;li&gt;пункт списка&lt;/li&gt;
	&lt;li&gt;пункт списка&lt;/li&gt;
&lt;/ul&gt;</code></pre>
</section>

<section id="basic-elements">
<h2>Ссылки</h2>
<p>
Нажимая на
	ссылки, мы можем переходить с одной страницы
	сайта на другую.
</p>
<p>
Ссылка создается с помощью тега <code>&lt;a&gt;</code>.
	В этом теге обязательно должен быть атрибут
	<code>href</code>, в который следует записывать
	адрес той страницы, на которую ведет ссылка.
</p>

<pre><code>&lt;a href="https://www.google.com"&gt;ссылка&lt;/a&gt;</code></pre>
</section>

<section id="basic-elements">
<h2>Изображения</h2>
<p>
Давайте теперь разберемся с тем, как разместить
	изображение на странице вашего сайта.
	Для этого предназначен тег <code>&lt;img&gt;</code>,
	имеющий обязательный атрибут <code>src</code>,
	в котором следует задавать путь к файлу картинки.
	При этом сам тег не требует закрывающего тега.
</p>
<p>
Пример:
</p>

<pre><code>&lt;img src="img.png"&gt;</code></pre>
</section>

<section id="basic-elements">
<h2>Таблицы</h2>
<p>Таблица - это набор строк и столбцов, на пересечении которых находятся ячейки.</p>
<p>В HTML таблицы создаются по похожему принципу. Там тоже есть столбцы и строки с ячейками, однако HTML код таблиц при первом взгляде может показаться непривычным: таблицы создаются по рядам - сначала первый ряд, потом второй и так далее.</p>
<p>
Код таблицы имеет жесткую структуру: главным
	является тег <code>table</code>, внутри которого
	должны лежать теги <code>tr</code>, которые создают
	ряды таблицы, а внутри них - теги <code>td</code>,
	которые создают ячейки. Тег <code>table</code>
	может иметь атрибут <code>border</code>, который
	задает границу таблице и ее ячейкам.
</p>
<p>
	Давайте для примера сделаем таблицу с тремя
	рядами и тремя ячейками в каждом ряду:
</p>
<pre><code>&lt;table border="1"&gt;
	&lt;!--Это будет первый ряд таблицы:--&gt;
	&lt;tr&gt;
		&lt;td&gt;ячейка 1&lt;/td&gt;
		&lt;td&gt;ячейка 2&lt;/td&gt;
		&lt;td&gt;ячейка 3&lt;/td&gt;
	&lt;/tr&gt;
	
	&lt;!--Это будет второй ряд таблицы:--&gt;
	&lt;tr&gt;
		&lt;td&gt;ячейка 4&lt;/td&gt;
		&lt;td&gt;ячейка 5&lt;/td&gt;
		&lt;td&gt;ячейка 6&lt;/td&gt;
	&lt;/tr&gt;
	
	&lt;!--Это будет третий ряд таблицы:--&gt;
	&lt;tr&gt;
		&lt;td&gt;ячейка 7&lt;/td&gt;
		&lt;td&gt;ячейка 8&lt;/td&gt;
		&lt;td&gt;ячейка 9&lt;/td&gt;
	&lt;/tr&gt;
&lt;/table&gt;</code></pre>
</section>
</main>
<footer>
<p>&copy; 2023 Онлайн-учебник по HTML и CSS</p>
</footer>
</body>
</html>