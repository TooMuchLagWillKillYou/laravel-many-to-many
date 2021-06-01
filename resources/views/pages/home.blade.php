@extends('layouts.main-layout')
@section('main')
    <main class="container">
        
        @foreach ($employees as $employee)
            <div class="employee">
                <div class="emp-info">
                    <h3>{{ $employee -> firstname }} {{ $employee -> lastname }}</h3>
                    <p>{{ $employee -> location -> street }} - <span class="country">{{ $employee -> location -> country }}</span></p>
                </div>

                <div class="tasks">
                    @foreach ($employee -> tasks as $task)
                        <div class="task-info">
                            <p><span>{{ $loop -> index }}</span>{{ ucfirst($task -> title) }}</p>
                            
                            <div class="opt">
                                <a href="">edit</a>
                                <a href="">delete</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
        
    </main>
@endsection