<div class="switch_screen playoff_screen">
    <div class="playoff_buttons_container">
        <button class="playoff_button" data-stage="1">1/8</button>
        <button class="playoff_button" data-stage="2">1/4</button>
        <button class="playoff_button" data-stage="3">1/2</button>
        <button class="playoff_button" data-stage="4">Финал</button>
    </div>
    <div class="playoff_map">

        <div class="dynamic_line dynamic_line_1"></div>
        <div class="dynamic_line dynamic_line_2"></div>

        <div class="dynamic_line dynamic_line_3"></div>
        <div class="dynamic_line dynamic_line_4"></div>

        <div class="dynamic_line dynamic_line_5"></div>
        <div class="dynamic_line dynamic_line_6"></div>

        <div class="dynamic_line dynamic_line_7"></div>
        <div class="dynamic_line dynamic_line_8"></div>

        <div class="dynamic_line dynamic_line_9"></div>
        <div class="dynamic_line dynamic_line_10"></div>

        <div class="dynamic_line dynamic_line_11"></div>
        <div class="dynamic_line dynamic_line_12"></div>

    @if(count($playOff ))
        @foreach($playOff as $post)
        {{-- @php
            $stage = $post->stage;
            $left_team = [
                'name' => $post->team_1,
            ];
            $right_team = [
                'name' => $post->team_2,
            ];
            $scores = explode(':', $post->score);
            $left_score = (int) $scores[0];
            $right_score = (int) $scores[1];
            if ($left_score > $right_score) {
                $winner = 'left';
            } elseif ($right_score > $left_score) {
                $winner = 'right';
            } else {
                $winner = 'draw';
            }
        @endphp
 --}}
        @php
        $stage = $post->stage;
        $left_team = [
            'name' => $post->team_1,
        ];
        $right_team = [
            'name' => $post->team_2,
        ];
        $scores = explode(':', $post->score);
        $left_score = (int) $scores[0];
        $right_score = (int) $scores[1];

        $left_score_formatted = $left_score . '(' . strlen($left_score) . ')';
        $right_score_formatted = $right_score . '(' . strlen($right_score) . ')';

        if ($left_score > $right_score) {
            $winner = 'left';
        } elseif ($right_score > $left_score) {
            $winner = 'right';
        } else {
            $winner = 'draw';
        }
        @endphp

        @if($stage == '1/8')
            <div class="playoff_map_item playoff_map_item_{{ $loop->index + 1 }} {{ $winner == 'left' ? 'win_left' : ($winner == 'right' ? 'win_right' : '') }}" data-stage="1">
                <div class="playoff_participant">
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
                            <img src="{{ asset('frontend/assets/img/flag_czech_republic.png') }}" alt="" class="participant_flag">
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
                    <p class="participant_name">{{ $left_team['name'] }}</p>
                </div>
                <p class="playoff_result"><span class="left_point">{{ $left_score_formatted }}</span><span class="dot"></span><span class="right_point">{{ $right_score_formatted }}</span></p>
                <div class="playoff_participant">
                    <p class="participant_name">{{ $right_team['name'] }}</p>
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
                </div>
                <p class="playoff_map_item_status">{{ $stage }}</p>
            </div>
        @elseif($stage == '1/4')
        <div class="playoff_map_item playoff_map_item_{{ $loop->index + 1 }} {{ $winner == 'left' ? 'win_left' : ($winner == 'right' ? 'win_right' : '') }}" data-stage="2">
            <div class="playoff_participant">
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
                            <img src="{{ asset('frontend/assets/img/flag_czech_republic.png') }}" alt="" class="participant_flag">
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
                <p class="participant_name">{{ $left_team['name'] }}</p>
            </div>
            <p class="playoff_result"><span class="left_point">{{$left_score}}</span><span class="dot"></span><span class="right_point">{{$right_score}}</span></p>
            <div class="playoff_participant">
                <p class="participant_name">{{ $right_team['name'] }}</p>
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
            </div>
            <p class="playoff_map_item_status">{{ $stage }}</p>
        </div>
        @elseif($stage == '1/2')
            <div class="playoff_map_item playoff_map_item_{{ $loop->index + 1 }} {{ $winner == 'left' ? 'win_left' : ($winner == 'right' ? 'win_right' : '') }}" data-stage="3">
                <div class="playoff_participant">
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
                                <img src="{{ asset('frontend/assets/img/flag_czech_republic.png') }}" alt="" class="participant_flag">
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
                            @elseif($post->team_1 == "Н/Д")

                            @endif
                    </div>
                    <p class="participant_name">{{ $left_team['name'] }}</p>
                </div>
                <p class="playoff_result"><span class="left_point">{{$left_score}}</span><span class="dot"></span><span class="right_point">{{$right_score}}</span></p>
                <div class="playoff_participant">
                    <p class="participant_name">{{ $right_team['name'] }}</p>
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
                            @elseif($post->team_2 == "Н/Д")

                            @endif
                    </div>
                </div>
                <p class="playoff_map_item_status">{{$stage}}</p>
            </div>
            @elseif($stage == 'Финал')
            <div class="playoff_map_item playoff_map_item_{{ $loop->index + 1 }} {{ $winner == 'left' ? 'win_left' : ($winner == 'right' ? 'win_right' : '')}}" data-stage="4">
                <div class="playoff_participant">
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
                                <img src="{{ asset('frontend/assets/img/flag_czech_republic.png') }}" alt="" class="participant_flag">
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
                    <p class="participant_name">{{ $left_team['name'] }}</p>
                </div>
                <p class="playoff_result"><span class="left_point">{{$left_score}}</span><span class="dot"></span><span class="right_point">{{$right_score}}</span></p>
                <div class="playoff_participant">
                    <p class="participant_name">{{ $right_team['name'] }}</p>
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
                </div>
                <p class="playoff_map_item_status">{{$stage}}</p>
            </div>
        @endif
        @endforeach
    @else
            <div class="playoff_map_item playoff_map_item_1 win_left" data-stage="1">
                <div class="playoff_participant">
                    <div class="participant_flag_container">
                        <!-- <img src="" alt="" class="participant_flag"> -->
                    </div>
                    <p class="participant_name"></p>
                </div>
                <p class="playoff_result"><span class="left_point">0</span><span class="dot"></span><span class="right_point">0</span></p>
                <div class="playoff_participant">
                    <p class="participant_name"></p>
                    <div class="participant_flag_container">
                        <!-- <img src="" alt="" class="participant_flag"> -->
                    </div>
                </div>
                <p class="playoff_map_item_status">1/8</p>
            </div>

            <div class="playoff_map_item playoff_map_item_2 win_left" data-stage="1">
                <div class="playoff_participant">
                    <div class="participant_flag_container">
                        <!-- <img src="" alt="" class="participant_flag"> -->
                    </div>
                    <p class="participant_name"></p>
                </div>
                <p class="playoff_result"><span class="left_point">0</span><span class="dot"></span><span class="right_point">0</span></p>
                <div class="playoff_participant">
                    <p class="participant_name"></p>
                    <div class="participant_flag_container">
                        <!-- <img src="" alt="" class="participant_flag"> -->
                    </div>
                </div>
                <p class="playoff_map_item_status">1/8</p>
            </div>

            <div class="playoff_map_item playoff_map_item_3 win_left" data-stage="1">
                <div class="playoff_participant">
                    <div class="participant_flag_container">
                        <!-- <img src="" alt="" class="participant_flag"> -->
                    </div>
                    <p class="participant_name"></p>
                </div>
                <p class="playoff_result"><span class="left_point">0</span><span class="dot"></span><span class="right_point">0</span></p>
                <div class="playoff_participant">
                    <p class="participant_name"></p>
                    <div class="participant_flag_container">
                        <!-- <img src="" alt="" class="participant_flag"> -->
                    </div>
                </div>
                <p class="playoff_map_item_status">1/8</p>
            </div>

            <div class="playoff_map_item playoff_map_item_4 win_left" data-stage="1">
                <div class="playoff_participant">
                    <div class="participant_flag_container">
                        <!-- <img src="" alt="" class="participant_flag"> -->
                    </div>
                    <p class="participant_name"></p>
                </div>
                <p class="playoff_result"><span class="left_point">0</span><span class="dot"></span><span class="right_point">0</span></p>
                <div class="playoff_participant">
                    <p class="participant_name"></p>
                    <div class="participant_flag_container">
                        <!-- <img src="" alt="" class="participant_flag"> -->
                    </div>
                </div>
                <p class="playoff_map_item_status">1/8</p>
            </div>

            <div class="playoff_map_item playoff_map_item_5 win_right" data-stage="1">
                <div class="playoff_participant">
                    <div class="participant_flag_container">
                        <!-- <img src="" alt="" class="participant_flag"> -->
                    </div>
                    <p class="participant_name"></p>
                </div>
                <p class="playoff_result"><span class="left_point">0</span><span class="dot"></span><span class="right_point">0</span></p>
                <div class="playoff_participant">
                    <p class="participant_name"></p>
                    <div class="participant_flag_container">
                        <!-- <img src="" alt="" class="participant_flag"> -->
                    </div>
                </div>
                <p class="playoff_map_item_status">1/8</p>
            </div>

            <div class="playoff_map_item playoff_map_item_6 win_right" data-stage="1">
                <div class="playoff_participant">
                    <div class="participant_flag_container">
                        <!-- <img src="" alt="" class="participant_flag"> -->
                    </div>
                    <p class="participant_name"></p>
                </div>
                <p class="playoff_result"><span class="left_point">0</span><span class="dot"></span><span class="right_point">0</span></p>
                <div class="playoff_participant">
                    <p class="participant_name"></p>
                    <div class="participant_flag_container">
                        <!-- <img src="" alt="" class="participant_flag"> -->
                    </div>
                </div>
                <p class="playoff_map_item_status">1/8</p>
            </div>

            <div class="playoff_map_item playoff_map_item_7 win_right" data-stage="1">
                <div class="playoff_participant">
                    <div class="participant_flag_container">
                        <!-- <img src="" alt="" class="participant_flag"> -->
                    </div>
                    <p class="participant_name"></p>
                </div>
                <p class="playoff_result"><span class="left_point">0</span><span class="dot"></span><span class="right_point">0</span></p>
                <div class="playoff_participant">
                    <p class="participant_name"></p>
                    <div class="participant_flag_container">
                        <!-- <img src="" alt="" class="participant_flag"> -->
                    </div>
                </div>
                <p class="playoff_map_item_status">1/8</p>
            </div>

            <div class="playoff_map_item playoff_map_item_8 win_right" data-stage="1">
                <div class="playoff_participant">
                    <div class="participant_flag_container">
                        <!-- <img src="" alt="" class="participant_flag"> -->
                    </div>
                    <p class="participant_name"></p>
                </div>
                <p class="playoff_result"><span class="left_point">0</span><span class="dot"></span><span class="right_point">0</span></p>
                <div class="playoff_participant">
                    <p class="participant_name"></p>
                    <div class="participant_flag_container">
                        <!-- <img src="" alt="" class="participant_flag"> -->
                    </div>
                </div>
                <p class="playoff_map_item_status">1/8</p>
            </div>

            <div class="playoff_map_item playoff_map_item_9 win_left" data-stage="2">
                <div class="playoff_participant">
                    <div class="participant_flag_container">
                        <!-- <img src="" alt="" class="participant_flag"> -->
                    </div>
                    <p class="participant_name"></p>
                </div>
                <p class="playoff_result"><span class="left_point">0</span><span class="dot"></span><span class="right_point">0</span></p>
                <div class="playoff_participant">
                    <p class="participant_name"></p>
                    <div class="participant_flag_container">
                        <!-- <img src="" alt="" class="participant_flag"> -->
                    </div>
                </div>
                <p class="playoff_map_item_status">1/4</p>
            </div>

            <div class="playoff_map_item playoff_map_item_10 win_left" data-stage="2">
                <div class="playoff_participant">
                    <div class="participant_flag_container">
                        <!-- <img src="" alt="" class="participant_flag"> -->
                    </div>
                    <p class="participant_name"></p>
                </div>
                <p class="playoff_result"><span class="left_point">0</span><span class="dot"></span><span class="right_point">0</span></p>
                <div class="playoff_participant">
                    <p class="participant_name"></p>
                    <div class="participant_flag_container">
                        <!-- <img src="" alt="" class="participant_flag"> -->
                    </div>
                </div>
                <p class="playoff_map_item_status">1/4</p>
            </div>

            <div class="playoff_map_item playoff_map_item_11 win_right" data-stage="2">
                <div class="playoff_participant">
                    <div class="participant_flag_container">
                        <!-- <img src="" alt="" class="participant_flag"> -->
                    </div>
                    <p class="participant_name"></p>
                </div>
                <p class="playoff_result"><span class="left_point">0</span><span class="dot"></span><span class="right_point">0</span></p>
                <div class="playoff_participant">
                    <p class="participant_name"></p>
                    <div class="participant_flag_container">
                        <!-- <img src="" alt="" class="participant_flag"> -->
                    </div>
                </div>
                <p class="playoff_map_item_status">1/4</p>
            </div>

            <div class="playoff_map_item playoff_map_item_12 win_right" data-stage="2">
                <div class="playoff_participant">
                    <div class="participant_flag_container">
                        <!-- <img src="" alt="" class="participant_flag"> -->
                    </div>
                    <p class="participant_name"></p>
                </div>
                <p class="playoff_result"><span class="left_point">0</span><span class="dot"></span><span class="right_point">0</span></p>
                <div class="playoff_participant">
                    <p class="participant_name"></p>
                    <div class="participant_flag_container">
                        <!-- <img src="" alt="" class="participant_flag"> -->
                    </div>
                </div>
                <p class="playoff_map_item_status">1/4</p>
            </div>

            <div class="playoff_map_item playoff_map_item_13 win_right" data-stage="3">
                <div class="playoff_participant">
                    <div class="participant_flag_container">
                        <!-- <img src="" alt="" class="participant_flag"> -->
                    </div>
                    <p class="participant_name"></p>
                </div>
                <p class="playoff_result"><span class="left_point">0</span><span class="dot"></span><span class="right_point">0</span></p>
                <div class="playoff_participant">
                    <p class="participant_name"></p>
                    <div class="participant_flag_container">
                        <!-- <img src="" alt="" class="participant_flag"> -->
                    </div>
                </div>
                <p class="playoff_map_item_status">1/2</p>
            </div>

            <div class="playoff_map_item playoff_map_item_14 win_right" data-stage="3">
                <div class="playoff_participant">
                    <div class="participant_flag_container">
                        <!-- <img src="" alt="" class="participant_flag"> -->
                    </div>
                    <p class="participant_name"></p>
                </div>
                <p class="playoff_result"><span class="left_point">0</span><span class="dot"></span><span class="right_point">0</span></p>
                <div class="playoff_participant">
                    <p class="participant_name"></p>
                    <div class="participant_flag_container">
                        <!-- <img src="" alt="" class="participant_flag"> -->
                    </div>
                </div>
                <p class="playoff_map_item_status">1/2</p>
            </div>

            <div class="playoff_map_item playoff_map_item_15 win_right" data-stage="4">
                <div class="playoff_participant">
                    <div class="participant_flag_container">
                        <!-- <img src="" alt="" class="participant_flag"> -->
                    </div>
                    <p class="participant_name"></p>
                </div>
                <p class="playoff_result"><span class="left_point">0</span><span class="dot"></span><span class="right_point">0</span></p>
                <div class="playoff_participant">
                    <p class="participant_name"></p>
                    <div class="participant_flag_container">
                        <!-- <img src="" alt="" class="participant_flag"> -->
                    </div>
                </div>
                <p class="playoff_map_item_status">Финал</p>
            </div>

    @endif
    </div>
</div>
