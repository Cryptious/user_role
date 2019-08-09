@extends('layout')

@section('content')
  <h1 class="title">Edit Role Name</h1>

  <form method="POST" action="/rolenames/{{ $rolename->id }}" style="margin-bottom: 1em">
    @method('PATCH')
    @csrf
    <div class="field">
      <label class="label" for="role">Role Name</label>
      <div class="control">
        <input type="text" class="input" name="role" placeholder="Role Name" value="{{ $rolename->role }}">
      </div>
    </div>
    <div class="field">
      <div class="control">
        <button type="submit" class="button is-link">Update</button>
      </div>
    </div>
  </form>

    <form method="POST" action="/rolenames/{{ $rolename->id }}">
      @method('DELETE')
      @csrf

      <div class="field">
        <div class="control">
          <button type="submit" class="button">Delete</button>
        </div>
      </div>
    </form>
@endsection
