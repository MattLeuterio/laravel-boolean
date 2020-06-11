@extends('layouts.main')

@section('main-content')
    
    <div class="students-container">
        <h2>{{ $student['nome']}}</h2>
        <div class="students container">
            <div class="row student">
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
            </div>
        </div>
    </div>
    
@endsection