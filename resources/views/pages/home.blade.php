@extends('layouts.main-layout')
@section('main')
    <main>
        
        @foreach ($employees as $employee)
            <div class="employee">
                <div class="emp-info">
                    <p>{{ $employee -> firstname }} {{ $employee -> lastname }}</p>
                    <p>{{ $employee -> location -> street }} <span class="country">{{ $employee -> location -> country }}</span></p>
                </div>

                <div class="tasks">
                    @foreach ($employee -> tasks as $task)
                        <p><span>{{ $loop -> index }}</span>{{ $task -> title }}</p>
                    @endforeach
                </div>
            </div>
        @endforeach
        
    </main>
@endsection