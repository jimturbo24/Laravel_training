@extends('layout')

@section('content')
  <h1>All Cards</h1>

  @foreach ($cards as $card)
    <div class="">
      <a href="/cards/{{ $card->id }}">{{ $card->title }}</a>
    </div>
  @endforeach

@stop
