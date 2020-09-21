@extends('layouts.main-layout')

@section('content')

  <h1>Lunghe</h1>
  <ul>
    @foreach ($data as $pasta)
      @if ($pasta['tipo'] === 'lunga')
        <li>
          <h2>{{ $pasta['titolo'] }}</h2>
          <img src="{{ $pasta['src'] }}" alt="">
        </li>
      @endif
    @endforeach
  </ul>

  <br><br>

  <h1>Corte</h1>
  <ul>
    @foreach ($data as $pasta)
      @if ($pasta['tipo'] === 'corta')
        <li>
          <h2>{{ $pasta['titolo'] }}</h2>
          <img src="{{ $pasta['src'] }}" alt="">
        </li>
      @endif
    @endforeach
  </ul>

  <br><br>


  <h1>Cortissime</h1>
  <ul>
    @foreach ($data as $pasta)
      @if ($pasta['tipo'] === 'cortissima')
        <li>
          <h2>{{ $pasta['titolo'] }}</h2>
          <img src="{{ $pasta['src'] }}" alt="">
        </li>
      @endif
    @endforeach
  </ul>



@endsection
