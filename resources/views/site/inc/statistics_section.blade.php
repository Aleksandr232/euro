<section id="statistics_section" class="main_section">
    <div class="statistics_wrapper">
        <div class="switch_buttons_container">
            <button class="switch_button group_button" data-num="0">Групповой этап</button>
            <button class="switch_button switch_playoff_button" data-num="1">Плей-офф</button>
        </div>

    <div class="switch_screens_container">
        <ul class="switch_screen group_list">
            @foreach($group as $post)
            <li class="group_item">
                <h4 class="group_title">Группа {{$post->group}}</h4>
                <div class="group_info_container">
                    <div class="group_info_container_inner">
                        <div class="group_headers_line">
                            <p title="Матчи" class="group_header">М</p>
                            <p title="Выиграши" class="group_header">В</p>
                            <p title="Проиграши" class="group_header">П</p>
                            <p title="Ничьи" class="group_header">Н</p>
                            <p title="Очки" class="group_header">О</p>
                        </div>
                        @foreach($groups_team as $team)
                        @if($team->group == $post->group)
                        <div class="participant_line">
                            <div class="participant_info">
                                <div class="participant_flag_container">
                                    @if($team->team == "Италия")
                                        <img  src="{{ asset('frontend/assets/img/flag_italy.png') }}" alt="" class="participant_flag">
                                    @elseif($team->team == "Албания")
                                        <img  src="{{ asset('frontend/assets/img/flag_albania.png') }}" alt="" class="participant_flag">
                                    @elseif($team->team == "Шотландия")
                                        <img  src="{{ asset('frontend/assets/img/flag_scotland.png') }}" alt="" class="participant_flag">
                                    @elseif($team->team == "Англия")
                                        <img  src="{{ asset('frontend/assets/img/flag_england.png') }}" alt="" class="participant_flag">
                                    @elseif($team->team == "Германия")
                                        <img  src="{{ asset('frontend/assets/img/flag_germany.png') }}" alt="" class="participant_flag">
                                    @elseif($team->team == "Нидерланды")
                                        <img  src="{{ asset('frontend/assets/img/flag_netherlands.png') }}" alt="" class="participant_flag">
                                    @elseif($team->team == "Бельгия")
                                        <img  src="{{ asset('frontend/assets/img/flag_belgium.png') }}" alt="" class="participant_flag">
                                    @elseif($team->team == "Франция")
                                        <img  src="{{ asset('frontend/assets/img/flag_france.png') }}" alt="" class="participant_flag">
                                    @elseif($team->team == "Испания")
                                        <img  src="{{ asset('frontend/assets/img/flag_spain.png') }}" alt="" class="participant_flag">
                                    @elseif($team->team == "Португалия")
                                        <img  src="{{ asset('frontend/assets/img/flag_portugal.png') }}" alt="" class="participant_flag">
                                    @elseif($team->team == "Польша")
                                        <img  src="{{ asset('frontend/assets/img/flag_poland.png') }}" alt="" class="participant_flag">
                                    @elseif($team->team == "Швейцария")
                                        <img  src="{{ asset('frontend/assets/img/flag_switzerland.png') }}" alt="" class="participant_flag">
                                    @elseif($team->team == "Чехия")
                                        <img  src="{{ asset('frontend/assets/img/flag_czech.png') }}" alt="" class="participant_flag">
                                    @elseif($team->team == "Дания")
                                        <img  src="{{ asset('frontend/assets/img/flag_denmark.png') }}" alt="" class="participant_flag">
                                    @elseif($team->team == "Швеция")
                                        <img  src="{{ asset('frontend/assets/img/flag_sweden.png') }}" alt="" class="participant_flag">
                                    @elseif($team->team == "Австрия")
                                        <img  src="{{ asset('frontend/assets/img/flag_austria.png') }}" alt="" class="participant_flag">
                                    @elseif($team->team == "Хорватия")
                                        <img  src="{{ asset('frontend/assets/img/flag_croatia.png') }}" alt="" class="participant_flag">
                                    @elseif($team->team == "Румыния")
                                        <img  src="{{ asset('frontend/assets/img/flag_romania.png') }}" alt="" class="participant_flag">
                                    @elseif($team->team == "Венгрия")
                                        <img  src="{{ asset('frontend/assets/img/flag_hungary.png') }}" alt="" class="participant_flag">
                                    @elseif($team->team == "Сербия")
                                        <img  src="{{ asset('frontend/assets/img/flag_serbia.png') }}" alt="" class="participant_flag">
                                    @elseif($team->team == "Турция")
                                        <img  src="{{ asset('frontend/assets/img/flag_turkey.png') }}" alt="" class="participant_flag">
                                    @elseif($team->team == "Украина")
                                        <img  src="{{ asset('frontend/assets/img/flag_ukraine.png') }}" alt="" class="participant_flag">
                                    @elseif($team->team == "Грузия")
                                        <img  src="{{ asset('frontend/assets/img/flag_georgia.png') }}" alt="" class="participant_flag">
                                    @elseif($team->team == "Словения")
                                        <img  src="{{ asset('frontend/assets/img/flag_slovenia.png') }}" alt="" class="participant_flag">
                                    @elseif($team->team == "Словакия")
                                        <img src="{{ asset('frontend/assets/img/flag_slovakia.png') }}" alt="" class="participant_flag">
                                    @endif

                                </div>
                                <p class="participant_name">{{$team->team}}</p>
                            </div>
                            <p class="result_text text_matches">{{$team->matches}}</p>
                            <p class="result_text text_wins">{{$team->win}}</p>
                            <p class="result_text text_fails">{{$team->losses}}</p>
                            <p class="result_text text_draw">{{$team->draw}}</p>
                            <p class="result_text text_points">{{$team->point}}</p>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </li>
            @endforeach
        </ul>




        @include('site.inc.switch_screen')
    </div>
</div>
</section>
