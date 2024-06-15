<section id="schedule_section" class="main_section">
    <div class="schedule_top_line">
        {{-- @foreach($match_date->unique('date') as $post)
            @php
                $dateObj = \Carbon\Carbon::createFromFormat('Y-m-d', $post->date);
                $today = \Carbon\Carbon::today();
                $nextDay = $today->addDay();
                if ($dateObj->isSameDay($nextDay)) {
                    $displayDate = $dateObj->format('d.m');
                }
            @endphp
        @endforeach
        <h3 class="section_title">Расписание матчей&nbsp;<span class="schedule_date">{{ $displayDate ?? '' }}</span></h3> --}}
        {{-- показывает следущую дату --}}
        @php
            $today = \Carbon\Carbon::today();
            $displayDate = $today->format('d.m');
        @endphp
        <h3 class="section_title">Расписание матчей&nbsp;<span class="schedule_date">{{ $displayDate }}</span></h3>
        <div class="schedule_swiper_container">
            <div class="schedule_swiper swiper">

              <div class="swiper-wrapper">
                {{-- @foreach($match_date->unique('date') as $post)
                    @php
                        $dateObj = \Carbon\Carbon::createFromFormat('Y-m-d', $post->date);
                        $today = \Carbon\Carbon::today();
                        $nextDay = $today->addDay();

                    @endphp
                    <div class="swiper-slide">
                        <button class="slide_date_button {{ $dateObj->isSameDay($nextDay) ? 'active_slide_date_button' : '' }}" data-day="{{$post->date}}" data-date="{{$post->date}}">{{ date('d.m', strtotime($post->date)) }}</button>
                    </div>
                @endforeach --}} {{-- показывает следущую дату --}}
                @foreach($match_date->unique('date') as $post)
                    @php
                        $dateObj = \Carbon\Carbon::createFromFormat('Y-m-d', $post->date);
                        $today = \Carbon\Carbon::today();
                    @endphp
                    <div class="swiper-slide">
                        <button class="slide_date_button {{ $dateObj->isSameDay($today) ? 'active_slide_date_button' : '' }}" data-day="{{$post->date}}" data-date="{{$post->date}}">{{ date('d.m', strtotime($post->date)) }}</button>
                    </div>
                @endforeach

              </div>
            </div>
            <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
    </div>
    <div class="live_schedule_container">
        <div class="live_schedule_scrollzone">
            @php
                $today = \Carbon\Carbon::today()->format('Y-m-d');
                $match_date_grouped = $match_date->groupBy('date');
            @endphp


        @foreach($match_date_grouped as $date => $matches)
        @php
            $dateObj = \Carbon\Carbon::createFromFormat('Y-m-d', $date);
        @endphp
            <ul class="live_schedule live_schedule_day_{{ $dateObj->format('Y-m-d') }} {{ $dateObj->format('Y-m-d') == $today ? 'active_live_schedule' : '' }}">
                @foreach($matches->take(4) as $post)
                    <li class="live_schedule_item">
                        <div class="live_schedule_info">
                            <p class="live_schedule_time">{{ $post->time }}</p>
                            @if($post->status == 'Начался')
                                <p class="live_schedule_state live_on">Сейчас в эфире</p>
                                {{-- <p class="live_schedule_state">{{ $post->status }}</p> --}}
                            @elseif($post->status == 'Окончен')
                                <p class="live_schedule_state">{{ $post->status }}</p>
                            @elseif($post->status == 'Не начался')
                                <p class="live_schedule_state">{{ $post->status }}</p>
                            @endif

                        </div>
                        <div class="live_schedule_participants">
                            <div class="live_participant">
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
                                <p class="participant_name">{{ $post->team_1 }}</p>
                            </div>
                            <p class="live_result">{{ $post->score }}</p>
                            <div class="live_participant">
                                <p class="participant_name">{{ $post->team_2 }}</p>
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
                        </div>
                        @if($post->reference_view == NULL)

                        @else
                            <a href="{{$post->reference_view}}" target="_blank" class="live_link">Смотреть</a>
                        @endif
                    </li>
                @endforeach

            </ul>
        @endforeach
        </div>
    </div>
</section>
