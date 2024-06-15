@extends('site.layouts.main')

@section('content')

<div class="error-container">
    <h1 class="error-title">Извините, но для доступа к этой странице вам необходимо быть администратором.</h1>
    <a href="{{ route('page.index') }}" class="error-link">Вернуться на главную</a>
</div>
<section id="promo_section" class="main_section">
    <div class="promo_box">
        <h2 class="promo_title">Смотрите Евро-2024 бесплатно</h2>
        <p class="promo_text">Оформите подписку «PREMIER + МАТЧ ПРЕМЬЕР» и наслаждайтесь праздником футбола</p>
        <a href="" class="promo_link">7 дней за 1₽</a>
        <p class="promo_footnote">*Для новых подписчиков «PREMIER + МАТЧ ПРЕМЬЕР»</p>
    </div>
</section>
@endsection

<style>
    .error-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 50vh;
        text-align: center;
    }

    .error-title {
        font-size: 2rem;
        font-weight: bold;
        color: #dc3545;
        margin-bottom: 1rem;
    }

    .error-link {
        display: inline-block;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        padding: 0.5rem 1rem;
        border-radius: 0.25rem;
        transition: background-color 0.3s ease;
    }

    .error-link:hover {
        background-color: #0056b3;
    }
</style>

