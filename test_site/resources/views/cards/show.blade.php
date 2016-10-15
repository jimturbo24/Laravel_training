@extends('layout')

@section('content')

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1>{{ $card -> title }}</h1>
      @foreach ($card->notes as $note)
        <ul class="list-group">
          <li class="list-group-item">
            {{ $note->body }}
            {{ $note->user_id }}
          </li>
        </ul>
      @endforeach
      <hr>
      <h3>Add a New Note</h3>

      <form class="" action="/cards/{{$card->id}}/notes" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <textarea name="body" class="form-control" rows="8"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Add Note</button>
        </div>
      </form>

    </div>
  </div>


@stop
