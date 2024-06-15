<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
    <meta name="description" content=@yield('description')>
	<link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}?v=1.5.1">
	<link rel="stylesheet" href="{{ asset('frontend/css/swiper-bundle.min.css')}}">

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png?v=1.1">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png?v=1.1">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png?v=1.1">
	<link rel="manifest" href="site.webmanifest?v=1.1">
	<link rel="mask-icon" href="/safari-pinned-tab.svg?v=1.1" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

	<meta property="og:type" content="article">
	<meta property="og:title" content="Чемпионат Европы по футболу 2024 - расписание, результаты матчей, таблица со статистикой">
	<meta property="og:site_name" content="premier-euro2024">
	<meta property="og:url" content="https://premier-euro2024.ru">
	<meta property="og:description" content="Расписания матчей, результаты, таблицы со статистикой. Не пропустите главное спортивное событие года с PREMIER">
	<meta property="og:locale" content="ru_RU">
	<meta property="og:image" content="https://premier-euro2024.ru/img/poster.jpg">
	<meta property="og:image:width" content="968">
	<meta property="og:image:height" content="504">

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="Чемпионат Европы по футболу 2024 - расписание, результаты матчей, таблица со статистикой">
	<meta name="twitter:description" content="Расписания матчей, результаты, таблицы со статистикой. Не пропустите главное спортивное событие года с PREMIER">
	<meta property="og:image" content="https://premier-euro2024.ru/img/poster.jpg">
	<meta name="twitter:url" content="https://premier-euro2024.ru">
	<meta name="twitter:domain" content="premier-euro2024.ru">
	<meta name="twitter:site" content="@premier-euro2024.ru">
	<meta name="twitter:creator" content="@premier-euro2024.ru">

	<!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();
    for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
    k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(97548056, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
    });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/97548056" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>
<body>
	<header>
        @include('site.inc.header')
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        @include('site.inc.footer')
    </footer>
    <script async  src="{{ asset('frontend/js/swiper-bundle.min.js') }}"></script>
    <script async  src="{{ asset('frontend/js/index.js') }}"></script>
</body>
</html>
