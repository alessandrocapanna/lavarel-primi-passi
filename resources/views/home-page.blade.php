@extends('layout.layout')

@section('content')
  <main>
    <div class="container">
      <section id="remote">
        <div>
          <h3>Una vera scuola a casa tua</h3>
          <ul>
            <li>Il mattino è maggiormente dedicato alla teoria con lezioni in diretta. Comodamente da casa tua, puoi interagire con i tuoi compagni e con il teacher , proprio come se fossi a scuola.</li>
            <li>Il pomeriggio è dedicato alle esercitazioni. In qualsiasi momento puoi chiedere supporto ai tutor per risolvere gli esercizi che ti abbiamo assegnato. Alza la mano e siamo subito da te!</li>
          </ul>
        </div>
        <img src="{{ asset('img/slack.gif')}}" alt="">
      </section>
    </div>
  </main>
@endsection
