@extends('admin.layouts.main')

@section('title', 'EURO  2024 панель управления')

@section('content')
<div class="row mb-4 justify-content-center mt-5">
    <div class="col-md-3">
        <a href="{{ route('schedule.index') }}" class="text-decoration-none">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-3">Расписание матчей</h5>
                    <div class="fas fa-calendar-alt fa-4x me-3"></div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="{{ route('group.index') }}" class="text-decoration-none">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-3">Групповой этап</h5>
                    <div class="fas fa-users fa-4x me-3"></div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="{{ route('playoff.index') }}" class="text-decoration-none">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-3">Плей-офф</h5>
                    <div class="fas fa-futbol fa-4x me-3"></div>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection
