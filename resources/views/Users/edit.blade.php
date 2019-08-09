@extends('layout')

@section('content')
  <h1 class="title">Edit Users</h1>

  <form method="POST" action="/users/{{ $user->id }}" style="margin-bottom: 1em">
    @method('PATCH')
    @csrf
    <div class="field">
      <label class="label" for="user">Nama</label>
      <div class="control">
        <input type="text" class="input" name="name" placeholder="Name" value="{{ $user->name }}">
      </div>
    </div>
    <div class="field">
      <label class="label" for="user">Email</label>
      <div class="control">
        <input type="text" class="input" name="email" placeholder="Email..." value="{{ $user->email }}">
      </div>
    </div>
    <div class="field">
      <div class="control">
        <button type="submit" class="button is-link">Update</button>
      </div>
    </div>
  </form>

    <form method="POST" action="/users/{{ $user->id }}">
      @method('DELETE')
      @csrf

      <div class="field">
        <div class="control">
          <button type="submit" class="button">Delete</button>
        </div>
      </div>
    </form>
@endsection
