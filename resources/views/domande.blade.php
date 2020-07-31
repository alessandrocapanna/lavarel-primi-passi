@extends('layout.layout')

@section('content')
  <main>
    <div class="container">
      <div class="titolo">
        <h2>Domande frequenti</h2>
        <p>Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando? Contattaci e saremo felici di darti una mano.</p>
      </div>

      <div class="domande">
        <div class="sx">
          <h3>Prima del corso</h3>
          @foreach ($faqsListBefore as $faq)
            <h4>{{ $faq['question'] }}</h4>
            <p>{{ $faq['answer'] }}</p>
          @endforeach
        </div>

        <div class="dx">
          <h3>Dopo il corso</h3>
          @foreach ($faqsListAfter as $faq)
            <h4>{{ $faq['question'] }}</h4>
            <p>{{ $faq['answer'] }}</p>
          @endforeach
        </div>
      </div>

    </div>
  </main>
@endsection
