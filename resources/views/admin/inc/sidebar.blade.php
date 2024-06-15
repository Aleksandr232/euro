<div class="sidebar">
    <h4 class="p-3">EURO 2024</h4>
    <ul class="sidebar-nav">
      <li><a href="{{ route('schedule.index') }}"><i class="fas fa-calendar-alt me-2"></i>Рассписание матчей</a></li>
      <li><a href="{{ route('group.index') }}"><i class="fas fa-users me-2"></i>Групповой этап</a></li>
      <li><a href="#"><i class="fas fa-futbol me-2"></i>Плей-офф</a></li>
      <li>
        <form style="position:absolute; left:50px" method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn btn-primary">Выйти</button>
        </form>
      </li>
    </ul>
  </div>
