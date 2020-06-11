@extends('layouts.main')

@section('main-content')
    
    <div class="students-container">
        <h1>I nostri ex studenti</h1>
        <div class="students container">
            @foreach ($students as $student)
            <a href="{{ route('students.show', ['id' => $student['id']]) }}" class="row">
                <div class="cardstud">
                    <div class="cardstud-info">
                        <img src="{{ $student['img'] }}" alt=" {{ $student['nome']}}" class="card-img" alt="...">
                        <ul>
                            <li>
                                <h3> {{ $student['nome'] }} ({{ $student['età'] }} anni)</h3>
                            </li>
                            <li>
                                <h4>
                                    Assunt{{ $student['genere'] == 'm' ? 'o' : 'a' }} da {{ $student['azienda'] }} come {{ $student['ruolo'] }}
                                </h4>
                            </li>
                        </ul>
                    </div>
                    <div class="">
                        <div class="cardstud-descr">
                            <p class="description">{{ $student['descrizione'] }}</p>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
    
@endsection