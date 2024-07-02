@extends('admin.layouts.main')

@section('title', 'EURO  2024 Плей-офф')

@section('content')
<div class="content">
    <div class="container">
        <table class="match-table">
          <thead>
            <tr>
              <th>Этап</th>
              <th>Команда 1</th>
              <th>Команда 2</th>
              <th>Счет</th>
              <th><a title="очистить плей-офф" style="color: red" class="fas fa-trash" href="{{ route('deleteAll' )}}"></a></th>
            </tr>
          </thead>
          <form method="post" action="{{ route('playoff.store') }}"  enctype="multipart/form-data">
            @csrf
          <tbody>
            <tr>
              <td>
                <select name="stage">
                  <option value="1/8">1/8</option>
                  <option value="1/4">1/4</option>
                  <option value="1/2">1/2</option>
                  <option value="Финал">Финал</option>
                </select>
              </td>
              <td>
                <select name="team_1">
                    <option value="Германия">Германия</option>
                    <option value="Шотландия">Шотландия</option>
                    <option value="Венгрия">Венгрия</option>
                    <option value="Швейцария">Швейцария</option>
                    <option value="Испания">Испания</option>
                    <option value="Хорватия">Хорватия</option>
                    <option value="Италия">Италия</option>
                    <option value="Албания">Албания</option>
                    <option value="Словения">Словения</option>
                    <option value="Дания">Дания</option>
                    <option value="Сербия">Сербия</option>
                    <option value="Англия">Англия</option>
                    <option value="Польша">Польша</option>
                    <option value="Нидерланды">Нидерланды</option>
                    <option value="Австрия">Австрия</option>
                    <option value="Франция">Франция</option>
                    <option value="Бельгия">Бельгия</option>
                    <option value="Словакия">Словакия</option>
                    <option value="Румыния">Румыния</option>
                    <option value="Украина">Украина</option>
                    <option value="Турция">Турция</option>
                    <option value="Грузия">Грузия</option>
                    <option value="Португалия">Португалия</option>
                    <option value="Чехия">Чехия</option>
                    <option value="Н/Д">Н/Д</option>
              </select>
            </td>
              <td>
                <select name="team_2">
                    <option value="Германия">Германия</option>
                    <option value="Шотландия">Шотландия</option>
                    <option value="Венгрия">Венгрия</option>
                    <option value="Швейцария">Швейцария</option>
                    <option value="Испания">Испания</option>
                    <option value="Хорватия">Хорватия</option>
                    <option value="Италия">Италия</option>
                    <option value="Албания">Албания</option>
                    <option value="Словения">Словения</option>
                    <option value="Дания">Дания</option>
                    <option value="Сербия">Сербия</option>
                    <option value="Англия">Англия</option>
                    <option value="Польша">Польша</option>
                    <option value="Нидерланды">Нидерланды</option>
                    <option value="Австрия">Австрия</option>
                    <option value="Франция">Франция</option>
                    <option value="Бельгия">Бельгия</option>
                    <option value="Словакия">Словакия</option>
                    <option value="Румыния">Румыния</option>
                    <option value="Украина">Украина</option>
                    <option value="Турция">Турция</option>
                    <option value="Грузия">Грузия</option>
                    <option value="Португалия">Португалия</option>
                    <option value="Чехия">Чехия</option>
                    <option value="Н/Д">Н/Д</option>
              </select>
              </td>
              <td>
                <input name="score" type="text" id="scoreInput" maxlength="5" pattern="\d+:\d+" title="Введите счет в формате 'число:число'" onkeyup="formatScoreInput(this)" />
              </td>
              <td><button type="submit">Отправить</button></td>
            </tr>
          </tbody>
        </form>
        </table>
        <div class="match">
        <table class="match-table">
            @foreach($playOff   as $post)
                <form action={{ route('update_playoff', $post->id) }} method="post">
                    @csrf
                <tbody>
                <tr title="{{$post->stage}} {{$post->team_1}} и {{$post->team_2}} ">
                    <td>
                        <div style="width: 100%">{{$post->stage}}</div>
                    </td>
                    <td>
                        @if($post->team_1 == "Италия")
                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_italy.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Албания")
                            <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_albania.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Шотландия")
                            <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_scotland.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Англия")
                            <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_england.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Германия")
                            <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_germany.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Нидерланды")
                            <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_netherlands.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Бельгия")
                            <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_belgium.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Франция")
                            <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_france.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Испания")
                            <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_spain.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Португалия")
                            <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_portugal.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Польша")
                            <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_poland.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Швейцария")
                            <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_switzerland.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Чехия")
                            <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_czech.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Дания")
                            <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_denmark.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Швеция")
                            <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_sweden.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Австрия")
                            <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_austria.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Хорватия")
                            <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_croatia.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Румыния")
                            <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_romania.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Венгрия")
                            <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_hungary.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Сербия")
                            <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_serbia.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Турция")
                            <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_turkey.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Украина")
                            <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_ukraine.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Грузия")
                            <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_georgia.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Словения")
                            <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_slovenia.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Словакия")
                            <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_slovakia.png') }}" alt="" class="participant_flag">
                        @elseif($post->team_1 == "Н/Д")
                            <select name="team_1">
                                <option value="Германия">Германия</option>
                                <option value="Шотландия">Шотландия</option>
                                <option value="Венгрия">Венгрия</option>
                                <option value="Швейцария">Швейцария</option>
                                <option value="Испания">Испания</option>
                                <option value="Хорватия">Хорватия</option>
                                <option value="Италия">Италия</option>
                                <option value="Албания">Албания</option>
                                <option value="Словения">Словения</option>
                                <option value="Дания">Дания</option>
                                <option value="Сербия">Сербия</option>
                                <option value="Англия">Англия</option>
                                <option value="Польша">Польша</option>
                                <option value="Нидерланды">Нидерланды</option>
                                <option value="Австрия">Австрия</option>
                                <option value="Франция">Франция</option>
                                <option value="Бельгия">Бельгия</option>
                                <option value="Словакия">Словакия</option>
                                <option value="Румыния">Румыния</option>
                                <option value="Украина">Украина</option>
                                <option value="Турция">Турция</option>
                                <option value="Грузия">Грузия</option>
                                <option value="Португалия">Португалия</option>
                                <option value="Чехия">Чехия</option>
                        </select>
                        @endif
                    </td>
                    <td >
                        @if($post->team_2 == "Италия")
                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_italy.png') }}" alt="" class="participant_flag">
                    @elseif($post->team_2 == "Албания")
                        <img  style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_albania.png') }}" alt="" class="participant_flag">
                    @elseif($post->team_2 == "Шотландия")
                        <img  style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_scotland.png') }}" alt="" class="participant_flag">
                    @elseif($post->team_2 == "Англия")
                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_england.png') }}" alt="" class="participant_flag">
                    @elseif($post->team_2 == "Германия")
                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_germany.png') }}" alt="" class="participant_flag">
                    @elseif($post->team_2 == "Нидерланды")
                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_netherlands.png') }}" alt="" class="participant_flag">
                    @elseif($post->team_2 == "Бельгия")
                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_belgium.png') }}" alt="" class="participant_flag">
                    @elseif($post->team_2 == "Франция")
                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_france.png') }}" alt="" class="participant_flag">
                    @elseif($post->team_2 == "Испания")
                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_spain.png') }}" alt="" class="participant_flag">
                    @elseif($post->team_2 == "Португалия")
                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_portugal.png') }}" alt="" class="participant_flag">
                    @elseif($post->team_2 == "Польша")
                        <img  style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_poland.png') }}" alt="" class="participant_flag">
                    @elseif($post->team_2 == "Швейцария")
                        <img  style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_switzerland.png') }}" alt="" class="participant_flag">
                    @elseif($post->team_2 == "Чехия")
                        <img  style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_czech.png') }}" alt="" class="participant_flag">
                    @elseif($post->team_2 == "Дания")
                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_denmark.png') }}" alt="" class="participant_flag">
                    @elseif($post->team_2 == "Швеция")
                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_sweden.png') }}" alt="" class="participant_flag">
                    @elseif($post->team_2 == "Австрия")
                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_austria.png') }}" alt="" class="participant_flag">
                    @elseif($post->team_2 == "Хорватия")
                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_croatia.png') }}" alt="" class="participant_flag">
                    @elseif($post->team_2 == "Румыния")
                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_romania.png') }}" alt="" class="participant_flag">
                    @elseif($post->team_2 == "Венгрия")
                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_hungary.png') }}" alt="" class="participant_flag">
                    @elseif($post->team_2 == "Сербия")
                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_serbia.png') }}" alt="" class="participant_flag">
                    @elseif($post->team_2 == "Турция")
                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_turkey.png') }}" alt="" class="participant_flag">
                    @elseif($post->team_2 == "Украина")
                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_ukraine.png') }}" alt="" class="participant_flag">
                    @elseif($post->team_2 == "Грузия")
                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_georgia.png') }}" alt="" class="participant_flag">
                    @elseif($post->team_2 == "Словения")
                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_slovenia.png') }}" alt="" class="participant_flag">
                    @elseif($post->team_2 == "Словакия")
                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_slovakia.png') }}" alt="" class="participant_flag">
                    @elseif($post->team_2 == "Н/Д")
                        <select name="team_2">
                            <option value="Германия">Германия</option>
                            <option value="Шотландия">Шотландия</option>
                            <option value="Венгрия">Венгрия</option>
                            <option value="Швейцария">Швейцария</option>
                            <option value="Испания">Испания</option>
                            <option value="Хорватия">Хорватия</option>
                            <option value="Италия">Италия</option>
                            <option value="Албания">Албания</option>
                            <option value="Словения">Словения</option>
                            <option value="Дания">Дания</option>
                            <option value="Сербия">Сербия</option>
                            <option value="Англия">Англия</option>
                            <option value="Польша">Польша</option>
                            <option value="Нидерланды">Нидерланды</option>
                            <option value="Австрия">Австрия</option>
                            <option value="Франция">Франция</option>
                            <option value="Бельгия">Бельгия</option>
                            <option value="Словакия">Словакия</option>
                            <option value="Румыния">Румыния</option>
                            <option value="Украина">Украина</option>
                            <option value="Турция">Турция</option>
                            <option value="Грузия">Грузия</option>
                            <option value="Португалия">Португалия</option>
                            <option value="Чехия">Чехия</option>
                    </select>
                    @endif
                    </td>
                    <td>
                    <input value="{{$post->score}}" name="score" type="text" id="scoreInput" maxlength="12"  title="Введите счет в формате 'число:число'" onkeyup="formatScoreInput(this)" />
                    </td>
                    <td><button type="submit">Подтвердить</button></td>
                </tr>
                </tbody>
            </form>
                @endforeach
          </table>
        </div>
      </div>
  </div>
@endsection
