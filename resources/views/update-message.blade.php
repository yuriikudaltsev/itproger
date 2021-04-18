@extends('layouts.app')

@section('title-block')Оновлення записів@endsection

@section('content')
  <h1>Оновлення записів</h1>

  <form action="{{ route('contact-update-submit', $data->id) }}" method="post">
    @csrf

    <div class="form-group">
      <label for="name">Введіть ім'я:</label>
      <input type="text" name="name" value="{{ $data->name }}" placeholder="Введіть ім'я" id="name" class="form-control">
    </div>


    <div class="form-group">
      <label for="email">E-mail:</label>
      <input type="text" name="email" value="{{ $data->email }}" placeholder="Введіть E-mail" id="email" class="form-control">
    </div>

    <div class="form-group">
      <label for="subject">Тема повідомлення:</label>
      <input type="text" name="subject" value="{{ $data->subject }}" placeholder="Тема повідомлення" id="subject" class="form-control">
    </div>

    <div class="form-group">
      <label for="message">Повідомлення:</label>
      <textarea name="message" id="message" class="form-control" placeholder="Введіть повідомлення">{{ $data->message }}"</textarea>
    </div>

  <button type="submit" class="btn btn-success">Оновити</button>
</form>
@endsection
