@extends('admin.layouts.main')

@section('title', 'EURO  2024 Групповой этап')

@section('content')
<div class="content">
    <div class="container">
        <table class="match-table">
          <thead>
            <tr>
              <th>Группа</th>
              <th>Команда</th>

            </tr>
          </thead>
          <form method="post" action="{{ route('group.store') }}"  enctype="multipart/form-data">
            @csrf
          <tbody>
            <tr>
              <td>
                <select name="group">
                  <option value="A" selected>A</option>
                  <option value="B" >B</option>
                  <option value="C" >C</option>
                  <option value="D" >D</option>
                  <option value="E" >E</option>
                  <option value="F" >F</option>
                </select>
              </td>
              <td>
                <select name="team">
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
            </td>
              <td><button type="submit">Отправить</button></td>
            </tr>
          </tbody>
        </form>
        </table>
        <div class="match">
        <table class="match-table">

                <thead>
                    <tr>
                        <th>Группа</th>
                        <th>Команда</th>
                        <th>М</th>
                        <th>В</th>
                        <th>П</th>
                        <th>Н</th>
                        <th>О</th>
                    </tr>
                </thead>
                @foreach($group  as $post)
                <form action={{ route('update_group', $post->id) }}  method="post">
                    @csrf
                    <tbody>
                        <tr>
                            <td>
                                <div style="width: 10px">{{$post->group}}</div>
                            </td>
                            <td>
                                @if($post->team == "Италия")
                                    <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_italy.png') }}" alt="" class="participant_flag">
                                    @elseif($post->team == "Албания")
                                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_albania.png') }}" alt="" class="participant_flag">
                                    @elseif($post->team == "Шотландия")
                                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_scotland.png') }}" alt="" class="participant_flag">
                                    @elseif($post->team == "Англия")
                                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_england.png') }}" alt="" class="participant_flag">
                                    @elseif($post->team == "Германия")
                                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_germany.png') }}" alt="" class="participant_flag">
                                    @elseif($post->team == "Нидерланды")
                                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_netherlands.png') }}" alt="" class="participant_flag">
                                    @elseif($post->team == "Бельгия")
                                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_belgium.png') }}" alt="" class="participant_flag">
                                    @elseif($post->team == "Франция")
                                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_france.png') }}" alt="" class="participant_flag">
                                    @elseif($post->team == "Испания")
                                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_spain.png') }}" alt="" class="participant_flag">
                                    @elseif($post->team == "Португалия")
                                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_portugal.png') }}" alt="" class="participant_flag">
                                    @elseif($post->team == "Польша")
                                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_poland.png') }}" alt="" class="participant_flag">
                                    @elseif($post->team == "Швейцария")
                                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_switzerland.png') }}" alt="" class="participant_flag">
                                    @elseif($post->team == "Чехия")
                                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_czech.png') }}" alt="" class="participant_flag">
                                    @elseif($post->team == "Дания")
                                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_denmark.png') }}" alt="" class="participant_flag">
                                    @elseif($post->team == "Швеция")
                                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_sweden.png') }}" alt="" class="participant_flag">
                                    @elseif($post->team == "Австрия")
                                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_austria.png') }}" alt="" class="participant_flag">
                                    @elseif($post->team == "Хорватия")
                                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_croatia.png') }}" alt="" class="participant_flag">
                                    @elseif($post->team == "Румыния")
                                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_romania.png') }}" alt="" class="participant_flag">
                                    @elseif($post->team == "Венгрия")
                                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_hungary.png') }}" alt="" class="participant_flag">
                                    @elseif($post->team == "Сербия")
                                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_serbia.png') }}" alt="" class="participant_flag">
                                    @elseif($post->team == "Турция")
                                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_turkey.png') }}" alt="" class="participant_flag">
                                    @elseif($post->team == "Украина")
                                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_ukraine.png') }}" alt="" class="participant_flag">
                                    @elseif($post->team == "Грузия")
                                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_georgia.png') }}" alt="" class="participant_flag">
                                    @elseif($post->team == "Словения")
                                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_slovenia.png') }}" alt="" class="participant_flag">
                                    @elseif($post->team == "Словакия")
                                        <img style="width: 90px; position: relative;" src="{{ asset('frontend/assets/img/flag_slovakia.png') }}" alt="" class="participant_flag">
                                    @endif
                            </td>
                            <td>
                                <input style="width: 50px" value="{{$post->matches}}" name="matches" type="number" />
                            </td>
                            <td>
                                <input style="width: 50px" value="{{$post->win }}" name="win" type="number" />
                            </td>
                            <td>
                                <input style="width: 50px" value="{{$post->losses}}" name="losses" type="number" />
                            </td>
                            <td>
                                <input style="width: 50px" value="{{$post->draw}}" name="draw" type="number" />
                            </td>
                            <td>
                                <input  style="width: 50px" value="{{$post->point}}" name="point" type="number" />
                            </td>
                            <td>
                                <button type="submit">Подвердить</button>
                            </td>
                        </tr>
                    </tbody>
                </form>
            @endforeach
          </table>
        </div>
      </div>
  </div>
@endsection
