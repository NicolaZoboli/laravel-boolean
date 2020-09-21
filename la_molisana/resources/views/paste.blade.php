@extends('layouts.main-layout')

@section('content')

  <main>
    <h1>Le Lunghe</h1>
    <ul>
      @foreach ($data as $pasta)
        @if ($pasta['tipo'] === 'lunga')
          <li>
            <img src="{{ $pasta['src'] }}" alt="">
          </li>
        @endif
      @endforeach
    </ul>

    <br><br>

    <h1>Le Corte</h1>
    <ul>
      @foreach ($data as $pasta)
        @if ($pasta['tipo'] === 'corta')
          <li>
            <img src="{{ $pasta['src'] }}" alt="">
          </li>
        @endif
      @endforeach
    </ul>

    <br><br>


    <h1>Le Cortissime</h1>
    <ul>
      @foreach ($data as $pasta)
        @if ($pasta['tipo'] === 'cortissima')
          <li>
            <img src="{{ $pasta['src'] }}" alt="">
          </li>
        @endif
      @endforeach
    </ul>
  </main>




@endsection
