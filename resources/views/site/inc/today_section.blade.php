<section id="today_section" class="main_section">
    <h3 class="section_title">Ближайшие матчи</h3>
    @if(count($matches) == 2)
    <ul id="today_mathes">
        @foreach($matches as $post)
        <li class="today_match_item" data-date={{$post->date}}>
            <div class="participant_box">
                <div class="participant_flag_container">
                    @if($post->team_1 == "Италия")
                <img src="{{ asset('frontend/assets/img/flag_italy.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Албания")
                            <img src="{{ asset('frontend/assets/img/flag_albania.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Шотландия")
                            <img src="{{ asset('frontend/assets/img/flag_scotland.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Англия")
                            <img src="{{ asset('frontend/assets/img/flag_england.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Германия")
                            <img src="{{ asset('frontend/assets/img/flag_germany.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Нидерланды")
                            <img src="{{ asset('frontend/assets/img/flag_netherlands.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Бельгия")
                            <img src="{{ asset('frontend/assets/img/flag_belgium.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Франция")
                            <img src="{{ asset('frontend/assets/img/flag_france.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Испания")
                            <img src="{{ asset('frontend/assets/img/flag_spain.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Португалия")
                            <img src="{{ asset('frontend/assets/img/flag_portugal.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Польша")
                            <img src="{{ asset('frontend/assets/img/flag_poland.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Швейцария")
                            <img src="{{ asset('frontend/assets/img/flag_switzerland.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Чехия")
                            <img src="{{ asset('frontend/assets/img/flag_czech.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Дания")
                            <img src="{{ asset('frontend/assets/img/flag_denmark.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Швеция")
                            <img src="{{ asset('frontend/assets/img/flag_sweden.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Австрия")
                            <img src="{{ asset('frontend/assets/img/flag_austria.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Хорватия")
                            <img src="{{ asset('frontend/assets/img/flag_croatia.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Румыния")
                            <img src="{{ asset('frontend/assets/img/flag_romania.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Венгрия")
                            <img src="{{ asset('frontend/assets/img/flag_hungary.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Сербия")
                            <img src="{{ asset('frontend/assets/img/flag_serbia.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Турция")
                            <img src="{{ asset('frontend/assets/img/flag_turkey.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Украина")
                            <img src="{{ asset('frontend/assets/img/flag_ukraine.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Грузия")
                            <img src="{{ asset('frontend/assets/img/flag_georgia.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Словения")
                            <img src="{{ asset('frontend/assets/img/flag_slovenia.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Словакия")
                            <img src="{{ asset('frontend/assets/img/flag_slovakia.png') }}" alt="" class="participant_flag">
                        @endif
                </div>
                <div class="participant_name">{{$post->team_1}}</div>
            </div>
            <div class="match_schedule_box">
                <p class="match_schedule_time">{{$post->time}}</p>
                <p class="match_schedule_date">
                    <?php
                    $monthNames = [
                        'January' => 'Январь',
                        'February' => 'Февраль',
                        'March' => 'Март',
                        'April' => 'Апрель',
                        'May' => 'Май',
                        'June' => 'Июнь',
                        'July' => 'Июль',
                        'August' => 'Август',
                        'September' => 'Сентябрь',
                        'October' => 'Октябрь',
                        'November' => 'Ноябрь',
                        'December' => 'Декабрь'
                    ];

                    $date = \Carbon\Carbon::parse($post->date);
                    $monthName = $monthNames[$date->format('F')];
                    echo $monthName . ' ' . $date->format('j');
                    ?>
                </p>
            </div>
            <div class="participant_box">
                <div class="participant_flag_container">
                    @if($post->team_2 == "Италия")
                            <img src="{{ asset('frontend/assets/img/flag_italy.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Албания")
                            <img src="{{ asset('frontend/assets/img/flag_albania.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Шотландия")
                            <img src="{{ asset('frontend/assets/img/flag_scotland.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Англия")
                            <img src="{{ asset('frontend/assets/img/flag_england.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Германия")
                            <img src="{{ asset('frontend/assets/img/flag_germany.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Нидерланды")
                            <img src="{{ asset('frontend/assets/img/flag_netherlands.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Бельгия")
                            <img src="{{ asset('frontend/assets/img/flag_belgium.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Франция")
                            <img src="{{ asset('frontend/assets/img/flag_france.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Испания")
                            <img src="{{ asset('frontend/assets/img/flag_spain.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Португалия")
                            <img src="{{ asset('frontend/assets/img/flag_portugal.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Польша")
                            <img src="{{ asset('frontend/assets/img/flag_poland.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Швейцария")
                            <img src="{{ asset('frontend/assets/img/flag_switzerland.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Чехия")
                            <img src="{{ asset('frontend/assets/img/flag_czech.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Дания")
                            <img src="{{ asset('frontend/assets/img/flag_denmark.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Швеция")
                            <img src="{{ asset('frontend/assets/img/flag_sweden.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Австрия")
                            <img src="{{ asset('frontend/assets/img/flag_austria.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Хорватия")
                            <img src="{{ asset('frontend/assets/img/flag_croatia.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Румыния")
                            <img src="{{ asset('frontend/assets/img/flag_romania.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Венгрия")
                            <img src="{{ asset('frontend/assets/img/flag_hungary.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Сербия")
                            <img src="{{ asset('frontend/assets/img/flag_serbia.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Турция")
                            <img src="{{ asset('frontend/assets/img/flag_turkey.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Украина")
                            <img src="{{ asset('frontend/assets/img/flag_ukraine.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Грузия")
                            <img src="{{ asset('frontend/assets/img/flag_georgia.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Словения")
                            <img src="{{ asset('frontend/assets/img/flag_slovenia.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Словакия")
                            <img src="{{ asset('frontend/assets/img/flag_slovakia.png') }}" alt="" class="participant_flag">
                        @endif
                </div>
                <div class="participant_name">{{$post->team_2}}</div>
            </div>
        </li>
        @endforeach
    </ul>
    @elseif(count($matches) == 1)
    <ul id="today_mathes_one">
        @foreach($matches as $post)
        <li class="today_match_item" data-date={{$post->date}}>
            <div class="participant_box">
                <div class="participant_flag_container">
                    @if($post->team_1 == "Италия")
                <img src="{{ asset('frontend/assets/img/flag_italy.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Албания")
                            <img src="{{ asset('frontend/assets/img/flag_albania.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Шотландия")
                            <img src="{{ asset('frontend/assets/img/flag_scotland.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Англия")
                            <img src="{{ asset('frontend/assets/img/flag_england.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Германия")
                            <img src="{{ asset('frontend/assets/img/flag_germany.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Нидерланды")
                            <img src="{{ asset('frontend/assets/img/flag_netherlands.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Бельгия")
                            <img src="{{ asset('frontend/assets/img/flag_belgium.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Франция")
                            <img src="{{ asset('frontend/assets/img/flag_france.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Испания")
                            <img src="{{ asset('frontend/assets/img/flag_spain.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Португалия")
                            <img src="{{ asset('frontend/assets/img/flag_portugal.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Польша")
                            <img src="{{ asset('frontend/assets/img/flag_poland.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Швейцария")
                            <img src="{{ asset('frontend/assets/img/flag_switzerland.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Чехия")
                            <img src="{{ asset('frontend/assets/img/flag_czech.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Дания")
                            <img src="{{ asset('frontend/assets/img/flag_denmark.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Швеция")
                            <img src="{{ asset('frontend/assets/img/flag_sweden.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Австрия")
                            <img src="{{ asset('frontend/assets/img/flag_austria.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Хорватия")
                            <img src="{{ asset('frontend/assets/img/flag_croatia.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Румыния")
                            <img src="{{ asset('frontend/assets/img/flag_romania.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Венгрия")
                            <img src="{{ asset('frontend/assets/img/flag_hungary.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Сербия")
                            <img src="{{ asset('frontend/assets/img/flag_serbia.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Турция")
                            <img src="{{ asset('frontend/assets/img/flag_turkey.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Украина")
                            <img src="{{ asset('frontend/assets/img/flag_ukraine.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Грузия")
                            <img src="{{ asset('frontend/assets/img/flag_georgia.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Словения")
                            <img src="{{ asset('frontend/assets/img/flag_slovenia.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Словакия")
                            <img src="{{ asset('frontend/assets/img/flag_slovakia.png') }}" alt="" class="participant_flag">
                        @endif
                </div>
                <div class="participant_name">{{$post->team_1}}</div>
            </div>
            <div class="match_schedule_box">
                <p class="match_schedule_time">{{$post->time}}</p>
                <p class="match_schedule_date">
                    <?php
                    $monthNames = [
                        'January' => 'Январь',
                        'February' => 'Февраль',
                        'March' => 'Март',
                        'April' => 'Апрель',
                        'May' => 'Май',
                        'June' => 'Июнь',
                        'July' => 'Июль',
                        'August' => 'Август',
                        'September' => 'Сентябрь',
                        'October' => 'Октябрь',
                        'November' => 'Ноябрь',
                        'December' => 'Декабрь'
                    ];

                    $date = \Carbon\Carbon::parse($post->date);
                    $monthName = $monthNames[$date->format('F')];
                    echo $monthName . ' ' . $date->format('j');
                    ?>
                </p>
            </div>
            <div class="participant_box">
                <div class="participant_flag_container">
                    @if($post->team_2 == "Италия")
                            <img src="{{ asset('frontend/assets/img/flag_italy.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Албания")
                            <img src="{{ asset('frontend/assets/img/flag_albania.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Шотландия")
                            <img src="{{ asset('frontend/assets/img/flag_scotland.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Англия")
                            <img src="{{ asset('frontend/assets/img/flag_england.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Германия")
                            <img src="{{ asset('frontend/assets/img/flag_germany.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Нидерланды")
                            <img src="{{ asset('frontend/assets/img/flag_netherlands.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Бельгия")
                            <img src="{{ asset('frontend/assets/img/flag_belgium.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Франция")
                            <img src="{{ asset('frontend/assets/img/flag_france.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Испания")
                            <img src="{{ asset('frontend/assets/img/flag_spain.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Португалия")
                            <img src="{{ asset('frontend/assets/img/flag_portugal.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Польша")
                            <img src="{{ asset('frontend/assets/img/flag_poland.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Швейцария")
                            <img src="{{ asset('frontend/assets/img/flag_switzerland.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Чехия")
                            <img src="{{ asset('frontend/assets/img/flag_czech.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Дания")
                            <img src="{{ asset('frontend/assets/img/flag_denmark.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Швеция")
                            <img src="{{ asset('frontend/assets/img/flag_sweden.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Австрия")
                            <img src="{{ asset('frontend/assets/img/flag_austria.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Хорватия")
                            <img src="{{ asset('frontend/assets/img/flag_croatia.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Румыния")
                            <img src="{{ asset('frontend/assets/img/flag_romania.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Венгрия")
                            <img src="{{ asset('frontend/assets/img/flag_hungary.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Сербия")
                            <img src="{{ asset('frontend/assets/img/flag_serbia.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Турция")
                            <img src="{{ asset('frontend/assets/img/flag_turkey.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Украина")
                            <img src="{{ asset('frontend/assets/img/flag_ukraine.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Грузия")
                            <img src="{{ asset('frontend/assets/img/flag_georgia.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Словения")
                            <img src="{{ asset('frontend/assets/img/flag_slovenia.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Словакия")
                            <img src="{{ asset('frontend/assets/img/flag_slovakia.png') }}" alt="" class="participant_flag">
                        @endif
                </div>
                <div class="participant_name">{{$post->team_2}}</div>
            </div>
        </li>
        @endforeach
    </ul>
    @else
    <ul  class="today_mathes">
        @foreach($matches as $post)
        <li class="today_match_item" data-date={{$post->date}}>
            <div class="participant_box">
                <div class="participant_flag_container">
                    @if($post->team_1 == "Италия")
                <img src="{{ asset('frontend/assets/img/flag_italy.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Албания")
                            <img src="{{ asset('frontend/assets/img/flag_albania.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Шотландия")
                            <img src="{{ asset('frontend/assets/img/flag_scotland.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Англия")
                            <img src="{{ asset('frontend/assets/img/flag_england.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Германия")
                            <img src="{{ asset('frontend/assets/img/flag_germany.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Нидерланды")
                            <img src="{{ asset('frontend/assets/img/flag_netherlands.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Бельгия")
                            <img src="{{ asset('frontend/assets/img/flag_belgium.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Франция")
                            <img src="{{ asset('frontend/assets/img/flag_france.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Испания")
                            <img src="{{ asset('frontend/assets/img/flag_spain.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Португалия")
                            <img src="{{ asset('frontend/assets/img/flag_portugal.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Польша")
                            <img src="{{ asset('frontend/assets/img/flag_poland.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Швейцария")
                            <img src="{{ asset('frontend/assets/img/flag_switzerland.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Чехия")
                            <img src="{{ asset('frontend/assets/img/flag_czech.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Дания")
                            <img src="{{ asset('frontend/assets/img/flag_denmark.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Швеция")
                            <img src="{{ asset('frontend/assets/img/flag_sweden.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Австрия")
                            <img src="{{ asset('frontend/assets/img/flag_austria.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Хорватия")
                            <img src="{{ asset('frontend/assets/img/flag_croatia.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Румыния")
                            <img src="{{ asset('frontend/assets/img/flag_romania.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Венгрия")
                            <img src="{{ asset('frontend/assets/img/flag_hungary.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Сербия")
                            <img src="{{ asset('frontend/assets/img/flag_serbia.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Турция")
                            <img src="{{ asset('frontend/assets/img/flag_turkey.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Украина")
                            <img src="{{ asset('frontend/assets/img/flag_ukraine.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Грузия")
                            <img src="{{ asset('frontend/assets/img/flag_georgia.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Словения")
                            <img src="{{ asset('frontend/assets/img/flag_slovenia.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Словакия")
                            <img src="{{ asset('frontend/assets/img/flag_slovakia.png') }}" alt="" class="participant_flag">
                        @endif
                </div>
                <div class="participant_name">{{$post->team_1}}</div>
            </div>
            <div class="match_schedule_box">
                <p class="match_schedule_time">{{$post->time}}</p>
                <p class="match_schedule_date">
                    <?php
                    $monthNames = [
                        'January' => 'Январь',
                        'February' => 'Февраль',
                        'March' => 'Март',
                        'April' => 'Апрель',
                        'May' => 'Май',
                        'June' => 'Июнь',
                        'July' => 'Июль',
                        'August' => 'Август',
                        'September' => 'Сентябрь',
                        'October' => 'Октябрь',
                        'November' => 'Ноябрь',
                        'December' => 'Декабрь'
                    ];

                    $date = \Carbon\Carbon::parse($post->date);
                    $monthName = $monthNames[$date->format('F')];
                    echo $monthName . ' ' . $date->format('j');
                    ?>
                </p>
            </div>
            <div class="participant_box">
                <div class="participant_flag_container">
                    @if($post->team_2 == "Италия")
                            <img src="{{ asset('frontend/assets/img/flag_italy.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Албания")
                            <img src="{{ asset('frontend/assets/img/flag_albania.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Шотландия")
                            <img src="{{ asset('frontend/assets/img/flag_scotland.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Англия")
                            <img src="{{ asset('frontend/assets/img/flag_england.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Германия")
                            <img src="{{ asset('frontend/assets/img/flag_germany.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Нидерланды")
                            <img src="{{ asset('frontend/assets/img/flag_netherlands.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Бельгия")
                            <img src="{{ asset('frontend/assets/img/flag_belgium.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Франция")
                            <img src="{{ asset('frontend/assets/img/flag_france.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Испания")
                            <img src="{{ asset('frontend/assets/img/flag_spain.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Португалия")
                            <img src="{{ asset('frontend/assets/img/flag_portugal.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Польша")
                            <img src="{{ asset('frontend/assets/img/flag_poland.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Швейцария")
                            <img src="{{ asset('frontend/assets/img/flag_switzerland.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Чехия")
                            <img src="{{ asset('frontend/assets/img/flag_czech.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Дания")
                            <img src="{{ asset('frontend/assets/img/flag_denmark.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Швеция")
                            <img src="{{ asset('frontend/assets/img/flag_sweden.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Австрия")
                            <img src="{{ asset('frontend/assets/img/flag_austria.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Хорватия")
                            <img src="{{ asset('frontend/assets/img/flag_croatia.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Румыния")
                            <img src="{{ asset('frontend/assets/img/flag_romania.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Венгрия")
                            <img src="{{ asset('frontend/assets/img/flag_hungary.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Сербия")
                            <img src="{{ asset('frontend/assets/img/flag_serbia.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Турция")
                            <img src="{{ asset('frontend/assets/img/flag_turkey.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Украина")
                            <img src="{{ asset('frontend/assets/img/flag_ukraine.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Грузия")
                            <img src="{{ asset('frontend/assets/img/flag_georgia.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Словения")
                            <img src="{{ asset('frontend/assets/img/flag_slovenia.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_2 == "Словакия")
                            <img src="{{ asset('frontend/assets/img/flag_slovakia.png') }}" alt="" class="participant_flag">
                        @endif
                </div>
                <div class="participant_name">{{$post->team_2}}</div>
            </div>
        </li>
        @endforeach
    </ul>
    @endif
</section>

