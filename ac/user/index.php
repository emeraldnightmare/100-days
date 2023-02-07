<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Furniture Store (dribbble shot by Jekin Gala)</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=PT+Serif:700|Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./index.css">

</head>
<body>
<!-- partial:index.partial.html -->
<button class="nav-toggle" data-menustate="closed">
	<svg class="icon icon--menu" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
		<path d="M0 0h24v24H0z" fill="none"/>
		<path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
	</svg>
	<svg class="icon icon--close" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
		<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
		<path d="M0 0h24v24H0z" fill="none"/>
	</svg>
</button>
<nav class="nav" data-state="closed">
	<a href="./about.php" style="--delay: .35s">About</a>
	<!-- <a href="#" style="--delay: .4s">Studio</a> -->
	<a href="./products.php" style="--delay: .45s">Products</a>
	<a href="./contact.php" style="--delay: .5s">Contact</a>
</nav>
<header class="header" data-menustate="closed">
	<div class="grid-item  grid-item--primary">
		<img src="https://images.unsplash.com/photo-1485277531869-f71504d462e5?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=c6a0444526f6da20a3492a305b19846e&auto=format&fit=crop&w=1350&q=80" class="object-fit" alt="chair">
		<a href="#" class="logo">
			<h1>Arun Exports</h1>
		</a>
	</div>
	<div class="grid-item grid-item--secondary  grid-item--content">
		<article class="article  article--align-right">
			<h5 class="rotate rotate--right">Made in<br/>rajasthan</h5>
		</article>
		<article class="article">
			<h4><span>1992</span> <span>2018</span></h4>
			<h2>Our Studio</h2>
			<p>Within the different collections of various creative fields and directions from furniture.</p>
		</article>
	</div>
	<div class="grid-item grid-item--secondary">
		<img src="https://images.unsplash.com/photo-1496154077138-22d8a3b92e8b?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=2c2d9a83fdebee2ca48e816da35de74f&auto=format&fit=crop&w=1350&q=80" class="object-fit" alt="chair">
	</div>
	<div class="grid-item grid-item--tertiary">
		<img src="https://images.unsplash.com/photo-1503975817393-b3891b7a3b81?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=9429bb5eda4dd7617a61f11f159bc0f2&auto=format&fit=crop&w=1349&q=80" class="object-fit" alt="chair">
	</div>
	<div class="grid-item grid-item--tertiary grid-item--content">
		<article class="article">
			<p>Be the first to recieve our latest publication <a href="./contact.php">Subscribe</a></p>
		</article>
	</div>
	<div class="grid-item grid-item--tertiary">
		<img src="https://images.unsplash.com/photo-1417976528056-3c9bbbb5456c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=72f2b73c3e8892ff6a59e247557f3b47&auto=format&fit=crop&w=1350&q=80" class="object-fit" alt="chair">
	</div>
</header>

<div class="loading-overlay">
	<span class="loading-overlay__content h1">ArunExport</span>
</div>
<!-- partial -->
  <script  src="./index.js"></script>

</body>
</html>
