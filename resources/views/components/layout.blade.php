@props(['title' => '', 'fullWidth' => false])
<!DOCTYPE html>
<html lang="vi">
<head>
	<title>{{ $title ? $title . ' | ' : '' }}daudau's blog</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" type="image/png" href="/images/favicon-32x32.png">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body>
	<div class="main-body flex-col pl-2 pt-2 {{ $fullWidth ? '' : 'max-w-xl' }}">
		<x-navbar />
		<div class="mt-20 flex-grow">
			{{ $slot }}
		</div>

		<footer class="mt-20 flex-none">
			<p class="text-sm" class=>crafted by <a href="http://github.com/bangnokia/pekyll" target="_blank">pekyll</a>.</p>
		</footer>
	</div>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-37232412-22"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-37232412-22');
	</script>
</body>
</html>
