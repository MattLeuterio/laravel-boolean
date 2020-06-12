@extends('layouts.main')

@section('main-content')
    <div class="faq-container">
        <header class="faq-header">
            <h1>IN COSTRUZIONE</h1>
            <h2>Domande frequenti</h2>
            <p>Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando? Contattaci e saremo felici di darti una mano.</p>
        </header>
        <main class="faq-main">
            <section class="faq-main--prima">
                <h3>Prima del corso</h3>
                <div class="question">
                    <div class="question-text">
                        <p>Chi può fare il corso Boolean?</p>
                    </div>
                    <div class="question-cta">
                        <i class="fas fa-plus qa-cta"></i>
                    </div>
                </div>
                <div class="answer">
                    <p class="answer-p">
                        Chiunque abbia una forte curiosità verso il mondo della programmazione e voglia di imparare a fare il mestiere di sviluppatore.
                        Età e curriculum non sono una discriminante: infatti, i nostri studenti hanno dai 18 ai 45 anni, sono giovani ragazzi senza alcuna esperienza lavorativa, ma anche affermati professionisti che vogliono cambiare settore.Se non hai mai programmato o se hai già seguito qualche corso ma senti di non aver approfondito abbastanza per diventare programmatore, Boolean è il corso che fa per te.
                    </p>
                </div>
            </section>
            <section class="faq-main--dopo">
                <h3>Dopo il corso</h3>
                <div class="question">
                    <div class="question-text">
                        
                    </div>
                    <div class="question-cta">
                        <i class="fas fa-plus qa-cta"></i>
                    </div>
                </div>
                <div class="answer">

                </div>
            </section>
        </main>
    </div>
    
@endsection

@section('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection