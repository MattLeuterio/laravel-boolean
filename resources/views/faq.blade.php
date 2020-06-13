@extends('layouts.main')

@section('main-content')
    <div class="faq-container">
        <header class="faq-header">
            <h2>Domande frequenti</h2>
            <p>Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando? Contattaci e saremo felici di darti una mano.</p>
        </header>
        <main class="faq-main">
            <section class="faq-section faq-main--prima">
                <h3>Prima del corso</h3>
                @foreach ($prima as $qa)
                <div class="question">
                    <div class="question-text">
                        <p>{{$qa['question']}}</p>
                        <i class="fas fa-plus qa-cta active"></i>
                        <i class="fas fa-minus qa-cta"></i>
                    </div>
                    <div class="answer">
                        <p>
                            {{$qa['answer']}}
                        </p>
                    </div>
                </div>
                @endforeach
            </section>
            <section class="faq-section faq-main--dopo">
                <h3>Dopo il corso</h3>
                @foreach ($dopo as $qa)
                <div class="question">
                    <div class="question-text" id="question4">
                        <p>{{$qa['question']}}</p>
                        <i class="fas fa-plus qa-cta active"></i>
                        <i class="fas fa-minus qa-cta"></i>
                    </div>
                    <div class="answer">
                        <p>
                            {{$qa['answer']}}
                        </p>
                    </div>
                </div>
                
                @endforeach
            </section>
        </main>
    </div>
    
@endsection

@section('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection