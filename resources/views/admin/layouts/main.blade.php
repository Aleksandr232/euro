<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
	<link rel="manifest" href="site.webmanifest">
	<link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">

	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

    <meta property="og:type" content="article">
	<meta property="og:title" content="EURO 2024">
	<meta property="og:site_name" content="premier-euro2024">
	<meta property="og:url" content="https://premier-euro2024.ru">
	<meta property="og:description" content="Смотрите самые захватывающие игры главного футбольного турнира Европы!">
	<meta property="og:locale" content="ru_RU">
	<meta property="og:image" content="https://premier-euro2024.ru/img/poster.jpg">
	<meta property="og:image:width" content="968">
	<meta property="og:image:height" content="504">

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="EURO 2024">
	<meta name="twitter:description" content="Смотрите самые захватывающие игры главного футбольного турнира Европы!">
	<meta property="og:image" content="https://premier-euro2024.ru/img/poster.jpg">
	<meta name="twitter:url" content="https://premier-euro2024.ru">
	<meta name="twitter:domain" content="premier-euro2024.ru">
	<meta name="twitter:site" content="@premier-euro2024.ru">
	<meta name="twitter:creator" content="@premier-euro2024.ru">
</head>
<body>
  @include('admin.inc.sidebar')
  @include('admin.inc.navbar')
<main>
    @yield('content')
</main>


@if (session()->has('success'))
    <div class="alert alert-success" id="success-alert">
        {{ session('success') }}
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            var successAlert = document.getElementById('success-alert');


            if (successAlert) {
                setTimeout(function() {
                    successAlert.remove();
                }, 1000);
            }
        });
    </script>
@endif
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const sidebar = document.querySelector('.sidebar');
    const toggleSidebarBtn = document.getElementById('toggleSidebar');
    const content = document.querySelector('.content');

    toggleSidebarBtn.addEventListener('click', () => {
      sidebar.classList.toggle('expanded');
      content.classList.toggle('expanded');
    });
  </script>
  {{-- <script>
    function formatScoreInput(input) {

    let value = input.value;

    if (value.indexOf(':') === -1 && value.length === 1) {

      input.value = value + ':';
    }
  }
  </script> --}}
  <script>
    function formatScoreInput(input) {
      let value = input.value;

      // Убираем все лишние символы, кроме цифр и скобок
      value = value.replace(/[^0-9 \(\)]/g, '');

      // Добавляем разделитель ":" если его нет
      if (value.indexOf(':') === -1 && value.length > 0) {
        value = value.slice(0, value.length - 1) + ':' + (value.slice(-1) || '');
      }

      // Форматируем ввод
      if (value.length === 1) {
        value = value + ':';
      } else if (value.length === 3 && value.indexOf('(') === -1) {
        value = value.slice(0, 1) + ' (' + value.slice(1, 2) + '): ' + value.slice(2);
      }

      input.value = value;
    }
  </script>
</body>
</html>
